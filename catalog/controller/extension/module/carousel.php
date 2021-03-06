<?php

class ControllerExtensionModuleCarousel extends Controller
{
    public function index($setting)
    {
        static $module = 0;

        $this->load->model('design/banner');
        $this->load->model('tool/image');
        $this->load->model('account/wishlist');


        $this->document->addStyle('catalog/view/javascript/jquery/swiper/css/swiper.min.css');
        $this->document->addStyle('catalog/view/javascript/jquery/swiper/css/opencart.css');
        $this->document->addScript('catalog/view/javascript/jquery/swiper/js/swiper.jquery.js');

        $this->load->language('extension/module/special');

        $this->load->model('catalog/product');

        $this->load->model('catalog/category');

        $this->load->model('tool/image');

        $data['products'] = array();

        if (isset($this->request->get['product_id'])) {
            $category_id = $this->model_catalog_category->getCategoryByProduct($this->request->get['product_id'])['category_id'];
        } else {
            $category_id = 0;
        }

        $filter_data = array(
            'filter_category_id' => $category_id,
            'sort' => 'pd.name',
            'order' => 'ASC',
            'start' => 0,
            'limit' => 30
        );

        $category = $this->model_catalog_category->getCategories(0);
        if ($setting['name'] == "SpecialsCarousel") {
            $results = $this->model_catalog_product->getProductSpecials($filter_data);
            $data['heading_title'] = "Offres";
            $data['category_link'] = $this->url->link('product/category', array("path" => $category[0]['category_id'], "special" => "Offres"));
        } else {
            $results = $this->model_catalog_product->getProducts($filter_data);
            $data['heading_title'] = ($category_id == 0) ? "Nouveautés" : "Produits similaires";
            $data['category_link'] = $this->url->link('product/category', array("path" => $category[count($category) - 1]['category_id']));
        }

        if ($results) {
            foreach ($results as $result) {
                if ($result['image']) {
                    $image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
                } else {
                    $image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
                }

                if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                    $price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                } else {
                    $price = false;
                }

                if ((float)$result['special']) {
                    $special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                    $discount = intval((($result['price']- $result['special'])* 100) / $result['price']);
                } else {
                    $special = false;
                    $discount = false;
                }

                $simulate = array();

                $results = $this->model_catalog_product->getProductImages($result['product_id']);

                foreach ($results as $r) {
                    $simulate[] = array(
                        'popup' => $this->model_tool_image->resize($r['image'], $setting['width'], $setting['height'])
                    );
                }
                if ($this->customer->isLogged()) {
                    if ($this->model_account_wishlist->isExist($result['product_id']) == 1) {
                        $favorite = $this->model_tool_image->resize("favoriteAdded.png", 100, 100);
                    } else $favorite = $this->model_tool_image->resize("favorite.png", 100, 100);
                } else {
                    if (isset($this->session->data['wishlist']))
                        if (in_array($result['product_id'], $this->session->data['wishlist'])) {
                            $favorite = $this->model_tool_image->resize("favoriteAdded.png", 100, 100);
                        } else $favorite = $this->model_tool_image->resize("favorite.png", 100, 100);
                    else $favorite = $this->model_tool_image->resize("favorite.png", 100, 100);
                }

                $quantity = $this->model_catalog_product->getTotalQuantityProduct($result['product_id']);

                if ($quantity <= 0) {
                    $stock = "Out of Stock";
                } else {
                    $stock = '';
                }

                $data['products'][] = array(
                    'product_id' => $result['product_id'],
                    'thumb' => $image,
                    'manufacturer' => $result['manufacturer'],
                    'name' =>  $result['name'],
                    'stock' => $stock,
                    'discount' => $discount,
                    'price' => $price,
                    'special' => $special,
                    'favorite' => $favorite,
                    'href' => $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&product_id=' . $result['product_id'])
                );
            }
        }
        $data['module'] = $module++;

        return $this->load->view('extension/module/carousel', $data);
    }
}
