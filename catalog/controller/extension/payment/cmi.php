<?php

class ControllerExtensionPaymentCmi extends Controller
{
    public function index()
    {
        $this->load->language('extension/payment/cmi');

        if (!$this->customer->isLogged()) {
            $this->response->redirect("account/login", array("language" => $this->config->get("config_language")));
        }

        if (isset($this->request->get['order_id'])) {
            $this->load->model("account/order");

            $order_info = $this->model_account_order->getOrder($this->request->get['order_id']);

            $address = $order_info['shipping_address_1'] . " " . $order_info['shipping_address_2'];

            $city = $order_info['shipping_city'];
            $postcode = $order_info['shipping_postcode'];

            $data['customer'] = array(
                "id" => $this->customer->getId(),
                "name" => $this->customer->getLastName() . " " . $this->customer->getFirstName(),
                "email" => $this->customer->getEmail(),
                "telephone" => $this->customer->getTelephone(),
                "address" => $address,
                "city" => $city,
                "postcode" => $postcode
            );

            $totals = $this->model_account_order->getOrderTotals($this->request->get['order_id']);
            foreach ($totals as $total){
                if($total['code'] == "total"){
                    $data['total'] = $total['value'];
                }
            }
            $data['order_id'] = $this->request->get['order_id'];
        } else {
            // Validate if shipping address has been set.
            if (isset($this->session->data['shipping_address'])) {
                $this->load->model("account/address");
                $result = $this->model_account_address->getAddress($this->session->data['shipping_address']);

                $address = $result['address_1'] . " " . $result['address_2'];
                $city = $result["city"];
                $postcode = $result['postcode'];
            } else {
                $this->session->data['warning'] = $this->language->get("error_address");
                $this->response->redirect("checkout/checkout", array("language" => $this->config->get("config_language")));
            }
            $data['customer'] = array(
                "id" => $this->customer->getId(),
                "name" => $this->customer->getLastName() . " " . $this->customer->getFirstName(),
                "email" => $this->customer->getEmail(),
                "telephone" => $this->customer->getTelephone(),
                "address" => $address,
                "city" => $city,
                "postcode" => $postcode
            );

            $totals = array();
            $taxes = $this->cart->getTaxes();
            $total = 0;

            // Because __call can not keep var references so we put them into an array.
            $total_data = array(
                'totals' => &$totals,
                'taxes' => &$taxes,
                'total' => &$total
            );

            $this->load->model('setting/extension');

            $sort_order = array();

            $results = $this->model_setting_extension->getExtensions('total');

            foreach ($results as $key => $value) {
                $sort_order[$key] = $this->config->get('total_' . $value['code'] . '_sort_order');
            }

            array_multisort($sort_order, SORT_ASC, $results);

            foreach ($results as $result) {
                if ($this->config->get('total_' . $result['code'] . '_status')) {
                    $this->load->model('extension/total/' . $result['code']);

                    // We have to put the totals in an array so that they pass by reference.
                    $this->{'model_extension_total_' . $result['code']}->getTotal($total_data);
                }
            }

            $sort_order = array();

            foreach ($totals as $key => $value) {
                $sort_order[$key] = $value['sort_order'];
            }

            array_multisort($sort_order, SORT_ASC, $totals);

            if (isset($this->session->data['delivery'])) {
                $total += $this->session->data['delivery'];
            }

            $data['total'] = $total;

            $data['order_id'] = $this->session->data['order_id'];
        }

        $data['client_id'] = "600000815";
        $data['currency_code'] = 504;
        $data['store_type'] = "3d_pay_hosting";
        $data['hash_algorithm'] = "ver3";
        $data['Transaction_type'] = "PreAuth";
        $data['callbackUrl'] = $this->url->link("extension/payment/cmi/callback");
        $data['okFailUrl'] = $this->url->link("extension/payment/cmi/okFail");
        $data['store_url'] = $this->config->get('config_url');
        $data['rnd'] = microtime();
        $data['action'] = $this->url->link("extension/payment/cmi/sendData");

        $this->response->setOutput($this->load->view("extension/payment/cmi", $data));
    }

