<?php
class ModelCheckoutOrder extends Model {
	public function addOrder($data) {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "order` 
		(invoice_prefix, store_id, store_name, store_url , customer_id, customer_group_id, firstname, lastname, email, telephone, custom_field, payment_firstname,payment_lastname,payment_company,payment_address_1, payment_address_2, payment_city, payment_postcode, payment_country, payment_country_id, payment_zone,payment_zone_id,  payment_address_format, payment_custom_field, payment_method,  payment_code, shipping_firstname, shipping_lastname,  shipping_company, 
		shipping_address_1, shipping_address_2, shipping_city, shipping_postcode, shipping_country, shipping_country_id,  shipping_zone, shipping_zone_id, shipping_address_format, shipping_custom_field,  shipping_method,  shipping_code, 
		 comment, total , affiliate_id,  commission, marketing_id, tracking, language_id,  currency_id, currency_code, currency_value, ip, forwarded_ip,  user_agent,  accept_language,  date_added,  date_modified) 
		VALUES('" . $this->db->escape((string)$data['invoice_prefix']) . "','" . (int)$data['store_id'] . "','" . $this->db->escape((string)$data['store_name']) . "','" . $this->db->escape((string)$data['store_url']) . "','" . (int)$data['customer_id'] . "','" . (int)$data['customer_group_id'] . "','" . $this->db->escape((string)$data['firstname']) . "','" . $this->db->escape((string)$data['lastname']) . "','" . $this->db->escape((string)$data['email']) . "','" . $this->db->escape((string)$data['telephone']) . "','" . $this->db->escape(isset($data['custom_field']) ? json_encode($data['custom_field']) : '') . "','" . $this->db->escape((string)$data['payment_firstname']) . "','" . $this->db->escape((string)$data['payment_lastname']) . "','" . $this->db->escape((string)$data['payment_company'])
            . "','" . $this->db->escape((string)$data['payment_address_1']) . "','" . $this->db->escape((string)$data['payment_address_2']) . "','" . $this->db->escape((string)$data['payment_city']) . "','" . $this->db->escape((string)$data['payment_postcode']) . "','" . $this->db->escape((string)$data['payment_country']) . "','" . (int)$data['payment_country_id']
            . "','" . $this->db->escape((string)$data['payment_zone']) . "','" . (int)$data['payment_zone_id'] . "','" . $this->db->escape((string)$data['payment_address_format']) . "','" . $this->db->escape(isset($data['payment_custom_field']) ? json_encode($data['payment_custom_field']) : '') . "','" . $this->db->escape((string)$data['payment_method']) . "','" . $this->db->escape((string)$data['payment_code']) . "','" . $this->db->escape((string)$data['shipping_firstname']) . "','" . $this->db->escape((string)$data['shipping_lastname']) . "','" . $this->db->escape((string)$data['shipping_company']) . "','" . $this->db->escape((string)$data['shipping_address_1']) . "','" . $this->db->escape((string)$data['shipping_address_2']) . "','"
            . $this->db->escape((string)$data['shipping_city']) . "','" . $this->db->escape((string)$data['shipping_postcode']) . "','" . $this->db->escape((string)$data['shipping_country']) . "','" . (int)$data['shipping_country_id'] . "','" . $this->db->escape((string)$data['shipping_zone']) . "','" . (int)$data['shipping_zone_id'] . "','"
            . $this->db->escape((string)$data['shipping_address_format']) . "','" . $this->db->escape(isset($data['shipping_custom_field']) ? json_encode($data['shipping_custom_field']) : '') . "','" . $this->db->escape((string)$data['shipping_method']) . "','" . $this->db->escape((string)$data['shipping_code']) . "','"
            . $this->db->escape((string)$data['comment']) . "','" . (float)$data['total'] . "','" . (int)$data['affiliate_id'] . "','" . (float)$data['commission'] . "','" . (int)$data['marketing_id'] . "','" . $this->db->escape((string)$data['tracking'])
            . "','" . (int)$data['language_id'] . "','" . (int)$data['currency_id'] . "','" . $this->db->escape((string)$data['currency_code']) . "','" . (float)$data['currency_value'] . "','" . $this->db->escape((string)$data['ip']) . "','" .  $this->db->escape((string)$data['forwarded_ip']) . "','" . $this->db->escape((string)$data['user_agent']) . "','" . $this->db->escape((string)$data['accept_language']) . "',NOW(), NOW())");

		$order_id = $this->db->getLastId();

		// Products
		if (isset($data['products'])) {
			foreach ($data['products'] as $product) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "order_product (order_id, product_id, name, model, quantity, price, total, tax, reward) 
				VALUES('" . (int)$order_id . "','" . (int)$product['product_id'] . "','" . $this->db->escape($product['name'])
                    . "','" . $this->db->escape($product['model']) . "','" . (int)$product['quantity'] . "','" . (float)$product['price'] . "','" . (float)$product['total'] . "','" . (float)$product['tax'] . "','" . (int)$product['reward'] . "')");

				$order_product_id = $this->db->getLastId();

				foreach ($product['option'] as $option) {
					$this->db->query("INSERT INTO " . DB_PREFIX . "order_option (order_id, order_product_id, product_option_id, product_option_value_id, name, `value`, `type`) VALUES('" . (int)$order_id . "','"
                        . (int)$order_product_id . "','" . (int)$option['product_option_id'] . "','" . (int)$option['product_option_value_id'] . "','" . $this->db->escape($option['name'])
                        . "','" . $this->db->escape($option['value']) . "','" . $this->db->escape($option['type']) . "')");
				}
			}
		}

