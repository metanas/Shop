<?php

class ControllerProductCategory extends Controller
{
    public function index()
    {
        $this->load->language('product/category');

        $this->load->model('catalog/category');

        $this->load->model('catalog/product');

        $this->load->model('tool/image');

        $this->load->model('account/wishlist');

        $this->document->addScript('catalog/view/javascript/filter.js');
        $this->document->addScript('catalog/view/javascript/loading.js');
        $this->document->addStyle('catalog/view/theme/default/stylesheet/loading.css');

        if (isset($this->request->get['filt'])) {
            $filter = $this->request->get['filt'];
        } else {
            $filter = '';
        }

        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'p.sort_order';
        }

        if (isset($this->request->get['order'])) {
            $order = $this->request->get['order'];
        } else {
            $order = 'ASC';
        }

        if (isset($this->request->get['page'])) {
            $page = $this->request->get['page'];
        } else {
            $page = 1;
        }

        if (isset($this->request->get['limit'])) {
            $limit = (int)$this->request->get['limit'];
        } else {
            $limit = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit');
        }

        if (isset($this->request->get['path'])) {
            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $path = '';

            $parts = explode('_', (string)$this->request->get['path']);

            $category_id = (int)array_pop($parts);

            $filter_count = array('filter_category_id' => $category_id, 'filter_sub_category' => true);

            $countProd = $this->model_catalog_product->getTotalProducts($filter_count);

            $data['count'] = $countProd;

        } else {
            $category_id = 0;
        }

        $category_info = $this->model_catalog_category->getCategory($category_id);

