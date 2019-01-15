<?php

class ModelCatalogProductColor extends Model
{

    public function getTotalProductsByColorId($color_id)
    {
        $query = $this->db->query("SELECT count(product_id) as total FROM " . DB_PREFIX . "product_color WHERE color_id='" . (int)$color_id . "'");

        return $query->row['total'];
    }

    public function getColorsByProduct($product_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_color pc LEFT JOIN " . DB_PREFIX . "color c on (pc.color_id = c.color_id) where pc.product_id='" . (int)$product_id . "'");

        return $query->rows;
    }

}