		// Gift Voucher
		$this->load->model('extension/total/voucher');

		// Vouchers
		if (isset($data['vouchers'])) {
			foreach ($data['vouchers'] as $voucher) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "order_voucher (order_id, description, code, from_name, from_email, to_name, to_email, voucher_theme_id, message, amount) VALUES('" . (int)$order_id
                    . "','" . $this->db->escape($voucher['description']) . "','" . $this->db->escape($voucher['code']) . "','" . $this->db->escape($voucher['from_name']) . "','" . $this->db->escape($voucher['from_email']) . "','"
                    . $this->db->escape($voucher['to_name']) . "','" . $this->db->escape($voucher['to_email']) . "','" . (int)$voucher['voucher_theme_id'] . "','" . $this->db->escape($voucher['message']) . "','" . (float)$voucher['amount'] . "')");

				$order_voucher_id = $this->db->getLastId();

				$voucher_id = $this->model_extension_total_voucher->addVoucher($order_id, $voucher);

				$this->db->query("UPDATE " . DB_PREFIX . "order_voucher SET voucher_id = '" . (int)$voucher_id . "' WHERE order_voucher_id = '" . (int)$order_voucher_id . "'");
			}
		}

		// Totals
		if (isset($data['totals'])) {
			foreach ($data['totals'] as $total) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "order_total (order_id, code, title, `value`,  sort_order) VALUES('" . (int)$order_id . "','" . $this->db->escape($total['code']) . "','" . $this->db->escape($total['title'])
                    . "','" . (float)$total['value'] . "','" . (int)$total['sort_order'] . "')");
			}
		}

		return $order_id;
	}

	public function editOrder($order_id, $data) {
		// Void the order first
		$this->addOrderHistory($order_id, 0);

		$this->db->query("UPDATE `" . DB_PREFIX . "order` SET invoice_prefix = '" . $this->db->escape((string)$data['invoice_prefix']) . "', store_id = '" . (int)$data['store_id'] . "', store_name = '" . $this->db->escape((string)$data['store_name']) . "', store_url = '" . $this->db->escape((string)$data['store_url']) . "', customer_id = '" . (int)$data['customer_id'] . "', customer_group_id = '" . (int)$data['customer_group_id'] . "', firstname = '" . $this->db->escape((string)$data['firstname']) . "', lastname = '" . $this->db->escape((string)$data['lastname']) . "', email = '" . $this->db->escape((string)$data['email']) . "', telephone = '" . $this->db->escape((string)$data['telephone']) . "', custom_field = '" . $this->db->escape(json_encode($data['custom_field'])) . "', payment_firstname = '" . $this->db->escape((string)$data['payment_firstname']) . "', payment_lastname = '" . $this->db->escape((string)$data['payment_lastname']) . "', payment_company = '" . $this->db->escape((string)$data['payment_company']) . "', payment_address_1 = '" . $this->db->escape((string)$data['payment_address_1']) . "', payment_address_2 = '" . $this->db->escape((string)$data['payment_address_2']) . "', payment_city = '" . $this->db->escape((string)$data['payment_city']) . "', payment_postcode = '" . $this->db->escape((string)$data['payment_postcode']) . "', payment_country = '" . $this->db->escape((string)$data['payment_country']) . "', payment_country_id = '" . (int)$data['payment_country_id'] . "', payment_zone = '" . $this->db->escape((string)$data['payment_zone']) . "', payment_zone_id = '" . (int)$data['payment_zone_id'] . "', payment_address_format = '" . $this->db->escape((string)$data['payment_address_format']) . "', payment_custom_field = '" . $this->db->escape(json_encode($data['payment_custom_field'])) . "', payment_method = '" . $this->db->escape((string)$data['payment_method']) . "', payment_code = '" . $this->db->escape((string)$data['payment_code']) . "', shipping_firstname = '" . $this->db->escape((string)$data['shipping_firstname']) . "', shipping_lastname = '" . $this->db->escape((string)$data['shipping_lastname']) . "', shipping_company = '" . $this->db->escape((string)$data['shipping_company']) . "', shipping_address_1 = '" . $this->db->escape((string)$data['shipping_address_1']) . "', shipping_address_2 = '" . $this->db->escape((string)$data['shipping_address_2']) . "', shipping_city = '" . $this->db->escape((string)$data['shipping_city']) . "', shipping_postcode = '" . $this->db->escape((string)$data['shipping_postcode']) . "', shipping_country = '" . $this->db->escape((string)$data['shipping_country']) . "', shipping_country_id = '" . (int)$data['shipping_country_id'] . "', shipping_zone = '" . $this->db->escape((string)$data['shipping_zone']) . "', shipping_zone_id = '" . (int)$data['shipping_zone_id'] . "', shipping_address_format = '" . $this->db->escape((string)$data['shipping_address_format']) . "', shipping_custom_field = '" . $this->db->escape(json_encode($data['shipping_custom_field'])) . "', shipping_method = '" . $this->db->escape((string)$data['shipping_method']) . "', shipping_code = '" . $this->db->escape((string)$data['shipping_code']) . "', comment = '" . $this->db->escape((string)$data['comment']) . "', total = '" . (float)$data['total'] . "', affiliate_id = '" . (int)$data['affiliate_id'] . "', commission = '" . (float)$data['commission'] . "', date_modified = NOW() WHERE order_id = '" . (int)$order_id . "'");

		$this->db->query("DELETE FROM " . DB_PREFIX . "order_product WHERE order_id = '" . (int)$order_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "order_option WHERE order_id = '" . (int)$order_id . "'");

		// Products
		if (isset($data['products'])) {
			foreach ($data['products'] as $product) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "order_product (order_id, product_id ,name, model, quantity , price, total, tax, reward) VALUES( '" . (int)$order_id . "','"
                    . (int)$product['product_id'] . "','" . $this->db->escape($product['name']) . "','" . $this->db->escape($product['model']) . "','" . (int)$product['quantity'] . "','" . (float)$product['price'] . "','" . (float)$product['total'] . "','" . (float)$product['tax'] . "','" . (int)$product['reward'] . "')");

				$order_product_id = $this->db->getLastId();

				foreach ($product['option'] as $option) {
					$this->db->query("INSERT INTO " . DB_PREFIX . "order_option (order_id,order_product_id, product_option_id, product_option_value_id, name , `value`, `type`) VALUES( '" . (int)$order_id . "','" . (int)$order_product_id . "','" . (int)$option['product_option_id']
                        . "','" . (int)$option['product_option_value_id'] . "','" . $this->db->escape($option['name']) . "','" . $this->db->escape($option['value']) . "','" . $this->db->escape($option['type']) . "')");
				}
			}
		}

		// Gift Voucher
		$this->load->model('extension/total/voucher');

		$this->model_extension_total_voucher->disableVoucher($order_id);

		// Vouchers
		$this->db->query("DELETE FROM " . DB_PREFIX . "order_voucher WHERE order_id = '" . (int)$order_id . "'");

		if (isset($data['vouchers'])) {
			foreach ($data['vouchers'] as $voucher) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "order_voucher (order_id,  description, code, from_name, from_email, to_name, to_email, voucher_theme_id, message, amount) VALUES('" . (int)$order_id
                    . "','" . $this->db->escape($voucher['description']) . "','" . $this->db->escape($voucher['code']) . "','" . $this->db->escape($voucher['from_name']) . "','" . $this->db->escape($voucher['from_email'])
                    . "','" . $this->db->escape($voucher['to_name']) . "','" . $this->db->escape($voucher['to_email']) . "','" . (int)$voucher['voucher_theme_id'] . "','" . $this->db->escape($voucher['message']) . "','" . (float)$voucher['amount'] . "')");

				$order_voucher_id = $this->db->getLastId();

				$voucher_id = $this->model_extension_total_voucher->addVoucher($order_id, $voucher);

				$this->db->query("UPDATE " . DB_PREFIX . "order_voucher SET voucher_id = '" . (int)$voucher_id . "' WHERE order_voucher_id = '" . (int)$order_voucher_id . "'");
			}
		}

		// Totals
		$this->db->query("DELETE FROM " . DB_PREFIX . "order_total WHERE order_id = '" . (int)$order_id . "'");

		if (isset($data['totals'])) {
			foreach ($data['totals'] as $total) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "order_total (order_id, code, title, `value`, sort_order) VALUES('" . (int)$order_id . "','"
                    . $this->db->escape($total['code']) . "','" . $this->db->escape($total['title']) . "','" . (float)$total['value'] . "','" . (int)$total['sort_order'] . "')");
			}
		}
	}

	public function deleteOrder($order_id) {
		// Void the order first
		$this->addOrderHistory($order_id, 0);

		$this->db->query("DELETE FROM `" . DB_PREFIX . "order` WHERE order_id = '" . (int)$order_id . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "order_product` WHERE order_id = '" . (int)$order_id . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "order_option` WHERE order_id = '" . (int)$order_id . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "order_voucher` WHERE order_id = '" . (int)$order_id . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "order_total` WHERE order_id = '" . (int)$order_id . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "order_history` WHERE order_id = '" . (int)$order_id . "'");
		$this->db->query("DELETE `or`, ort FROM `" . DB_PREFIX . "order_recurring` `or`, `" . DB_PREFIX . "order_recurring_transaction` `ort` WHERE order_id = '" . (int)$order_id . "' AND ort.order_recurring_id = `or`.order_recurring_id");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "customer_transaction` WHERE order_id = '" . (int)$order_id . "'");

		// Gift Voucher
		$this->load->model('extension/total/voucher');

		$this->model_extension_total_voucher->disableVoucher($order_id);
	}

	public function getOrder($order_id) {
		$order_query = $this->db->query("SELECT *, (SELECT os.name FROM `" . DB_PREFIX . "order_status` os WHERE os.order_status_id = o.order_status_id AND os.language_id = o.language_id) AS order_status FROM `" . DB_PREFIX . "order` o WHERE o.order_id = '" . (int)$order_id . "'");

		if ($order_query->num_rows) {
			$country_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "country` WHERE country_id = '" . (int)$order_query->row['payment_country_id'] . "'");

			if ($country_query->num_rows) {
				$payment_iso_code_2 = $country_query->row['iso_code_2'];
				$payment_iso_code_3 = $country_query->row['iso_code_3'];
			} else {
				$payment_iso_code_2 = '';
				$payment_iso_code_3 = '';
			}

			$zone_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "zone` WHERE zone_id = '" . (int)$order_query->row['payment_zone_id'] . "'");

			if ($zone_query->num_rows) {
				$payment_zone_code = $zone_query->row['code'];
			} else {
				$payment_zone_code = '';
			}

			$country_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "country` WHERE country_id = '" . (int)$order_query->row['shipping_country_id'] . "'");

			if ($country_query->num_rows) {
				$shipping_iso_code_2 = $country_query->row['iso_code_2'];
				$shipping_iso_code_3 = $country_query->row['iso_code_3'];
			} else {
				$shipping_iso_code_2 = '';
				$shipping_iso_code_3 = '';
			}

			$zone_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "zone` WHERE zone_id = '" . (int)$order_query->row['shipping_zone_id'] . "'");

			if ($zone_query->num_rows) {
				$shipping_zone_code = $zone_query->row['code'];
			} else {
				$shipping_zone_code = '';
			}

			$this->load->model('localisation/language');

			$language_info = $this->model_localisation_language->getLanguage($order_query->row['language_id']);

			if ($language_info) {
				$language_code = $language_info['code'];
			} else {
				$language_code = $this->config->get('config_language');
			}

			return array(
				'order_id'                => $order_query->row['order_id'],
				'invoice_no'              => $order_query->row['invoice_no'],
				'invoice_prefix'          => $order_query->row['invoice_prefix'],
				'store_id'                => $order_query->row['store_id'],
				'store_name'              => $order_query->row['store_name'],
				'store_url'               => $order_query->row['store_url'],
				'customer_id'             => $order_query->row['customer_id'],
				'firstname'               => $order_query->row['firstname'],
				'lastname'                => $order_query->row['lastname'],
				'email'                   => $order_query->row['email'],
				'telephone'               => $order_query->row['telephone'],
				'custom_field'            => json_decode($order_query->row['custom_field'], true),
				'payment_firstname'       => $order_query->row['payment_firstname'],
				'payment_lastname'        => $order_query->row['payment_lastname'],
				'payment_company'         => $order_query->row['payment_company'],
				'payment_address_1'       => $order_query->row['payment_address_1'],
				'payment_address_2'       => $order_query->row['payment_address_2'],
				'payment_postcode'        => $order_query->row['payment_postcode'],
				'payment_city'            => $order_query->row['payment_city'],
				'payment_zone_id'         => $order_query->row['payment_zone_id'],
				'payment_zone'            => $order_query->row['payment_zone'],
				'payment_zone_code'       => $payment_zone_code,
				'payment_country_id'      => $order_query->row['payment_country_id'],
				'payment_country'         => $order_query->row['payment_country'],
				'payment_iso_code_2'      => $payment_iso_code_2,
				'payment_iso_code_3'      => $payment_iso_code_3,
				'payment_address_format'  => $order_query->row['payment_address_format'],
				'payment_custom_field'    => json_decode($order_query->row['payment_custom_field'], true),
				'payment_method'          => $order_query->row['payment_method'],
				'payment_code'            => $order_query->row['payment_code'],
				'shipping_firstname'      => $order_query->row['shipping_firstname'],
				'shipping_lastname'       => $order_query->row['shipping_lastname'],
				'shipping_company'        => $order_query->row['shipping_company'],
				'shipping_address_1'      => $order_query->row['shipping_address_1'],
				'shipping_address_2'      => $order_query->row['shipping_address_2'],
				'shipping_postcode'       => $order_query->row['shipping_postcode'],
				'shipping_city'           => $order_query->row['shipping_city'],
				'shipping_zone_id'        => $order_query->row['shipping_zone_id'],
				'shipping_zone'           => $order_query->row['shipping_zone'],
				'shipping_zone_code'      => $shipping_zone_code,
				'shipping_country_id'     => $order_query->row['shipping_country_id'],
				'shipping_country'        => $order_query->row['shipping_country'],
				'shipping_iso_code_2'     => $shipping_iso_code_2,
				'shipping_iso_code_3'     => $shipping_iso_code_3,
				'shipping_address_format' => $order_query->row['shipping_address_format'],
				'shipping_custom_field'   => json_decode($order_query->row['shipping_custom_field'], true),
				'shipping_method'         => $order_query->row['shipping_method'],
				'shipping_code'           => $order_query->row['shipping_code'],
				'comment'                 => $order_query->row['comment'],
				'total'                   => $order_query->row['total'],
				'order_status_id'         => $order_query->row['order_status_id'],
				'order_status'            => $order_query->row['order_status'],
				'affiliate_id'            => $order_query->row['affiliate_id'],
				'commission'              => $order_query->row['commission'],
				'language_id'             => $order_query->row['language_id'],
				'language_code'           => $language_code,
				'currency_id'             => $order_query->row['currency_id'],
				'currency_code'           => $order_query->row['currency_code'],
				'currency_value'          => $order_query->row['currency_value'],
				'ip'                      => $order_query->row['ip'],
				'forwarded_ip'            => $order_query->row['forwarded_ip'],
				'user_agent'              => $order_query->row['user_agent'],
				'accept_language'         => $order_query->row['accept_language'],
				'date_added'              => $order_query->row['date_added'],
				'date_modified'           => $order_query->row['date_modified']
			);
		} else {
			return false;
		}
	}
	
	public function getOrderProducts($order_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_product WHERE order_id = '" . (int)$order_id . "'");
		
		return $query->rows;
	}
	
	public function getOrderOptions($order_id, $order_product_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_option WHERE order_id = '" . (int)$order_id . "' AND order_product_id = '" . (int)$order_product_id . "'");
		
		return $query->rows;
	}
	
	public function getOrderVouchers($order_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_voucher WHERE order_id = '" . (int)$order_id . "'");
	
		return $query->rows;
	}
	
	public function getOrderTotals($order_id) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "order_total` WHERE order_id = '" . (int)$order_id . "' ORDER BY sort_order ASC");
		
		return $query->rows;
	}	
			
	public function addOrderHistory($order_id, $order_status_id, $comment = '', $notify = false, $override = false) {
		$order_info = $this->getOrder($order_id);
		
		if ($order_info) {
			// Fraud Detection
			$this->load->model('account/customer');

			$customer_info = $this->model_account_customer->getCustomer($order_info['customer_id']);

			if ($customer_info && $customer_info['safe']) {
				$safe = true;
			} else {
				$safe = false;
			}

			// Only do the fraud check if the customer is not on the safe list and the order status is changing into the complete or process order status
			if (!$safe && !$override && in_array($order_status_id, array_merge($this->config->get('config_processing_status'), $this->config->get('config_complete_status')))) {
				// Anti-Fraud
				$this->load->model('setting/extension');

				$extensions = $this->model_setting_extension->getExtensions('fraud');

				foreach ($extensions as $extension) {
					if ($this->config->get('fraud_' . $extension['code'] . '_status')) {
						$this->load->model('extension/fraud/' . $extension['code']);

						if (property_exists($this->{'model_extension_fraud_' . $extension['code']}, 'check')) {
							$fraud_status_id = $this->{'model_extension_fraud_' . $extension['code']}->check($order_info);
	
							if ($fraud_status_id) {
								$order_status_id = $fraud_status_id;
							}
						}
					}
				}
			}

			// If current order status is not processing or complete but new status is processing or complete then commence completing the order
			if (!in_array($order_info['order_status_id'], array_merge($this->config->get('config_processing_status'), $this->config->get('config_complete_status'))) && in_array($order_status_id, array_merge($this->config->get('config_processing_status'), $this->config->get('config_complete_status')))) {
				// Redeem coupon, vouchers and reward points
				$order_totals = $this->getOrderTotals($order_id);

				foreach ($order_totals as $order_total) {
					$this->load->model('extension/total/' . $order_total['code']);

					if (property_exists($this->{'model_extension_total_' . $order_total['code']}, 'confirm')) {
						// Confirm coupon, vouchers and reward points
						$fraud_status_id = $this->{'model_extension_total_' . $order_total['code']}->confirm($order_info, $order_total);
						
						// If the balance on the coupon, vouchers and reward points is not enough to cover the transaction or has already been used then the fraud order status is returned.
						if ($fraud_status_id) {
							$order_status_id = $fraud_status_id;
						}
					}
				}

				// Stock subtraction
				$order_products = $this->getOrderProducts($order_id);

				foreach ($order_products as $order_product) {
					$this->db->query("UPDATE " . DB_PREFIX . "product SET quantity = (quantity - " . (int)$order_product['quantity'] . ") WHERE product_id = '" . (int)$order_product['product_id'] . "' AND subtract = '1'");

					$order_options = $this->getOrderOptions($order_id, $order_product['order_product_id']);

					foreach ($order_options as $order_option) {
						$this->db->query("UPDATE " . DB_PREFIX . "product_option_value SET quantity = (quantity - " . (int)$order_product['quantity'] . ") WHERE product_option_value_id = '" . (int)$order_option['product_option_value_id'] . "' AND subtract = '1'");
					}
				}
				
				// Add commission if sale is linked to affiliate referral.
				if ($order_info['affiliate_id'] && $this->config->get('config_affiliate_auto')) {
					$this->load->model('account/customer');

					if (!$this->model_account_customer->getTotalTransactionsByOrderId($order_id)) {
						$this->model_account_customer->addTransaction($order_info['affiliate_id'], $this->language->get('text_order_id') . ' #' . $order_id, $order_info['commission'], $order_id);
					}
				}
			}

			// Update the DB with the new statuses
			$this->db->query("UPDATE `" . DB_PREFIX . "order` SET order_status_id = '" . (int)$order_status_id . "', date_modified = NOW() WHERE order_id = '" . (int)$order_id . "'");

			$this->db->query("INSERT INTO " . DB_PREFIX . "order_history (order_id,order_status_id, notify, comment, date_added) VALUES('" . (int)$order_id . "','" . (int)$order_status_id . "','" . (int)$notify
                . "','" . $this->db->escape($comment) . "',NOW())");

			$order_history_id = $this->db->getLastId();
			
			// If old order status is the processing or complete status but new status is not then commence restock, and remove coupon, voucher and reward history
			if (in_array($order_info['order_status_id'], array_merge($this->config->get('config_processing_status'), $this->config->get('config_complete_status'))) && !in_array($order_status_id, array_merge($this->config->get('config_processing_status'), $this->config->get('config_complete_status')))) {
				// Restock
				$order_products = $this->getOrderProducts($order_id);

				foreach($order_products as $order_product) {
					$this->db->query("UPDATE `" . DB_PREFIX . "product` SET quantity = (quantity + " . (int)$order_product['quantity'] . ") WHERE product_id = '" . (int)$order_product['product_id'] . "' AND subtract = '1'");

					$order_options = $this->getOrderOptions($order_id, $order_product['order_product_id']);

					foreach ($order_options as $order_option) {
						$this->db->query("UPDATE " . DB_PREFIX . "product_option_value SET quantity = (quantity + " . (int)$order_product['quantity'] . ") WHERE product_option_value_id = '" . (int)$order_option['product_option_value_id'] . "' AND subtract = '1'");
					}
				}

				// Remove coupon, vouchers and reward points history
				$order_totals = $this->getOrderTotals($order_id);
				
				foreach ($order_totals as $order_total) {
					$this->load->model('extension/total/' . $order_total['code']);

					if (property_exists($this->{'model_extension_total_' . $order_total['code']}, 'unconfirm')) {
						$this->{'model_extension_total_' . $order_total['code']}->unconfirm($order_id);
					}
				}

				// Remove commission if sale is linked to affiliate referral.
				if ($order_info['affiliate_id']) {
					$this->load->model('account/customer');
					
					$this->model_account_customer->deleteTransactionByOrderId($order_id);
				}
			}

			$this->cache->delete('product');
			
			return $order_history_id;
		}
	}
}