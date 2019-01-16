<?php

class ModelCatalogColor extends Model
{
    public function addColor($data)
    {
        $this->db->query("INSERT INTO `" . DB_PREFIX . "color` SET name = '" . $this->db->escape((string)$data['name']) . "',  code = '" . $this->db->escape((string)$data['code']) . "', sort_order = '" . (int)$data['sort_order'] . "'");

        $color_id = $this->db->getLastId();

        return $color_id;
    }

    public function editColor($color_id, $data)
    {
        $this->db->query("UPDATE `" . DB_PREFIX . "color` SET name = '" . $this->db->escape((string)$data['name']) . "', code = '" . $this->db->escape((string)$data['code']) . "', sort_order = '" . (int)$data['sort_order'] . "' WHERE color_id = '" . (int)$color_id . "'");

    }

    public function deleteColor($color_id)
    {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "color` WHERE color_id = '" . (int)$color_id . "'");
    }

    public function getColor($color_id) {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "color` WHERE color_id = '" . (int)$color_id . "'");

        return $query->row;
    }

    public function getTotalColors() {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "color`");

        return $query->row['total'];
    }

    public function getColors($data = array()) {
        $sql = "SELECT * FROM `" . DB_PREFIX . "color`";

        if (!empty($data['filter_name'])) {
            $sql .= " WHERE name LIKE '" . $this->db->escape((string)$data['filter_name']) . "%'";
        }

        $sort_data = array(
            'name',
            'code',
            'sort_order'
        );

        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            $sql .= " ORDER BY " . $data['sort'];
        } else {
            $sql .= " ORDER BY name";
        }

        if (isset($data['order']) && ($data['order'] == 'DESC')) {
            $sql .= " DESC";
        } else {
            $sql .= " ASC";
        }

        if (isset($data['start']) || isset($data['limit'])) {
            if ($data['start'] < 0) {
                $data['start'] = 0;
            }

            if ($data['limit'] < 1) {
                $data['limit'] = 20;
            }

            $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
        }

        $query = $this->db->query($sql);

        return $query->rows;
    }

}