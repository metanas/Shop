<?php

class ControllerCheckoutConfirm extends Controller
{
    public function index()
    {
        $redirect = '';

        $format = '<b>{firstname} {lastname}</b>' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . "Tel: {telephone}" . "\n" . '{country}';

        $find = array(
            '{firstname}',
            '{lastname}',
            '{address_1}',
            '{address_2}',
            '{city}',
            '{postcode}',
            '{telephone}',
            '{country}'
        );

        $this->load->model('account/address');

        // Validate if shipping address has been set.
        if (isset($this->session->data['shipping_address'])) {
            $result = $this->model_account_address->getAddress($this->session->data['shipping_address']);

            $replace = array(
                'firstname' => $result['firstname'],
                'lastname' => $result['lastname'],
                'address_1' => $result['address_1'],
                'address_2' => $result['address_2'],
                'city' => $result['city'],
                'postcode' => $result['postcode'],
                'telephone' => $result['telephone'],
                'country' => $result['country'],
            );

            $data['shipping_address'] = array(
                'address_id' => $result['address_id'],
                'address' => str_replace(array("\r\n", "\r", "\n"), '<br/>', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br/>', trim(str_replace($find, $replace, $format))))
            );

        } else {
            $this->response->redirect($this->url->link("checkout/checkout", 'language=' . $this->config->get('config_language')));
        }

        if (isset($this->session->data['billing_address'])) {
            $result = $this->session->data['billing_address'];

            $replace = array(
                'firstname' => $result['firstname'],
                'lastname' => $result['lastname'],
                'address_1' => $result['address_1'],
                'address_2' => $result['address_2'],
                'city' => $result['city'],
                'postcode' => $result['postcode'],
                'telephone' => $result['telephone'],
                'country' => $result['country'],
            );

            $data['billing_address'] = array(
                'address' => str_replace(array("\r\n", "\r", "\n"), '<br/>', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br/>', trim(str_replace($find, $replace, $format))))
            );
        }

        // Validate if payment method has been set.
        if (isset($this->session->data['payment_method'])) {
            $data['payment_method'] = $this->session->data['payment_method'];
        } else {
            $this->response->redirect($this->url->link("checkout/checkout", 'language=' . $this->config->get('config_language')));
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
                $this->response->redirect($this->url->link('checkout/cart', 'language=' . $this->config->get('config_language')));
                break;
            }
        }
//
//		if (!$redirect) {
//			$order_data = array();
//
//			$totals = array();
//			$taxes = $this->cart->getTaxes();
//			$total = 0;
//
//			// Because __call can not keep var references so we put them into an array.
//			$total_data = array(
//				'totals' => &$totals,
//				'taxes'  => &$taxes,
//				'total'  => &$total
//			);
//
//			$this->load->model('setting/extension');
//
//			$sort_order = array();
//
//			$results = $this->model_setting_extension->getExtensions('total');
//
//			foreach ($results as $key => $value) {
//				$sort_order[$key] = $this->config->get('total_' . $value['code'] . '_sort_order');
//			}
//
//			array_multisort($sort_order, SORT_ASC, $results);
//
//			foreach ($results as $result) {
//				if ($this->config->get('total_' . $result['code'] . '_status')) {
//					$this->load->model('extension/total/' . $result['code']);
//
//					// We have to put the totals in an array so that they pass by reference.
//					$this->{'model_extension_total_' . $result['code']}->getTotal($total_data);
//				}
//			}
//
//			$sort_order = array();
//
//			foreach ($totals as $key => $value) {
//				$sort_order[$key] = $value['sort_order'];
//			}
//
//			array_multisort($sort_order, SORT_ASC, $totals);
//
//			$order_data['totals'] = $totals;
//
//			$this->load->language('checkout/checkout');
//
//			$order_data['invoice_prefix'] = $this->config->get('config_invoice_prefix');
//			$order_data['store_id'] = $this->config->get('config_store_id');
//			$order_data['store_name'] = $this->config->get('config_name');
//
//			if ($order_data['store_id']) {
//				$order_data['store_url'] = $this->config->get('config_url');
//			} else {
//				$order_data['store_url'] = HTTP_SERVER;
//			}
//
//			$this->load->model('account/customer');
//
//			if ($this->customer->isLogged()) {
//				$customer_info = $this->model_account_customer->getCustomer($this->customer->getId());
//
//				$order_data['customer_id'] = $this->customer->getId();
//				$order_data['customer_group_id'] = $customer_info['customer_group_id'];
//				$order_data['firstname'] = $customer_info['firstname'];
//				$order_data['lastname'] = $customer_info['lastname'];
//				$order_data['email'] = $customer_info['email'];
//				$order_data['telephone'] = $customer_info['telephone'];
//				$order_data['custom_field'] = json_decode($customer_info['custom_field'], true);
//			} elseif (isset($this->session->data['guest'])) {
//				$order_data['customer_id'] = 0;
//				$order_data['customer_group_id'] = $this->session->data['guest']['customer_group_id'];
//				$order_data['firstname'] = $this->session->data['guest']['firstname'];
//				$order_data['lastname'] = $this->session->data['guest']['lastname'];
//				$order_data['email'] = $this->session->data['guest']['email'];
//				$order_data['telephone'] = $this->session->data['guest']['telephone'];
//				$order_data['custom_field'] = $this->session->data['guest']['custom_field'];
//			}

//			$order_data['payment_firstname'] = $this->session->data['payment_address']['firstname'];
//			$order_data['payment_lastname'] = $this->session->data['payment_address']['lastname'];
//			$order_data['payment_company'] = $this->session->data['payment_address']['company'];
//			$order_data['payment_address_1'] = $this->session->data['payment_address']['address_1'];
//			$order_data['payment_address_2'] = $this->session->data['payment_address']['address_2'];
//			$order_data['payment_city'] = $this->session->data['payment_address']['city'];
//			$order_data['payment_postcode'] = $this->session->data['payment_address']['postcode'];
//			$order_data['payment_zone'] = $this->session->data['payment_address']['zone'];
//			$order_data['payment_zone_id'] = $this->session->data['payment_address']['zone_id'];
//			$order_data['payment_country'] = $this->session->data['payment_address']['country'];
//			$order_data['payment_country_id'] = $this->session->data['payment_address']['country_id'];
//			$order_data['payment_address_format'] = $this->session->data['payment_address']['address_format'];
//			$order_data['payment_custom_field'] = (isset($this->session->data['payment_address']['custom_field']) ? $this->session->data['payment_address']['custom_field'] : array());

//			if (isset($this->session->data['payment_method']['title'])) {
//				$order_data['payment_method'] = $this->session->data['payment_method']['title'];
//			} else {
//				$order_data['payment_method'] = '';
//			}
//
//			if (isset($this->session->data['payment_method']['code'])) {
//				$order_data['payment_code'] = $this->session->data['payment_method']['code'];
//			} else {
//				$order_data['payment_code'] = '';
//			}

//			if ($this->cart->hasShipping()) {
//				$order_data['shipping_firstname'] = $this->session->data['shipping_address']['firstname'];
//				$order_data['shipping_lastname'] = $this->session->data['shipping_address']['lastname'];
//				$order_data['shipping_company'] = $this->session->data['shipping_address']['company'];
//				$order_data['shipping_address_1'] = $this->session->data['shipping_address']['address_1'];
//				$order_data['shipping_address_2'] = $this->session->data['shipping_address']['address_2'];
//				$order_data['shipping_city'] = $this->session->data['shipping_address']['city'];
//				$order_data['shipping_postcode'] = $this->session->data['shipping_address']['postcode'];
//				$order_data['shipping_zone'] = $this->session->data['shipping_address']['zone'];
//				$order_data['shipping_zone_id'] = $this->session->data['shipping_address']['zone_id'];
//				$order_data['shipping_country'] = $this->session->data['shipping_address']['country'];
//				$order_data['shipping_country_id'] = $this->session->data['shipping_address']['country_id'];
//				$order_data['shipping_address_format'] = $this->session->data['shipping_address']['address_format'];
//				$order_data['shipping_custom_field'] = (isset($this->session->data['shipping_address']['custom_field']) ? $this->session->data['shipping_address']['custom_field'] : array());
//
//				if (isset($this->session->data['shipping_method']['title'])) {
//					$order_data['shipping_method'] = $this->session->data['shipping_method']['title'];
//				} else {
//					$order_data['shipping_method'] = '';
//				}
//
//				if (isset($this->session->data['shipping_method']['code'])) {
//					$order_data['shipping_price'] = $this->session->data['shipping_method']['code'];
//				} else {
//					$order_data['shipping_price'] = '';
//				}
//			} else {
//				$order_data['shipping_firstname'] = '';
//				$order_data['shipping_lastname'] = '';
//				$order_data['shipping_company'] = '';
//				$order_data['shipping_address_1'] = '';
//				$order_data['shipping_address_2'] = '';
//				$order_data['shipping_city'] = '';
//				$order_data['shipping_postcode'] = '';
//				$order_data['shipping_zone'] = '';
//				$order_data['shipping_zone_id'] = '';
//				$order_data['shipping_country'] = '';
//				$order_data['shipping_country_id'] = '';
//				$order_data['shipping_address_format'] = '';
//				$order_data['shipping_custom_field'] = array();
//				$order_data['shipping_method'] = '';
//				$order_data['shipping_price'] = '';
//			}
//
//			$order_data['products'] = array();
//
//			foreach ($this->cart->getProducts() as $product) {
//				$option_data = array();
//
//				foreach ($product['option'] as $option) {
//					$option_data[] = array(
//						'product_option_id'       => $option['product_option_id'],
//						'product_option_value_id' => $option['product_option_value_id'],
//						'option_id'               => $option['option_id'],
//						'option_value_id'         => $option['option_value_id'],
//						'name'                    => $option['name'],
//						'value'                   => $option['value'],
//						'type'                    => $option['type']
//					);
//				}
//
//				$order_data['products'][] = array(
//					'product_id' => $product['product_id'],
//					'name'       => $product['name'],
//					'model'      => $product['model'],
//					'option'     => $option_data,
//					'download'   => $product['download'],
//					'quantity'   => $product['quantity'],
//					'subtract'   => $product['subtract'],
//					'price'      => $product['price'],
//					'total'      => $product['total'],
//					'tax'        => $this->tax->getTax($product['price'], $product['tax_class_id']),
//					'reward'     => $product['reward']
//				);
//			}
//
//			// Gift Voucher
//			$order_data['vouchers'] = array();
//
//			if (!empty($this->session->data['vouchers'])) {
//				foreach ($this->session->data['vouchers'] as $voucher) {
//					$order_data['vouchers'][] = array(
//						'description'      => $voucher['description'],
//						'code'             => token(10),
//						'to_name'          => $voucher['to_name'],
//						'to_email'         => $voucher['to_email'],
//						'from_name'        => $voucher['from_name'],
//						'from_email'       => $voucher['from_email'],
//						'voucher_theme_id' => $voucher['voucher_theme_id'],
//						'message'          => $voucher['message'],
//						'amount'           => $voucher['amount']
//					);
//				}
//			}

//			$order_data['comment'] = $this->session->data['comment'];
//			$order_data['total'] = $total_data['total'];

//			if (isset($this->request->cookie['tracking'])) {
//				$order_data['tracking'] = $this->request->cookie['tracking'];
//
//				$subtotal = $this->cart->getSubTotal();
//
//				// Affiliate
//				$this->load->model('account/affiliate');
//
//				$affiliate_info = $this->model_account_affiliate->getAffiliateByTracking($this->request->cookie['tracking']);
//
//				if ($affiliate_info) {
//					$order_data['affiliate_id'] = $affiliate_info['customer_id'];
//					$order_data['commission'] = ($subtotal / 100) * $affiliate_info['commission'];
//				} else {
//					$order_data['affiliate_id'] = 0;
//					$order_data['commission'] = 0;
//				}
//
//				// Marketing
//				$this->load->model('marketing/marketing');
//
//				$marketing_info = $this->model_marketing_marketing->getMarketingByCode($this->request->cookie['tracking']);
//
//				if ($marketing_info) {
//					$order_data['marketing_id'] = $marketing_info['marketing_id'];
//				} else {
//					$order_data['marketing_id'] = 0;
//				}
//			} else {
//				$order_data['affiliate_id'] = 0;
//				$order_data['commission'] = 0;
//				$order_data['marketing_id'] = 0;
//				$order_data['tracking'] = '';
//			}
//
//			$order_data['language_id'] = $this->config->get('config_language_id');
//			$order_data['currency_id'] = $this->currency->getId($this->session->data['currency']);
//			$order_data['currency_code'] = $this->session->data['currency'];
//			$order_data['currency_value'] = $this->currency->getValue($this->session->data['currency']);
//			$order_data['ip'] = $this->request->server['REMOTE_ADDR'];
//
//			if (!empty($this->request->server['HTTP_X_FORWARDED_FOR'])) {
//				$order_data['forwarded_ip'] = $this->request->server['HTTP_X_FORWARDED_FOR'];
//			} elseif (!empty($this->request->server['HTTP_CLIENT_IP'])) {
//				$order_data['forwarded_ip'] = $this->request->server['HTTP_CLIENT_IP'];
//			} else {
//				$order_data['forwarded_ip'] = '';
//			}
//
//			if (isset($this->request->server['HTTP_USER_AGENT'])) {
//				$order_data['user_agent'] = $this->request->server['HTTP_USER_AGENT'];
//			} else {
//				$order_data['user_agent'] = '';
//			}
//
//			if (isset($this->request->server['HTTP_ACCEPT_LANGUAGE'])) {
//				$order_data['accept_language'] = $this->request->server['HTTP_ACCEPT_LANGUAGE'];
//			} else {
//				$order_data['accept_language'] = '';
//			}
//
//			$this->load->model('checkout/order');
//
//			$this->session->data['order_id'] = $this->model_checkout_order->addOrder($order_data);
//
//			$this->load->model('tool/upload');
//
//			$frequencies = array(
//				'day'        => $this->language->get('text_day'),
//				'week'       => $this->language->get('text_week'),
//				'semi_month' => $this->language->get('text_semi_month'),
//				'month'      => $this->language->get('text_month'),
//				'year'       => $this->language->get('text_year'),
//			);
//
//			$data['products'] = array();
//
//			foreach ($this->cart->getProducts() as $product) {
//				$option_data = array();
//
//				foreach ($product['option'] as $option) {
//					if ($option['type'] != 'file') {
//						$value = $option['value'];
//					} else {
//						$upload_info = $this->model_tool_upload->getUploadByCode($option['value']);
//
//						if ($upload_info) {
//							$value = $upload_info['name'];
//						} else {
//							$value = '';
//						}
//					}
//
//					$option_data[] = array(
//						'name'  => $option['name'],
//						'value' => (utf8_strlen($value) > 20 ? utf8_substr($value, 0, 20) . '..' : $value)
//					);
//				}
//
//				$recurring = '';
//
//				if ($product['recurring']) {
//					if ($product['recurring']['trial']) {
//						$recurring = sprintf($this->language->get('text_trial_description'), $this->currency->format($this->tax->calculate($product['recurring']['trial_price'] * $product['quantity'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']), $product['recurring']['trial_cycle'], $frequencies[$product['recurring']['trial_frequency']], $product['recurring']['trial_duration']) . ' ';
//					}
//
//					if ($product['recurring']['duration']) {
//						$recurring .= sprintf($this->language->get('text_payment_description'), $this->currency->format($this->tax->calculate($product['recurring']['price'] * $product['quantity'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']), $product['recurring']['cycle'], $frequencies[$product['recurring']['frequency']], $product['recurring']['duration']);
//					} else {
//						$recurring .= sprintf($this->language->get('text_payment_cancel'), $this->currency->format($this->tax->calculate($product['recurring']['price'] * $product['quantity'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']), $product['recurring']['cycle'], $frequencies[$product['recurring']['frequency']], $product['recurring']['duration']);
//					}
//				}
//
//				$data['products'][] = array(
//					'cart_id'    => $product['cart_id'],
//					'product_id' => $product['product_id'],
//					'name'       => $product['name'],
//					'model'      => $product['model'],
//					'option'     => $option_data,
//					'recurring'  => $recurring,
//					'quantity'   => $product['quantity'],
//					'subtract'   => $product['subtract'],
//					'price'      => $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']),
//					'total'      => $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')) * $product['quantity'], $this->session->data['currency']),
//					'href'       => $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&product_id=' . $product['product_id'])
//				);
//			}
//
//			// Gift Voucher
//			$data['vouchers'] = array();
//
//			if (!empty($this->session->data['vouchers'])) {
//				foreach ($this->session->data['vouchers'] as $voucher) {
//					$data['vouchers'][] = array(
//						'description' => $voucher['description'],
//						'amount'      => $this->currency->format($voucher['amount'], $this->session->data['currency'])
//					);
//				}
//			}
//
//			$data['totals'] = array();
//
//			foreach ($order_data['totals'] as $total) {
//				$data['totals'][] = array(
//					'title' => $total['title'],
//					'text'  => $this->currency->format($total['value'], $this->session->data['currency'])
//				);
//			}
//
//			$data['payment'] = $this->load->controller('extension/payment/' . $this->session->data['payment_method']['code']);
//		} else {
//			$data['redirect'] = $redirect;
//		}

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

        $order_data['totals'] = $totals;

        $this->load->model("tool/image");

        $data['total'] = $this->currency->format($this->cart->getTotal(), $this->session->data['currency']);

        $data['action'] = $this->url->link("checkout/confirm/order", 'language=' . $this->config->get('config_language'));


        if (isset($this->session->data['coupon'])) {

            $this->load->model('extension/total/coupon');

            $coupon_info = $this->model_extension_total_coupon->getCoupon($this->session->data['coupon']);

            $data['coupon'] = $this->session->data['coupon'];
            $data['discount'] = (int)$coupon_info['discount'] . "%";
            $data['total_discounted'] = $this->currency->format($total, $this->session->data['currency']);
        }
        $this->load->model('extension/shipping/free');

        $delivery_standard = $this->model_extension_shipping_free->getQuote();

        $data['standard_price'] = $delivery_standard['quote']['free']['text'];

        $this->load->model('extension/shipping/item');

        $delivery_express = $this->model_extension_shipping_item->getQuote();

        $this->session->data['delivery'] = $delivery_standard['quote']['free']['cost'];
        $this->session->data['delivery_method'] = 'Standard';

        $data['express_price'] = $delivery_express['quote']['item']['text'];

        $data['total'] = $this->currency->format($this->cart->getTotal() + $delivery_standard['quote']['free']['cost'], $this->session->data['currency']);

        $data['products'] = array();

        foreach ($products as $product) {
            $option_data = array();

            foreach ($product['option'] as $option) {
                if ($option['type'] != 'file') {
                    $value = $option['value'];
                } else {
                    $upload_info = $this->model_tool_upload->getUploadByCode($option['value']);

                    if ($upload_info) {
                        $value = $upload_info['name'];
                    } else {
                        $value = '';
                    }
                }

                $option_data[] = array(
                    'name' => $option['name'],
                    'value' => (utf8_strlen($value) > 20 ? utf8_substr($value, 0, 20) . '..' : $value)
                );
            }

            $data['products'][] = array(
                'cart_id' => $product['cart_id'],
                'name' => $product['name'],
                'manufacturer' => $product['manufacturer'],
                'image' => $this->model_tool_image->resize($product['image'], 100, 200),
                'quantity' => $product['quantity'],
                'option' => $option_data,
                'color' => $product['color'],
                'price' => $this->currency->format($product['price'] * $product['quantity'], $this->session->data['currency'])
            );
        }

        return $this->load->view('checkout/confirm', $data);
    }

    public function order()
    {
        $order_data = array();

        if (!$this->customer->isLogged()) {
            $this->response->redirect($this->url->link('account/login', "language=" . $this->config->get('config_language')));
        }

        if ((!$this->cart->hasProducts() && empty($this->session->data['vouchers']))) {
            $this->response->redirect($this->url->link('checkout/cart', 'language=' . $this->config->get('config_language')));
        }

        $order_data['invoice_prefix'] = $this->config->get('config_invoice_prefix');
        $order_data['store_id'] = $this->config->get('config_store_id');
        $order_data['store_name'] = $this->config->get('config_name');

        if ($order_data['store_id']) {
            $order_data['store_url'] = $this->config->get('config_url');
        } else {
            $order_data['store_url'] = HTTP_SERVER;
        }

        $this->load->model('account/customer');

        if ($this->customer->isLogged()) {
            $customer_info = $this->model_account_customer->getCustomer($this->customer->getId());

            $order_data['customer_id'] = $this->customer->getId();
            $order_data['customer_group_id'] = $customer_info['customer_group_id'];
            $order_data['firstname'] = $customer_info['firstname'];
            $order_data['lastname'] = $customer_info['lastname'];
            $order_data['email'] = $customer_info['email'];
            $order_data['telephone'] = $customer_info['telephone'];
            $order_data['custom_field'] = json_decode($customer_info['custom_field'], true);
        }

        $this->load->model('account/address');

        if (isset($this->session->data['shipping_address'])) {
            $address_info = $this->model_account_address->getAddress($this->session->data['shipping_address']);

            $order_data['shipping_firstname'] = $address_info['firstname'];
            $order_data['shipping_lastname'] = $address_info['lastname'];
            $order_data['shipping_address_1'] = $address_info['address_1'];
            $order_data['shipping_address_2'] = $address_info['address_2'];
            $order_data['shipping_city'] = $address_info['city'];
            $order_data['shipping_postcode'] = $address_info['postcode'];
            $order_data['shipping_telephone'] = $address_info['telephone'];
            $order_data['shipping_country'] = $address_info['country'];
        }

        if (isset($this->session->data['billing_address'])) {
            $result = $this->session->data['billing_address'];

            $order_data['billing_firstname'] = $result['firstname'];
            $order_data['billing_lastname'] = $result['lastname'];
            $order_data['billing_address_1'] = $result['address_1'];
            $order_data['billing_address_2'] = $result['address_2'];
            $order_data['billing_city'] = $result['city'];
            $order_data['billing_postcode'] = $result['postcode'];
            $order_data['billing_telephone'] = $result['telephone'];
            $order_data['billing_country'] = $result['country'];
        } else {
            $result = $this->model_account_address->getAddress($this->session->data['shipping_address']);

            $order_data['billing_firstname'] = $result['firstname'];
            $order_data['billing_lastname'] = $result['lastname'];
            $order_data['billing_address_1'] = $result['address_1'];
            $order_data['billing_address_2'] = $result['address_2'];
            $order_data['billing_city'] = $result['city'];
            $order_data['billing_postcode'] = $result['postcode'];
            $order_data['billing_telephone'] = $result['telephone'];
            $order_data['billing_country'] = $result['country'];
        }

        if (isset($this->session->data['payment_method'])) {
            $order_data['payment_code'] = $this->session->data['payment_method'];
            if ($this->session->data['payment_method'] == '20') {
                $order_data['payment_method'] = "CARTE BANCAIRE";
            } elseif ($this->session->data['payment_method'] == '17') {
                $order_data['payment_method'] = "À LA LIVRAISON";
            } elseif ($this->session->data['payment_method'] == '01') {
                $order_data['payment_method'] = "PAYPAL";
            }
        }

        if (isset($this->session->data['delivery_method']) && $this->session->data['delivery_method'] != "Standard") {
            $this->load->model('extension/shipping/item');

            $order_data['shipping_method'] = "Express";
            $order_data['shipping_price'] = $this->model_extension_shipping_item->getQuote()['quote']['item']['cost'];
        } else {
            $this->load->model('extension/shipping/free');

            $order_data['shipping_method'] = 'Standard';
            $order_data['shipping_price'] = $this->model_extension_shipping_free->getQuote()['quote']['free']['cost'];
        }

        $this->load->language('checkout/checkout');

        $products = $this->cart->getProducts();

        $this->load->model('catalog/product');

        foreach ($products as $product) {
            foreach ($product['option'] as $option) {
                if ($option['type'] == "size") {
                    $max_quantity = $this->model_catalog_product->getProductOptionByName($product['product_id'], $option['type'], $option['value']);
                    if ($product['quantity'] > (int)$max_quantity['quantity']) {
                        $this->session->data['warning'] = $this->language->get('');
                        $this->response->redirect($this->url->link('checkout/cart', 'language=' . $this->config->get('config_language')));
                    }
                    break;
                }
            }
        }

        $order_data['language_id'] = $this->config->get('config_language_id');
        $order_data['currency_id'] = $this->currency->getId($this->session->data['currency']);
        $order_data['currency_code'] = $this->session->data['currency'];
        $order_data['currency_value'] = $this->currency->getValue($this->session->data['currency']);
        $order_data['ip'] = $this->request->server['REMOTE_ADDR'];

        if (!empty($this->request->server['HTTP_X_FORWARDED_FOR'])) {
            $order_data['forwarded_ip'] = $this->request->server['HTTP_X_FORWARDED_FOR'];
        } elseif (!empty($this->request->server['HTTP_CLIENT_IP'])) {
            $order_data['forwarded_ip'] = $this->request->server['HTTP_CLIENT_IP'];
        } else {
            $order_data['forwarded_ip'] = '';
        }

        if (isset($this->request->server['HTTP_USER_AGENT'])) {
            $order_data['user_agent'] = $this->request->server['HTTP_USER_AGENT'];
        } else {
            $order_data['user_agent'] = '';
        }

        if (isset($this->request->server['HTTP_ACCEPT_LANGUAGE'])) {
            $order_data['accept_language'] = $this->request->server['HTTP_ACCEPT_LANGUAGE'];
        } else {
            $order_data['accept_language'] = '';
        }

        $order_data['products'] = array();

        foreach ($products as $product) {
            $option_data = array();

            foreach ($product['option'] as $option) {
                $option_data[] = array(
                    'product_option_id' => $option['product_option_id'],
                    'product_option_value_id' => $option['product_option_value_id'],
                    'option_id' => $option['option_id'],
                    'option_value_id' => $option['option_value_id'],
                    'name' => $option['name'],
                    'value' => $option['value'],
                    'type' => $option['type']
                );
            }

            $order_data['products'][] = array(
                'product_id' => $product['product_id'],
                'name' => $product['name'],
                'manufacturer' => $product['manufacturer'],
                'ref' => $product['ref'],
                'option' => $option_data,
                'quantity' => $product['quantity'],
                'price' => $product['price'],
                'total' => $product['total'],
                'tax' => $this->tax->getTax($product['price'], $product['tax_class_id']),
            );
        }

        // Gift Voucher
        $order_data['vouchers'] = array();

        if (!empty($this->session->data['vouchers'])) {
            foreach ($this->session->data['vouchers'] as $voucher) {
                $order_data['vouchers'][] = array(
                    'description' => $voucher['description'],
                    'code' => token(10),
                    'to_name' => $voucher['to_name'],
                    'to_email' => $voucher['to_email'],
                    'from_name' => $voucher['from_name'],
                    'from_email' => $voucher['from_email'],
                    'voucher_theme_id' => $voucher['voucher_theme_id'],
                    'message' => $voucher['message'],
                    'amount' => $voucher['amount']
                );
            }
        }


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

        $order_data['totals'] = $totals;

        $order_data['total'] = $total_data['total'] + $order_data['shipping_price'];


        $this->load->model('checkout/order');

        $this->session->data['order_id'] = $this->model_checkout_order->addOrder($order_data);

        if ($this->session->data['order_id']) {
            foreach ($products as $product) {
                foreach ($product['option'] as $option) {
                    if ($option['type'] == "size") {
                        $product_size = $this->model_catalog_product->getProductOptionByName($product['product_id'], $option['type'], $option['value']);
                        $this->model_catalog_product->updateOptionSizeForProduct($product['quantity'], $product_size['product_option_value_id']);
                        break;
                    }
                }
            }
            $this->model_checkout_order->addOrderHistory($this->session->data['order_id'], 1, '', true);
        }

        if ($order_data['payment_code'] == "20")
            $this->response->redirect($this->url->link("extension/payment/cmi"));

        $this->response->redirect($this->url->link('checkout/success'));
    }

    public function delivery()
    {
        if (!$this->customer->isLogged()) {
            $this->response->redirect($this->url->link('account/login', "language=" . $this->config->get('config_language')));
        }

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

        if (isset($this->session->data['coupon'])) {
            $coupon = true;
        } else {
            $coupon = false;
        }


        if (isset($this->request->post['delivery']) && $this->request->post['delivery'] != "Standard") {
            $this->load->model('extension/shipping/item');


            $quote = $this->model_extension_shipping_item->getQuote();

            $this->session->data['delivery'] = $quote['quote']['item']['cost'];
            $this->session->data['delivery_method'] = 'Express';

            $json = array(
                'coupon' => $coupon,
                'total' => $this->currency->format($total + $quote['quote']['item']['cost'], $this->session->data['currency']),
                'delivery' => $quote['quote']['item']['cost'],
                'text' => $quote['quote']['item']['text']
            );

        } else {
            $this->load->model('extension/shipping/free');

            $quote = $this->model_extension_shipping_free->getQuote();

            $this->session->data['delivery'] = $quote['quote']['free']['cost'];
            $this->session->data['delivery_method'] = 'Standard';

            $json = array(
                'coupon' => $coupon,
                'total' => $this->currency->format($total + $quote['quote']['free']['cost'], $this->session->data['currency']),
                'delivery' => $quote['quote']['free']['cost'],
                'text' => $quote['quote']['free']['text']
            );

        }

        $this->response->setOutput(json_encode($json));
    }
}