        if ($category_info) {
            $data['heading_title'] = $category_info['name'];

            $data['text_compare'] = sprintf($this->language->get('text_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));

            if ($category_info['image']) {
                $data['thumb'] = $this->model_tool_image->resize($category_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_height'));
            } else {
                $data['thumb'] = '';
            }

            $data['description'] = html_entity_decode($category_info['description'], ENT_QUOTES, 'UTF-8');
            $data['compare'] = $this->url->link('product/compare', 'language=' . $this->config->get('config_language'));

            $url = '';

            if (isset($this->request->get['filt'])) {
                $url .= '&filter=' . $this->request->get['filt'];
            }

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $data['categories'] = array();

            $results = $this->model_catalog_category->getCategories($category_id);

            foreach ($results as $result) {
                $filter_data = array(
                    'filter_category_id' => $result['category_id'],
                    'filter_sub_category' => true
                );

                $data['categories'][] = array(
                    'name' => $result['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
                    'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . '_' . $result['category_id'] . $url)
                );
            }

            $data['products'] = array();

            $filter_data = array(
                'filter_category_id' => $category_id,
                'filter_sub_category' => $this->config->get('config_product_category') ? true : false,
                'filter_filter' => $filter,
                'sort' => $sort,
                'order' => $order,
                'start' => ($page - 1) * $limit,
                'limit' => $limit
            );
            $product_total = $this->model_catalog_product->getTotalProducts($filter_data);

            $data['product_total'] = $product_total;

            $results = $this->model_catalog_product->getProducts($filter_data);

            $products_colors = array();
            $products_models = array();
            $products_size = array();

            $product_first = reset($results);

            $price_max = (int)((is_null($product_first['special'])) ? $product_first['price'] : $product_first['special']);
            $price_min = $price_max;
            foreach ($results as $result) {
                if ($result['image']) {
                    $image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height'));
                } else {
                    $image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
                }

                if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                    $price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                } else {
                    $price = false;
                }

                if ((float)$result['special']) {
                    $special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                } else {
                    $special = false;
                }

                $simulate = array();

                $results = $this->model_catalog_product->getProductImages($result['product_id']);

                foreach ($results as $r) {
                    $simulate[] = array(
                        'popup' => $this->model_tool_image->resize($r['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'))
                    );
                }

                if (isset($this->request->get['filt'])) {
                    if (strpos($this->request->get['filt'], '_')) {
                        $filterTri = $this->tri_filter(explode('_', $this->request->get['filt']));
                    } else {
                        $filterTri = $this->tri_filter(array($this->request->get['filt']));
                    }
                }

                foreach ($this->model_catalog_product->getProductOptions($result['product_id']) as $option) {
                    if ($option['type'] == 'size') {
                        foreach ($option['product_option_value'] as $size)
                            if(!in_array($size['name'], $products_size))
                                $products_size[] = $size['name'];
                    }
                }

                if (!$this->in_array_r($result['color'], $products_colors, 'color')) {
                    $products_colors[] = array("color" => $result['color'], "color_hex" => $result['color_hex'], 'isChecked' => (isset($filterTri) && in_array($result['color'], $filterTri['color'])) ? true : false);
                }

                if (!$this->in_array_r($result['manufacturer'], $products_models, 'manufacturer'))
                    $products_models[] = array('manufacturer' => $result['manufacturer'], 'isChecked' => (isset($filterTri) && in_array($result['manufacturer'], $filterTri['model'])) ? true : false);

                if ((int)$price_max < (int)((is_null($result['special'])) ? $result['price'] : $result['special']))
                    $price_max = (int)((is_null($result['special'])) ? $result['price'] : $result['special']);

                if ((int)$price_min > (int)((is_null($result['special'])) ? $result['price'] : $result['special']))
                    $price_min = (int)((is_null($result['special'])) ? $result['price'] : $result['special']);

                if ($this->customer->isLogged()) {
                    if ((int)$this->model_account_wishlist->isExist($result['product_id']) == true) {
                        $favorite = $this->model_tool_image->resize("favoriteAdded.png", 100, 100);
                    } else $favorite = $this->model_tool_image->resize("favorite.png", 100, 100);
                } else {
                    if (isset($this->session->data['wishlist']))
                        if (in_array($result['product_id'], $this->session->data['wishlist'])) {
                            $favorite = $this->model_tool_image->resize("favoriteAdded.png", 100, 100);
                        } else $favorite = $this->model_tool_image->resize("favorite.png", 100, 100);
                    else $favorite = $this->model_tool_image->resize("favorite.png", 100, 100);
                }

                $data['products'][] = array(
                    'product_id' => $result['product_id'],
                    'thumb' => $image,
                    'name' => (strlen($result['name']) <= 12) ? $result['name'] : utf8_substr(trim(strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
                    'price' => $price,
                    'special' => $special,
                    'favorite' => $favorite,
                    'minimum' => $result['minimum'] > 0 ? $result['minimum'] : 1,
                    'href' => $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . '&product_id=' . $result['product_id'] . $url)
                );
            }
            $data['max'] = $price_max;
            $data['price_max'] = $this->currency->format($price_max, $this->session->data['currency']);
            $data['min'] = $price_min;
            $data['price_min'] = $this->currency->format($price_min, $this->session->data['currency']);
            $data['products_colors'] = $products_colors;
            $data['products_models'] = $products_models;
            $data['products_size'] = $products_size;

            $url = '';

            if (isset($this->request->get['filt'])) {
                $url .= '&filter=' . $this->request->get['filt'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $data['sorts'] = array();

            $data['sorts'][] = array(
                'text' => $this->language->get('text_default'),
                'value' => 'p.sort_order-ASC',
                'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . '&sort=p.sort_order&order=ASC' . $url)
            );

//            $data['sorts'][] = array(
//                'text' => $this->language->get('text_name_asc'),
//                'value' => 'pd.name-ASC',
//                'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . '&sort=pd.name&order=ASC' . $url)
//            );

//            $data['sorts'][] = array(
//                'text' => $this->language->get('text_name_desc'),
//                'value' => 'pd.name-DESC',
//                'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . '&sort=pd.name&order=DESC' . $url)
//            );

            $data['sorts'][] = array(
                'text' => $this->language->get('text_price_asc'),
                'value' => 'p.price-ASC',
                'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . '&sort=p.price&order=ASC' . $url)
            );

            $data['sorts'][] = array(
                'text' => $this->language->get('text_price_desc'),
                'value' => 'p.price-DESC',
                'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . '&sort=p.price&order=DESC' . $url)
            );

//            if ($this->config->get('config_review_status')) {
//                $data['sorts'][] = array(
//                    'text' => $this->language->get('text_rating_desc'),
//                    'value' => 'rating-DESC',
//                    'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . '&sort=rating&order=DESC' . $url)
//                );
//
//                $data['sorts'][] = array(
//                    'text' => $this->language->get('text_rating_asc'),
//                    'value' => 'rating-ASC',
//                    'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . '&sort=rating&order=ASC' . $url)
//                );
//            }

//            $data['sorts'][] = array(
//                'text' => $this->language->get('text_model_asc'),
//                'value' => 'p.model-ASC',
//                'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . '&sort=p.model&order=ASC' . $url)
//            );
//
//            $data['sorts'][] = array(
//                'text' => $this->language->get('text_model_desc'),
//                'value' => 'p.model-DESC',
//                'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . '&sort=p.model&order=DESC' . $url)
//            );

            $url = '';

            if (isset($this->request->get['filt'])) {
                $url .= '&filt=' . $this->request->get['filt'];
            }

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            $data['limits'] = array();

            $limits = array_unique(array($this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit'), 25, 50, 75, 100));

            sort($limits);

            foreach ($limits as $value) {
                $data['limits'][] = array(
                    'text' => $value,
                    'value' => $value,
                    'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . $url . '&limit=' . $value)
                );
            }

            $url = '';

            if (isset($this->request->get['filt'])) {
                $url .= '&filter=' . $this->request->get['filt'];
            }

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $pagination = new Pagination();
            $pagination->total = $product_total;
            $pagination->page = $page;
            $pagination->limit = $limit;
            $pagination->url = $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . $url . '&page={page}');

            $data['pagination'] = $pagination->render();

            $data['results'] = sprintf($this->language->get('text_pagination'), ($product_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($product_total - $limit)) ? $product_total : ((($page - 1) * $limit) + $limit), $product_total, ceil($product_total / $limit));

            // http://googlewebmastercentral.blogspot.com/2011/09/pagination-with-relnext-and-relprev.html
            if ($page == 1) {
                $this->document->addLink($this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $category_info['category_id']), 'canonical');
            } else {
                $this->document->addLink($this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $category_info['category_id'] . '&page=' . $page), 'canonical');
            }

            if ($page > 1) {
                $this->document->addLink($this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $category_info['category_id'] . (($page - 2) ? '&page=' . ($page - 1) : '')), 'prev');
            }

            if ($limit && ceil($product_total / $limit) > $page) {
                $this->document->addLink($this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $category_info['category_id'] . '&page=' . ($page + 1)), 'next');
            }

            $data['sort'] = $sort;
            $data['order'] = $order;
            $data['limit'] = $limit;

            $data['content_top'] = $this->load->controller('common/content_top');
            $data['column_left'] = $this->load->controller('common/column_left');
            $data['column_right'] = $this->load->controller('common/column_right');
            $data['content_bottom'] = $this->load->controller('common/content_bottom');

            $data['continue'] = $this->url->link('common/home', 'language=' . $this->config->get('config_language'));

            $content = $this->load->view('product/category', $data);

            $data = array();

            $data['content'] = $content;

            $data['footer'] = $this->load->controller('common/footer');
            $data['header'] = $this->load->controller('common/header');

            $this->response->setOutput($this->load->view('common/home', $data));
        } else {
            $url = '';

            if (isset($this->request->get['path'])) {
                $url .= '&path=' . $this->request->get['path'];
            }

            if (isset($this->request->get['filt'])) {
                $url .= '&filter=' . $this->request->get['filt'];
            }

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $this->document->setTitle($this->language->get('text_error'));

            $data['continue'] = $this->url->link('common/home', 'language=' . $this->config->get('config_language'));

            $this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

            $data['column_left'] = $this->load->controller('common/column_left');
            $data['column_right'] = $this->load->controller('common/column_right');
            $data['content_top'] = $this->load->controller('common/content_top');
            $data['content_bottom'] = $this->load->controller('common/content_bottom');
            $data['content'] = $this->load->controller('error/not_found');
            $data['footer'] = $this->load->controller('common/footer');
            $data['header'] = $this->load->controller('common/header');

            $this->response->setOutput($this->load->view('error/not_found', $data));
        }
    }

    public function filter()
    {
        $this->load->language('product/category');

        $this->load->model('catalog/category');

        $this->load->model('catalog/product');

        $this->load->model('tool/image');

        $this->load->model('account/wishlist');

        if (isset($this->request->get['filt'])) {
            $filter = $this->request->get['filt'];
        } else {
            $filter = '';
        }

        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'p.sort_order';
        }

        if (isset($this->request->get['order'])) {
            $order = $this->request->get['order'];
        } else {
            $order = 'ASC';
        }

        if (isset($this->request->get['page'])) {
            $page = $this->request->get['page'];
        } else {
            $page = 1;
        }

        if (isset($this->request->get['limit'])) {
            $limit = (int)$this->request->get['limit'];
        } else {
            $limit = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit');
        }

        if (isset($this->request->get['path'])) {
            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $path = '';

            $parts = explode('_', (string)$this->request->get['path']);

            $category_id = (int)array_pop($parts);

            $filter_count = array('filter_category_id' => $category_id, 'filter_sub_category' => true);

            $countProd = $this->model_catalog_product->getTotalProducts($filter_count);

            $data['count'] = $countProd;

        } else {
            $category_id = 0;
        }

        $category_info = $this->model_catalog_category->getCategory($category_id);

        if ($category_info) {
            $this->document->setTitle($category_info['meta_title']);
            $this->document->setDescription($category_info['meta_description']);
            $this->document->setKeywords($category_info['meta_keyword']);

            $data['heading_title'] = $category_info['name'];

            $data['text_compare'] = sprintf($this->language->get('text_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));

            if ($category_info['image']) {
                $data['thumb'] = $this->model_tool_image->resize($category_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_height'));
            } else {
                $data['thumb'] = '';
            }

            $data['description'] = html_entity_decode($category_info['description'], ENT_QUOTES, 'UTF-8');
            $data['compare'] = $this->url->link('product/compare', 'language=' . $this->config->get('config_language'));

            $url = '';

            if (isset($this->request->get['filt'])) {
                $url .= '&filter=' . $this->request->get['filt'];
            }

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $data['categories'] = array();

            $results = $this->model_catalog_category->getCategories($category_id);

            foreach ($results as $result) {
                $filter_data = array(
                    'filter_category_id' => $result['category_id'],
                    'filter_sub_category' => true
                );

                $data['categories'][] = array(
                    'name' => $result['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
                    'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . '_' . $result['category_id'] . $url)
                );
            }

            $data['products'] = array();

            $filter_data = array(
                'filter_category_id' => $category_id,
                'filter_sub_category' => $this->config->get('config_product_category') ? true : false,
                'filter_filter' => $filter,
                'sort' => $sort,
                'order' => $order,
                'start' => ($page - 1) * $limit,
                'limit' => $limit
            );
            $product_total = $this->model_catalog_product->getTotalProducts($filter_data);

            $data['product_total'] = $product_total;

            $results = $this->model_catalog_product->getProducts($filter_data);

            $products_colors = array();
            $products_models = array();

            $product_first = reset($results);

            $price_max = (int)((is_null($product_first['special'])) ? $product_first['price'] : $product_first['special']);
            $price_min = $price_max;
            foreach ($results as $result) {
                if ($result['image']) {
                    $image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height'));
                } else {
                    $image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
                }

                if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                    $price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                } else {
                    $price = false;
                }

                if ((float)$result['special']) {
                    $special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                } else {
                    $special = false;
                }

                $simulate = array();

                $results = $this->model_catalog_product->getProductImages($result['product_id']);

                foreach ($results as $r) {
                    $simulate[] = array(
                        'popup' => $this->model_tool_image->resize($r['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'))
                    );
                }

                if (isset($this->request->get['filt'])) {
                    if (strpos($this->request->get['filt'], '_')) {
                        $filterTri = $this->tri_filter(explode('_', $this->request->get['filt']));
                    } else {
                        $filterTri = $this->tri_filter(array($this->request->get['filt']));
                    }
                }

                if (!$this->in_array_r($result['color'], $products_colors, 'color')) {
                    $products_colors[] = array("color" => $result['color'], "color_hex" => $result['color_hex'], 'isChecked' => (isset($filterTri) && in_array($result['color'], $filterTri['color'])) ? true : false);
                }

                if (!$this->in_array_r($result['manufacturer'], $products_models, 'manufacturer'))
                    $products_models[] = array('manufacturer' => $result['manufacturer'], 'isChecked' => (isset($filterTri) && in_array($result['manufacturer'], $filterTri['model'])) ? true : false);

                if ((int)$price_max < (int)((is_null($result['special'])) ? $result['price'] : $result['special']))
                    $price_max = (int)((is_null($result['special'])) ? $result['price'] : $result['special']);

                if ((int)$price_min > (int)((is_null($result['special'])) ? $result['price'] : $result['special']))
                    $price_min = (int)((is_null($result['special'])) ? $result['price'] : $result['special']);

                if ($this->customer->isLogged()) {
                    if ((int)$this->model_account_wishlist->isExist($result['product_id']) == true) {
                        $favorite = $this->model_tool_image->resize("favoriteAdded.png", 100, 100);
                    } else $favorite = $this->model_tool_image->resize("favorite.png", 100, 100);
                } else {
                    if (isset($this->session->data['wishlist']))
                        if (in_array($result['product_id'], $this->session->data['wishlist'])) {
                            $favorite = $this->model_tool_image->resize("favoriteAdded.png", 100, 100);
                        } else $favorite = $this->model_tool_image->resize("favorite.png", 100, 100);
                    else $favorite = $this->model_tool_image->resize("favorite.png", 100, 100);
                }

                $data['products'][] = array(
                    'product_id' => $result['product_id'],
                    'thumb' => $image,
                    'name' => (strlen($result['name']) <= 12) ? $result['name'] : utf8_substr(trim(strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
                    'price' => $price,
                    'special' => $special,
                    'favorite' => $favorite,
                    'minimum' => $result['minimum'] > 0 ? $result['minimum'] : 1,
                    'href' => $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . '&product_id=' . $result['product_id'] . $url)
                );
            }
            $data['price_max'] = $price_max;
            $data['price_min'] = $price_min;
            $data['currency'] = $this->session->data['currency'];
            $data['products_colors'] = $products_colors;
            $data['products_models'] = $products_models;

            $url = '';

            if (isset($this->request->get['filt'])) {
                $url .= '&filter=' . $this->request->get['filt'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $data['sorts'] = array();

            $data['sorts'][] = array(
                'text' => $this->language->get('text_default'),
                'value' => 'p.sort_order-ASC',
                'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . '&sort=p.sort_order&order=ASC' . $url)
            );

//            $data['sorts'][] = array(
//                'text' => $this->language->get('text_name_asc'),
//                'value' => 'pd.name-ASC',
//                'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . '&sort=pd.name&order=ASC' . $url)
//            );

//            $data['sorts'][] = array(
//                'text' => $this->language->get('text_name_desc'),
//                'value' => 'pd.name-DESC',
//                'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . '&sort=pd.name&order=DESC' . $url)
//            );

            $data['sorts'][] = array(
                'text' => $this->language->get('text_price_asc'),
                'value' => 'p.price-ASC',
                'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . '&sort=p.price&order=ASC' . $url)
            );

            $data['sorts'][] = array(
                'text' => $this->language->get('text_price_desc'),
                'value' => 'p.price-DESC',
                'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . '&sort=p.price&order=DESC' . $url)
            );

//            if ($this->config->get('config_review_status')) {
//                $data['sorts'][] = array(
//                    'text' => $this->language->get('text_rating_desc'),
//                    'value' => 'rating-DESC',
//                    'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . '&sort=rating&order=DESC' . $url)
//                );
//
//                $data['sorts'][] = array(
//                    'text' => $this->language->get('text_rating_asc'),
//                    'value' => 'rating-ASC',
//                    'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . '&sort=rating&order=ASC' . $url)
//                );
//            }

//            $data['sorts'][] = array(
//                'text' => $this->language->get('text_model_asc'),
//                'value' => 'p.model-ASC',
//                'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . '&sort=p.model&order=ASC' . $url)
//            );
//
//            $data['sorts'][] = array(
//                'text' => $this->language->get('text_model_desc'),
//                'value' => 'p.model-DESC',
//                'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . '&sort=p.model&order=DESC' . $url)
//            );

            $url = '';

            if (isset($this->request->get['filt'])) {
                $url .= '&filter=' . $this->request->get['filt'];
            }

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            $data['limits'] = array();

            $limits = array_unique(array($this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit'), 25, 50, 75, 100));

            sort($limits);

            foreach ($limits as $value) {
                $data['limits'][] = array(
                    'text' => $value,
                    'value' => $value,
                    'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . $url . '&limit=' . $value)
                );
            }

            $url = '';

            if (isset($this->request->get['filt'])) {
                $url .= '&filter=' . $this->request->get['filt'];
            }

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $pagination = new Pagination();
            $pagination->total = $product_total;
            $pagination->page = $page;
            $pagination->limit = $limit;
            $pagination->url = $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . $url . '&page={page}');

            $data['pagination'] = $pagination->render();

            $data['results'] = sprintf($this->language->get('text_pagination'), ($product_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($product_total - $limit)) ? $product_total : ((($page - 1) * $limit) + $limit), $product_total, ceil($product_total / $limit));

            // http://googlewebmastercentral.blogspot.com/2011/09/pagination-with-relnext-and-relprev.html
            if ($page == 1) {
                $this->document->addLink($this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $category_info['category_id']), 'canonical');
            } else {
                $this->document->addLink($this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $category_info['category_id'] . '&page=' . $page), 'canonical');
            }

            if ($page > 1) {
                $this->document->addLink($this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $category_info['category_id'] . (($page - 2) ? '&page=' . ($page - 1) : '')), 'prev');
            }

            if ($limit && ceil($product_total / $limit) > $page) {
                $this->document->addLink($this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $category_info['category_id'] . '&page=' . ($page + 1)), 'next');
            }

            $data['sort'] = $sort;
            $data['order'] = $order;
            $data['limit'] = $limit;

            $data['content_top'] = $this->load->controller('common/content_top');
            $data['column_left'] = $this->load->controller('common/column_left');
            $data['column_right'] = $this->load->controller('common/column_right');
            $data['content_bottom'] = $this->load->controller('common/content_bottom');

            $data['continue'] = $this->url->link('common/home', 'language=' . $this->config->get('config_language'));

            $this->response->setOutput($this->load->view('product/category', $data));
        } else {
            $url = '';

            if (isset($this->request->get['path'])) {
                $url .= '&path=' . $this->request->get['path'];
            }

            if (isset($this->request->get['filt'])) {
                $url .= '&filter=' . $this->request->get['filt'];
            }

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $this->document->setTitle($this->language->get('text_error'));

            $data['continue'] = $this->url->link('common/home', 'language=' . $this->config->get('config_language'));

            $this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

            $data['column_left'] = $this->load->controller('common/column_left');
            $data['column_right'] = $this->load->controller('common/column_right');
            $data['content_top'] = $this->load->controller('common/content_top');
            $data['content_bottom'] = $this->load->controller('common/content_bottom');
            $data['content'] = $this->load->controller('error/not_found');
            $data['footer'] = $this->load->controller('common/footer');
            $data['header'] = $this->load->controller('common/header');

            $this->response->setOutput($this->load->view('error/not_found', $data));
        }
    }

    public function simulate()
    {
        $this->load->model('catalog/category');
        $this->load->model('catalog/product');
        $this->load->model('tool/image');

        $product_similar = $this->model_catalog_product->getSimilarProduct($this->request->get['product_id']);

        foreach ($product_similar as $result) {

            $this->model_catalog_product->getProduct($result);

            if ($result['image']) {
                $image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
            } else {
                $image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
            }

            $data[] = array(
                'product_id' => $result['product_id'],
                'thumb' => $image,
                'href' => $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . '&product_id=' . $result['product_id'])
            );
        }

        if (isset($data))
            $this->response->setOutput(json_encode($data));
    }

    private function in_array_r($needle, $haystack, $column, $strict = false)
    {
        foreach ($haystack as $item) {
            if (strtolower($needle) === strtolower($item[$column])) {
                return true;
            }
        }
        return false;
    }

    private function tri_filter($filters)
    {
        $filtersTrie = array('color' => array(), 'model' => array(), 'price' => array(), 'size' => array());
        foreach ($filters as $filter) {
            list($key, $value) = explode('[]', $filter);
            $filtersTrie[$key][] = $value;
        }
        return $filtersTrie;
    }
}
