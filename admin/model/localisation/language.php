<?php
class ModelLocalisationLanguage extends Model {
	public function addLanguage($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "language (name, code, locale, sort_order, status) VALUES('" . $this->db->escape((string)$data['name']) . "','" . $this->db->escape((string)$data['code']) . "','" . $this->db->escape((string)$data['locale']) . "','" . (int)$data['sort_order'] . "', '" . (int)$data['status'] . "')");

		$this->cache->delete('catalog.language');
		$this->cache->delete('admin.language');

		$language_id = $this->db->getLastId();

		// Attribute
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "attribute_description WHERE language_id = '" . (int)$this->config->get('config_language_id') . "'");

		foreach ($query->rows as $attribute) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "attribute_description (attribute_id, language_id, name) VALUES('" . (int)$attribute['attribute_id'] . "','" . (int)$language_id . "','" . $this->db->escape($attribute['name']) . "')");
		}

		// Attribute Group
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "attribute_group_description WHERE language_id = '" . (int)$this->config->get('config_language_id') . "'");

		foreach ($query->rows as $attribute_group) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "attribute_group_description (attribute_group_id, language_id, name ) VALUES('" . (int)$attribute_group['attribute_group_id'] . "','" . (int)$language_id . "','" . $this->db->escape($attribute_group['name']) . "')");
		}

		$this->cache->delete('attribute');

		// Banner
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "banner_image WHERE language_id = '" . (int)$this->config->get('config_language_id') . "'");

		foreach ($query->rows as $banner_image) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "banner_image (banner_id, language_id, title,  link, image,  sort_order) VALUES('" . (int)$banner_image['banner_id'] . "','" . (int)$language_id . "','" . $this->db->escape($banner_image['title']) . "','" . $this->db->escape($banner_image['link']) . "','" . $this->db->escape($banner_image['image']) . "','" . (int)$banner_image['sort_order'] . "')");
		}

		$this->cache->delete('banner');

		// Category
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "category_description WHERE language_id = '" . (int)$this->config->get('config_language_id') . "'");

		foreach ($query->rows as $category) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "category_description (category_id, language_id, name, description , meta_title, meta_keyword) VALUES('" . (int)$category['category_id'] . "','" . (int)$language_id . "','" . $this->db->escape($category['name']) . "','" . $this->db->escape($category['description']) . "','" . $this->db->escape($category['meta_title']) . "', meta_description = '" . $this->db->escape($category['meta_description']) . "','" . $this->db->escape($category['meta_keyword']) . "')");
		}

		$this->cache->delete('category');

		// Customer Group
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer_group_description WHERE language_id = '" . (int)$this->config->get('config_language_id') . "'");

		foreach ($query->rows as $customer_group) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "customer_group_description (customer_group_id,language_id , name, description) VALUES('" . (int)$customer_group['customer_group_id'] . "', '" . (int)$language_id . "','" . $this->db->escape($customer_group['name']) . "','" . $this->db->escape($customer_group['description']) . "')");
		}

		// Custom Field
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "custom_field_description WHERE language_id = '" . (int)$this->config->get('config_language_id') . "'");

		foreach ($query->rows as $custom_field) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "custom_field_description (custom_field_id, language_id,name,) VALUES('" . (int)$custom_field['custom_field_id'] . "','" . (int)$language_id . "','" . $this->db->escape($custom_field['name']) . "')");
		}

		// Custom Field Value
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "custom_field_value_description WHERE language_id = '" . (int)$this->config->get('config_language_id') . "'");

		foreach ($query->rows as $custom_field_value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "custom_field_value_description (custom_field_value_id, language_id, custom_field_id, name) VALUES('" . (int)$custom_field_value['custom_field_value_id'] . "','" . (int)$language_id . "','" . (int)$custom_field_value['custom_field_id'] . "','" . $this->db->escape($custom_field_value['name']) . "')");
		}

		// Download
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "download_description WHERE language_id = '" . (int)$this->config->get('config_language_id') . "'");

		foreach ($query->rows as $download) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "download_description (download_id, language_id, name) VALUES('" . (int)$download['download_id'] . "','" . (int)$language_id . "','" . $this->db->escape($download['name']) . "')");
		}

		// Filter
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "filter_description WHERE language_id = '" . (int)$this->config->get('config_language_id') . "'");

		foreach ($query->rows as $filter) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "filter_description (filter_id, language_id, filter_group_id, filter_group_id) VALUES('" . (int)$filter['filter_id'] . "','" . (int)$language_id . "','" . (int)$filter['filter_group_id'] . "','" . $this->db->escape($filter['name']) . "')");
		}

		// Filter Group
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "filter_group_description WHERE language_id = '" . (int)$this->config->get('config_language_id') . "'");

		foreach ($query->rows as $filter_group) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "filter_group_description (filter_group_id, language_id, name ) VALUES('" . (int)$filter_group['filter_group_id'] . "','" . (int)$language_id . "','" . $this->db->escape($filter_group['name']) . "')");
		}

		// Information
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "information_description WHERE language_id = '" . (int)$this->config->get('config_language_id') . "'");

		foreach ($query->rows as $information) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "information_description (information_id , language_id ,title , description , meta_title , meta_description , meta_keyword ) VALUES('" . (int)$information['information_id'] . "','" . (int)$language_id . "','" . $this->db->escape($information['title']) . "','" . $this->db->escape($information['description']) . "','" . $this->db->escape($information['meta_title']) . "', '" . $this->db->escape($information['meta_description']) . "','" . $this->db->escape($information['meta_keyword']) . "')");
		}

		$this->cache->delete('information');

		// Length
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "length_class_description WHERE language_id = '" . (int)$this->config->get('config_language_id') . "'");

		foreach ($query->rows as $length) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "length_class_description (length_class_id,language_id,title,unit) VALUES('" . (int)$length['length_class_id'] . "','" . (int)$language_id . "',  '" . $this->db->escape($length['title']) . "','" . $this->db->escape($length['unit']) . "')");
		}

		$this->cache->delete('length_class');

		// Option
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "option_description WHERE language_id = '" . (int)$this->config->get('config_language_id') . "'");

		foreach ($query->rows as $option) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "option_description (option_id,language_id,name) VALUES('" . (int)$option['option_id'] . "','" . (int)$language_id . "', '" . $this->db->escape($option['name']) . "')");
		}

		// Option Value
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "option_value_description WHERE language_id = '" . (int)$this->config->get('config_language_id') . "'");

		foreach ($query->rows as $option_value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "option_value_description (option_value_id, language_id, option_id,name) VALUES( '" . (int)$option_value['option_value_id'] . "','" . (int)$language_id . "','" . (int)$option_value['option_id'] . "','" . $this->db->escape($option_value['name']) . "')");
		}

		// Order Status
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_status WHERE language_id = '" . (int)$this->config->get('config_language_id') . "'");

		foreach ($query->rows as $order_status) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "order_status (order_status_id,language_id, name) VALUES('"
                . (int)$order_status['order_status_id'] . "', '" . (int)$language_id . "','" . $this->db->escape($order_status['name']) . "')");
		}

		$this->cache->delete('order_status');

		// Product
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_description WHERE language_id = '" . (int)$this->config->get('config_language_id') . "'");

		foreach ($query->rows as $product) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "product_description (product_id, language_id, name, description, tag , meta_title, meta_description,  meta_keyword) VALUES('" . (int)$product['product_id'] . "','" . (int)$language_id . "','" . $this->db->escape($product['name']) . "','" . $this->db->escape($product['description']) . "','" . $this->db->escape($product['tag']) . "','" . $this->db->escape($product['meta_title']) . "','" . $this->db->escape($product['meta_description']) . "','" . $this->db->escape($product['meta_keyword']) . "')");
		}

		$this->cache->delete('product');

		// Product Attribute
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_attribute WHERE language_id = '" . (int)$this->config->get('config_language_id') . "'");

		foreach ($query->rows as $product_attribute) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "product_attribute (product_id,attribute_id, language_id, text) VALUES('" . (int)$product_attribute['product_id'] . "','" . (int)$product_attribute['attribute_id'] . "','" . (int)$language_id . "','" . $this->db->escape($product_attribute['text']) . "')");
		}

		// Return Action
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "return_action WHERE language_id = '" . (int)$this->config->get('config_language_id') . "'");

		foreach ($query->rows as $return_action) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "return_action (return_action_id ,language_id ,name) VALUES('" . (int)$return_action['return_action_id'] . "',  '" . (int)$language_id . "', '" . $this->db->escape($return_action['name']) . "')");
		}

		// Return Reason
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "return_reason WHERE language_id = '" . (int)$this->config->get('config_language_id') . "'");

		foreach ($query->rows as $return_reason) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "return_reason (return_reason_id, language_id, name) VALUES('" . (int)$return_reason['return_reason_id'] . "', '" . (int)$language_id . "','" . $this->db->escape($return_reason['name']) . "')");
		}

		// Return Status
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "return_status WHERE language_id = '" . (int)$this->config->get('config_language_id') . "'");

		foreach ($query->rows as $return_status) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "return_status (return_status_id, language_id, name) VALUES('" . (int)$return_status['return_status_id'] . "','" . (int)$language_id . "','" . $this->db->escape($return_status['name']) . "')");
		}

		// Stock Status
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "stock_status WHERE language_id = '" . (int)$this->config->get('config_language_id') . "'");

		foreach ($query->rows as $stock_status) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "stock_status (stock_status_id, language_id, name) VALUES('" . (int)$stock_status['stock_status_id'] . "','" . (int)$language_id . "','" . $this->db->escape($stock_status['name']) . "')");
		}

		$this->cache->delete('stock_status');

		// Voucher Theme
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "voucher_theme_description WHERE language_id = '" . (int)$this->config->get('config_language_id') . "'");

		foreach ($query->rows as $voucher_theme) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "voucher_theme_description (voucher_theme_id, language_id, name) VALUES('" . (int)$voucher_theme['voucher_theme_id'] . "', '"
                . (int)$language_id . "','" . $this->db->escape($voucher_theme['name']) . "')");
		}

		$this->cache->delete('voucher_theme');

		// Weight Class
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "weight_class_description WHERE language_id = '" . (int)$this->config->get('config_language_id') . "'");

		foreach ($query->rows as $weight_class) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "weight_class_description (weight_class_id, language_id, title, unit) VALUES('" . (int)$weight_class['weight_class_id'] . "', '" . (int)$language_id . "','" . $this->db->escape($weight_class['title']) . "','" . $this->db->escape($weight_class['unit']) . "')");
		}

		$this->cache->delete('weight_class');

		// Profiles
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "recurring_description WHERE language_id = '" . (int)$this->config->get('config_language_id') . "'");

		foreach ($query->rows as $recurring) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "recurring_description (recurring_id, language_id, name) VALUES('" . (int)$recurring['recurring_id'] . "','" . (int)$language_id . "','" . $this->db->escape($recurring['name']). "')");
		}

		return $language_id;
	}

	public function editLanguage($language_id, $data) {
		$language_query = $this->db->query("SELECT `code` FROM " . DB_PREFIX . "language WHERE language_id = '" . (int)$language_id . "'");
		
		$this->db->query("UPDATE " . DB_PREFIX . "language SET name = '" . $this->db->escape((string)$data['name']) . "', code = '" . $this->db->escape((string)$data['code']) . "', locale = '" . $this->db->escape((string)$data['locale']) . "', sort_order = '" . (int)$data['sort_order'] . "', status = '" . (int)$data['status'] . "' WHERE language_id = '" . (int)$language_id . "'");

		if ($language_query->row['code'] != $data['code']) {
			$this->db->query("UPDATE " . DB_PREFIX . "setting SET value = '" . $this->db->escape((string)$data['code']) . "' WHERE `key` = 'config_language' AND value = '" . $this->db->escape($language_query->row['code']) . "'");
			$this->db->query("UPDATE " . DB_PREFIX . "setting SET value = '" . $this->db->escape((string)$data['code']) . "' WHERE `key` = 'config_admin_language' AND value = '" . $this->db->escape($language_query->row['code']) . "'");
		}
		
		$this->cache->delete('catalog.language');
		$this->cache->delete('admin.language');
	}
	
	public function deleteLanguage($language_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "language WHERE language_id = '" . (int)$language_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "seo_url WHERE language_id = '" . (int)$language_id . "'");

		$this->cache->delete('catalog.language');
		$this->cache->delete('admin.language');

		/*
		Do not put any delete code for related tables for languages!!!!!!!!!
		
		It is not required as when ever you save to a multi language table then the entries for the deleted language will also be deleted!
		
		Wasting my time with people adding code here!
		*/
	}

	public function getLanguage($language_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "language WHERE language_id = '" . (int)$language_id . "'");

		return $query->row;
	}

	public function getLanguages($data = array()) {
		if ($data) {
			$sql = "SELECT * FROM " . DB_PREFIX . "language";

			$sort_data = array(
				'name',
				'code',
				'sort_order'
			);

			if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
				$sql .= " ORDER BY " . $data['sort'];
			} else {
				$sql .= " ORDER BY sort_order, name";
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

				$sql .= " LIMIT " . (int)$data['limit'] . " OFFSET " . (int)$data['start'];
			}

			$query = $this->db->query($sql);

			return $query->rows;
		} else {
			$language_data = $this->cache->get('admin.language');

			if (!$language_data) {
				$language_data = array();

				$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "language ORDER BY sort_order, name");

				foreach ($query->rows as $result) {
					$language_data[$result['code']] = array(
						'language_id' => $result['language_id'],
						'name'        => $result['name'],
						'code'        => $result['code'],
						'locale'      => $result['locale'],
						'image'       => $result['image'],
						'sort_order'  => $result['sort_order'],
						'status'      => $result['status']
					);
				}

				$this->cache->set('admin.language', $language_data);
			}

			return $language_data;
		}
	}

	public function getLanguageByCode($code) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "language` WHERE code = '" . $this->db->escape($code) . "'");

		return $query->row;
	}

	public function getTotalLanguages() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "language");

		return $query->row['total'];
	}
}
