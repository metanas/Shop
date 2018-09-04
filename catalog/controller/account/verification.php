<?php
/**
 * Created by PhpStorm.
 * User: abouh
 * Date: 9/3/2018
 * Time: 3:33 PM
 */

class ControllerAccountVerification extends Controller {
    public function index() {
        if ($this->customer->isLogged()) {
            $this->response->redirect($this->url->link('account/logout', '', 'SSL'));die();
        }
        if (strlen($this->request->get['v']) != 32 ||
            intval($this->request->get['u']) <= 0) {
            header('Location: '.HTTP_SERVER);die();
        }

        $customer_id = $this->request->get['u'];
        $verification_code = $this->request->get['v'];

        $this->load->model('account/verification');

        $customer = $this->db->query("SELECT verification_code FROM " . DB_PREFIX . "customer_verification WHERE customer_id='" . $customer_id . "'");
//        $customer = $this->model_account_verification->getVerificationCodeByCustomerId($customer_id);

        if ($customer->row['verification_code'] != $verification_code) {
            header('Location: '.HTTP_SERVER);die();
        }

        $this->db->query("UPDATE " . DB_PREFIX . "customer SET status = '1'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "customer_verification WHERE customer_id='" . $customer_id . "'");

        $this->response->redirect($this->url->link('account/login', '', 'SSL'));
    }
}
