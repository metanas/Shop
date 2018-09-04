<?php
/**
 * Created by PhpStorm.
 * User: abouh
 * Date: 9/4/2018
 * Time: 2:37 PM
 */

class ModelVerification extends Model {
    public function getVerificationCodeByCustomerId($customer_id) {
        $query = $this->db->query("SELECT verification_code FROM " . DB_PREFIX . "customer_verification WHERE customer_id='" . $customer_id . "'");
        return $query;
    }
}