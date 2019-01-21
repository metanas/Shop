<?php

class ModelExtensionPaymentCmi extends Model
{

    public function addPayment($data)
    {
        $this->db->query("INSERT INTO " . DB_PREFIX . "cmi SET order_id='" . (int)$data['order_id'] . "', cmi_card='" . $this->db->escape((string)$data['cmi_card']) . "' , hash='" . $this->db->escape((string)$data['hash']) . "', date_added=NOW()");
    }

    public function getPayment($order_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "cmi WHERE order_id='" . (int)$order_id . "'");

        return $query->row;
    }
}
