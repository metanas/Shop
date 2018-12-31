<?php
class ModelMarketingMessage extends Model
{
    public function getMessages($data = array()) {
        $sql = "SELECT * FROM " . DB_PREFIX . "message ";

        $implode = array();

        if (!empty($data['filter_customer'])) {
            $implode[] = "name LIKE '" . $this->db->escape((string)$data['filter_name']) . "%'";
        }

        if (!empty($data['filter_email'])) {
            $implode[] = "email = '" . $this->db->escape((string)$data['filter_email']) . "'";
        }

        if (!empty($data['filter_telephone'])) {
            $implode[] = "telephone = '" . (float)$data['filter_telephone'] . "'";
        }

        if (!empty($data['filter_date_added'])) {
            $implode[] = " AND DATE(ca.date_added) = DATE('" . $this->db->escape((string)$data['filter_date_added']) . "')";
        }

        if ($implode) {
            $sql .= " WHERE " . implode(" AND ", $implode);
        }

        $sort_data = array(
            'name',
            'telephone',
            'email',
            'ca.date_added'
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

    public function getTotalMessages($data = array()) {
        $sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "message";

        $implode = array();

        if (!empty($data['filter_name'])) {
            $implode[] = "name LIKE '" . $this->db->escape((string)$data['filter_name']) . "%'";
        }

        if (!empty($data['filter_email'])) {
            $implode[] = "email = '" . $this->db->escape((string)$data['filter_email']) . "'";
        }

        if (!empty($data['filter_telephone'])) {
            $implode[] = "telephone = '" . (float)$data['filter_telephone'] . "'";
        }

        if (!empty($data['filter_date_added'])) {
            $implode[] = "DATE(ca.date_added) = DATE('" . $this->db->escape((string)$data['filter_date_added']) . "')";
        }

        if ($implode) {
            $sql .= " WHERE " . implode(" AND ", $implode);
        }

        $query = $this->db->query($sql);

        return $query->row['total'];
    }
}