    public
    function sendData()
    {
        if (isset($this->session->data['order_id'])) {
            $this->cart->clear();


            unset($this->session->data['shipping_method']);
            unset($this->session->data['payment_method']);
            unset($this->session->data['order_id']);
            unset($this->session->data['coupon']);
            unset($this->session->data['reward']);
            unset($this->session->data['voucher']);
            unset($this->session->data['vouchers']);
            unset($this->session->data['totals']);
        }

        $data['action'] = "https://payment.cmi.co.ma/fim/est3Dgate";

        $data['params'] = $this->request->post;

        $data['store_key'] = "Qwerty1234";

        $postParams = array_keys($this->request->post);
        natcasesort($postParams);

        $hashval = "";
        foreach ($postParams as $param) {
            $paramValue = trim($this->request->post[$param]);
            $escapedParamValue = str_replace("|", "\\|", str_replace("\\", "\\\\", $paramValue));

            $lowerParam = strtolower($param);
            if ($lowerParam != "hash" && $lowerParam != "encoding") {
                $hashval .= $escapedParamValue . "|";
            }
        }

        $escapedStoreKey = str_replace("|", "\\|", str_replace("\\", "\\\\", $data['store_key']));
        $hashval .= $escapedStoreKey;
        $calculatedHashValue = hash('sha512', $hashval);
        $hash = base64_encode(pack('H*', $calculatedHashValue));
        $data['hash'] = $hash;

        $this->response->setOutput($this->load->view("extension/payment/cmi_info", $data));
    }

    public
    function callback()
    {
        $storeKey = "Qwerty1234";

        $postParams = array_keys($this->request->post);
        natcasesort($postParams);

        $hach = "";
        $hashval = "";
        foreach ($postParams as $param) {
            $paramValue = html_entity_decode(preg_replace("/\n$/", "", $this->request->post[$param]), ENT_QUOTES, 'UTF-8');

            $hach = $hach . "(!" . $param . "!:!" . $this->request->post[$param] . "!)";
            $escapedParamValue = str_replace("|", "\\|", str_replace("\\", "\\\\", $paramValue));

            $lowerParam = strtolower($param);
            if ($lowerParam != "hash" && $lowerParam != "encoding") {
                $hashval = $hashval . $escapedParamValue . "|";
            }
        }

        $escapedStoreKey = str_replace("|", "\\|", str_replace("\\", "\\\\", $storeKey));
        $hashval = $hashval . $escapedStoreKey;

        $calculatedHashValue = hash('sha512', $hashval);
        $actualHash = base64_encode(pack('H*', $calculatedHashValue));

        $retrievedHash = $this->request->post["HASH"];
        if ($retrievedHash == $actualHash && $this->request->post["ProcReturnCode"] == "00") {
            //	"Il faut absolument verifier toutes les informations envoyées par MTC (requete server-to-server) avec les données du site avant de procéder à la confirmation de la transaction!"
            //	"Par exemple le montant envoyé dans la requête de MTC doit correspondre exactement au montant de la commande enregistré dans la BDD du site marchand.
            //  "Mettre à jour la base de données du site marchand en vérifiant si la commande existe et correspond au retour MTC!"
            //  "Dans cette MAJ, il faut enregistrer le n° du Bon de commande de paiement envoyé dans le paramètre ""orderNumber"" "
            echo "ACTION=POSTAUTH";
        } else {
            echo "APPROVED";
        }
    }

    public
    function okFail()
    {

        $postParams = array();
        foreach ($this->request->post as $key => $value) {
            array_push($postParams, $key);
            echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
        }

        natcasesort($postParams);

        $hashval = "";
        foreach ($postParams as $param) {
            $paramValue = trim(html_entity_decode($this->request->post[$param], ENT_QUOTES, 'UTF-8'));
            $escapedParamValue = str_replace("|", "\\|", str_replace("\\", "\\\\", $paramValue));

            $lowerParam = strtolower($param);
            if ($lowerParam != "hash" && $lowerParam != "encoding") {
                $hashval = $hashval . $escapedParamValue . "|";
            }
        }

        $storeKey = "Qwerty1234";
        $escapedStoreKey = str_replace("|", "\\|", str_replace("\\", "\\\\", $storeKey));
        $hashval = $hashval . $escapedStoreKey;

        $calculatedHashValue = hash('sha512', $hashval);
        $actualHash = base64_encode(pack('H*', $calculatedHashValue));

        $retrievedHash = $this->request->post["HASH"];
        if ($retrievedHash == $actualHash) {

            $this->load->model("extension/payment/cmi");

            $data = array("order_id" => $this->request->post['ReturnOid'],
                "cmi_card" => $this->request->post['maskedCreditCard'],
                "hash" => $this->request->post['HASH']
            );

            $this->model_extension_payment_cmi->addPayment($data);

            $this->response->redirect($this->url->link('checkout/success'));
        } else {
            echo "<h4>Security Alert. The digital signature is not valid.</h4>" . " <br />\r\n";
        }
    }
}