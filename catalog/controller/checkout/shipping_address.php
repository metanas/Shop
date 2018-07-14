<?php

class ControllerCheckoutShippingAddress extends Controller
{
    public function index()
    {
        $this->load->language('checkout/checkout');

        if (isset($this->session->data['shipping_address']['address_id'])) {
            $data['address_id'] = $this->session->data['shipping_address']['address_id'];
        } else {
            $data['address_id'] = $this->customer->getAddressId();
        }

        $this->load->model('account/address');

        $data['addresses'] = $this->model_account_address->getAddresses();

        if (isset($this->session->data['shipping_address']['postcode'])) {
            $data['postcode'] = $this->session->data['shipping_address']['postcode'];
        } else {
            $data['postcode'] = '';
        }

        if (isset($this->session->data['shipping_address']['country_id'])) {
            $data['country_id'] = $this->session->data['shipping_address']['country_id'];
        } else {
            $data['country_id'] = $this->config->get('config_country_id');
        }

        if (isset($this->session->data['shipping_address']['zone_id'])) {
            $data['zone_id'] = $this->session->data['shipping_address']['zone_id'];
        } else {
            $data['zone_id'] = '';
        }

        $this->load->model('localisation/country');

        $data['countries'] = $this->model_localisation_country->getCountries();

        // Custom Fields
        $data['custom_fields'] = array();

        $this->load->model('account/custom_field');

        $custom_fields = $this->model_account_custom_field->getCustomFields($this->config->get('config_customer_group_id'));

        foreach ($custom_fields as $custom_field) {
            if ($custom_field['location'] == 'address') {
                $data['custom_fields'][] = $custom_field;
            }
        }

        unset($this->session->data['address_id']);
        unset($this->session->data['payment_address']);
        $data['language'] = $this->config->get('config_language');

        $this->response->setOutput($this->load->view('checkout/shipping_address', $data));
        return $this->load->view('checkout/shipping_address', $data);
    }

    public function add()
    {
        $this->load->language('checkout/checkout');

        $json = array();

        // Validate if customer is logged in.
        if (!$this->customer->isLogged()) {
            $json['redirect'] = $this->url->link('checkout/checkout', 'language=' . $this->config->get('config_language'));
        }

//		 Validate if shipping is required. If not the customer should not have reached this page.
//		if (!$this->cart->hasShipping()) {
//			$json['redirect'] = $this->url->link('checkout/checkout', 'language=' . $this->config->get('config_language'));
//		}

        // Validate cart has products and has stock.
        if ((!$this->cart->hasProducts() && empty($this->session->data['vouchers'])) || (!$this->cart->hasStock() && !$this->config->get('config_stock_checkout'))) {
            $json['redirect'] = $this->url->link('checkout/cart', 'language=' . $this->config->get('config_language'));
        }

        // Validate minimum quantity requirements.
        $products = $this->cart->getProducts();

        foreach ($products as $product) {
            $product_total = 0;

            foreach ($products as $product_2) {
                if ($product_2['product_id'] == $product['product_id']) {
                    $product_total += $product_2['quantity'];
                }
            }

            if ($product['minimum'] > $product_total) {
                $json['redirect'] = $this->url->link('checkout/cart', 'language=' . $this->config->get('config_language'));

                break;
            }
        }

        if (!$json) {
            $this->load->model('account/address');

            if (isset($this->request->post['shipping_address']) && $this->request->post['shipping_address'] == 'existing') {
                if (empty($this->request->post['address_id'])) {
                    $json['error']['warning'] = $this->language->get('error_address');
                } elseif (!in_array($this->request->post['address_id'], array_keys($this->model_account_address->getAddresses()))) {
                    $json['error']['warning'] = $this->language->get('error_address');
                }

                if (!$json) {
                    $this->session->data['shipping_address'] = $this->model_account_address->getAddress($this->request->post['address_id']);

                    unset($this->session->data['shipping_method']);
                    unset($this->session->data['shipping_methods']);
                }
            } else {
                if ((utf8_strlen(trim($this->request->post['firstname'])) < 1) || (utf8_strlen(trim($this->request->post['firstname'])) > 32)) {
                    $json['error']['firstname'] = $this->language->get('error_firstname');
                }

                if ((utf8_strlen(trim($this->request->post['lastname'])) < 1) || (utf8_strlen(trim($this->request->post['lastname'])) > 32)) {
                    $json['error']['lastname'] = $this->language->get('error_lastname');
                }

                if ((utf8_strlen(trim($this->request->post['address_1'])) < 3) || (utf8_strlen(trim($this->request->post['address_1'])) > 128)) {
                    $json['error']['address_1'] = $this->language->get('error_address_1');
                }

                if ((utf8_strlen(trim($this->request->post['city'])) < 2) || (utf8_strlen(trim($this->request->post['city'])) > 128)) {
                    $json['error']['city'] = $this->language->get('error_city');
                }

                // Custom field validation
                $this->load->model('account/custom_field');

//				$custom_fields = $this->model_account_custom_field->getCustomFields($this->config->get('config_customer_group_id'));
//
//				foreach ($custom_fields as $custom_field) {
//					if ($custom_field['location'] == 'address') {
//						if ($custom_field['required'] && empty($this->request->post['custom_field'][$custom_field['location']][$custom_field['custom_field_id']])) {
//							$json['error']['custom_field' . $custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field'), $custom_field['name']);
//						} elseif (($custom_field['type'] == 'text') && !empty($custom_field['validation']) && !filter_var($this->request->post['custom_field'][$custom_field['location']][$custom_field['custom_field_id']], FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => $custom_field['validation'])))) {
//							$json['error']['custom_field' . $custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field'), $custom_field['name']);
//						}
//					}
//				}

                if (!$json) {
                    $address_id = $this->model_account_address->addAddress($this->customer->getId(), $this->request->post);

                    $this->session->data['shipping_address'] = $this->model_account_address->getAddress($address_id);

                    // If no default address ID set we use the last address
                    if (!$this->customer->getAddressId()) {
                        $this->load->model('account/customer');

                        $this->model_account_customer->editAddressId($this->customer->getId(), $address_id);
                    }

                    unset($this->session->data['shipping_method']);
                    unset($this->session->data['shipping_methods']);
                }
            }
        }

        if (!$json) {
            $json["address_id"] = $this->session->data['shipping_address']['address_id'];
            $json['firstname'] = trim($this->request->post['firstname']);
            $json['lastname'] = trim($this->request->post['lastname']);
            $json['address_1'] = trim($this->request->post['address_1']);
            $json['postcode'] = trim($this->request->post['postcode']);
            $json['city'] = trim($this->request->post['city']);
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function delete()
    {
        $json = array();

        if (!$this->customer->isLogged()) {
            $json['redirect'] = $this->url->link('checkout/checkout', 'language=' . $this->config->get('config_language'));
        }

        $this->load->model('account/address');
        if (!$json) {
            $this->model_account_address->deleteAddress($this->request->post['address_id']);
            $json['success'] = true;
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function save()
    {
        $json = array();
        if (!$this->customer->isLogged()) {
            $json['redirect'] = $this->url->link('checkout/checkout', 'language=' . $this->config->get('config_language'));
        }

        if($this->request->post['address_id'] == "Add"){
            $json['not_selected'] = true;
        }

        $this->load->model('account/address');

        if(!$json) {
            $address = $this->model_account_address->getAddress($this->request->post['address_id']);
            if(!$address){
                $json['not_found'] = true;
            }
        }

        if (!$json) {
            $this->session->data['address_id'] = $this->request->post['address_id'];
            $json['success'] = true;
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}