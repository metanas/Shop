<?php

class ControllerCatalogColor extends Controller
{
    public function index()
    {
        $this->load->language("catalog/color");

        $this->document->setTitle($this->language->get("heading_title"));

        $this->load->model("catalog/color");

        $this->getList();
    }

    public function add() {
        $this->load->language('catalog/color');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/color');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_catalog_color->addColor($this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            $this->response->redirect($this->url->link('catalog/color', 'user_token=' . $this->session->data['user_token'] . $url));
        }

        $this->getForm();
    }

    public function edit() {
        $this->load->language('catalog/color');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/color');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_catalog_color->editColor($this->request->get['color_id'], $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            $this->response->redirect($this->url->link('catalog/color', 'user_token=' . $this->session->data['user_token'] . $url));
        }

        $this->getForm();
    }

    public function delete() {
        $this->load->language('catalog/color');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/color');

        if (isset($this->request->post['selected']) && $this->validateDelete()) {
            foreach ($this->request->post['selected'] as $color_id) {
                $this->model_catalog_color->deleteColor($color_id);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            $this->response->redirect($this->url->link('catalog/color', 'user_token=' . $this->session->data['user_token'] . $url));
        }

        $this->getList();
    }

    protected function getList()
    {
        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'name';
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

        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('catalog/color', 'user_token=' . $this->session->data['user_token'] . $url)
        );

        $data['add'] = $this->url->link('catalog/color/add', 'user_token=' . $this->session->data['user_token'] . $url);
        $data['delete'] = $this->url->link('catalog/color/delete', 'user_token=' . $this->session->data['user_token'] . $url);

        $data['colors'] = array();

        $filter_data = array(
            'sort'  => $sort,
            'order' => $order,
            'start' => ($page - 1) * $this->config->get('config_limit_admin'),
            'limit' => $this->config->get('config_limit_admin')
        );

        $colors_total = $this->model_catalog_color->getTotalColors();

        $results = $this->model_catalog_color->getColors($filter_data);

        foreach ($results as $result) {
            $data['colors'][] = array(
                'color_id'   => $result['color_id'],
                'name'       => $result['name'],
                'code'       => $result['code'],
                'sort_order' => $result['sort_order'],
                'edit'       => $this->url->link('catalog/color/edit', 'user_token=' . $this->session->data['user_token'] . '&color_id=' . $result['color_id'] . $url)
            );
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];

            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

        if (isset($this->request->post['selected'])) {
            $data['selected'] = (array)$this->request->post['selected'];
        } else {
            $data['selected'] = array();
        }

        $url = '';

        if ($order == 'ASC') {
            $url .= '&order=DESC';
        } else {
            $url .= '&order=ASC';
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['sort_name'] = $this->url->link('catalog/color', 'user_token=' . $this->session->data['user_token'] . '&sort=name' . $url);
        $data['sort_sort_order'] = $this->url->link('catalog/color', 'user_token=' . $this->session->data['user_token'] . '&sort=sort_order' . $url);

        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        $pagination = new Pagination();
        $pagination->total = $colors_total;
        $pagination->page = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url = $this->url->link('catalog/color', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}');

        $data['pagination'] = $pagination->render();

        $data['results'] = sprintf($this->language->get('text_pagination'), ($colors_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($colors_total - $this->config->get('config_limit_admin'))) ? $colors_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $colors_total, ceil($colors_total / $this->config->get('config_limit_admin')));

        $data['sort'] = $sort;
        $data['order'] = $order;

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('catalog/color_list', $data));
    }

    protected function getForm() {
        $data['text_form'] = !isset($this->request->get['color_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['name'])) {
            $data['error_name'] = $this->error['name'];
        } else {
            $data['error_name'] = array();
        }

        if (isset($this->error['color_value'])) {
            $data['error_color_value'] = $this->error['color_value'];
        } else {
            $data['error_color_value'] = array();
        }

        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('catalog/color', 'user_token=' . $this->session->data['user_token'] . $url)
        );

        if (!isset($this->request->get['color_id'])) {
            $data['action'] = $this->url->link('catalog/color/add', 'user_token=' . $this->session->data['user_token'] . $url);
        } else {
            $data['action'] = $this->url->link('catalog/color/edit', 'user_token=' . $this->session->data['user_token'] . '&color_id=' . $this->request->get['color_id'] . $url);
        }

        $data['cancel'] = $this->url->link('catalog/color', 'user_token=' . $this->session->data['user_token'] . $url);

        if (isset($this->request->get['color_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $color_info = $this->model_catalog_color->getColor($this->request->get['color_id']);
        }

        $data['user_token'] = $this->session->data['user_token'];

        $this->load->model('localisation/language');

        $data['languages'] = $this->model_localisation_language->getLanguages();


        if (isset($this->request->post['sort_order'])) {
            $data['sort_order'] = $this->request->post['sort_order'];
        } elseif (!empty($color_info)) {
            $data['sort_order'] = $color_info['sort_order'];
        } else {
            $data['sort_order'] = '';
        }

        if (isset($this->request->post['color_value'])) {
            $color_values = $this->request->post['color_value'];
        } elseif (isset($this->request->get['color_id'])) {
            $color_values = $this->model_catalog_color->getColorValueDescriptions($this->request->get['color_id']);
        } else {
            $color_values = array();
        }



        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('catalog/color_form', $data));
    }

    protected function validateForm() {
        if (!$this->user->hasPermission('modify', 'catalog/color')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        foreach ($this->request->post['color_description'] as $language_id => $value) {
            if ((utf8_strlen($value['name']) < 1) || (utf8_strlen($value['name']) > 128)) {
                $this->error['name'][$language_id] = $this->language->get('error_name');
            }
        }

        if (($this->request->post['type'] == 'select' || $this->request->post['type'] == 'radio' || $this->request->post['type'] == 'checkbox') && !isset($this->request->post['option_value'])) {
            $this->error['warning'] = $this->language->get('error_type');
        }

        if (isset($this->request->post['option_value'])) {
            foreach ($this->request->post['option_value'] as $option_value_id => $option_value) {
                foreach ($option_value['option_value_description'] as $language_id => $option_value_description) {
                    if ((utf8_strlen($option_value_description['name']) < 1) || (utf8_strlen($option_value_description['name']) > 128)) {
                        $this->error['option_value'][$option_value_id][$language_id] = $this->language->get('error_option_value');
                    }
                }
            }
        }

        return !$this->error;
    }

    protected function validateDelete() {
        if (!$this->user->hasPermission('modify', 'catalog/option')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        $this->load->model('catalog/product_option');

        foreach ($this->request->post['selected'] as $option_id) {
            $product_total = $this->model_catalog_product_option->getTotalProductsByOptionId($option_id);

            if ($product_total) {
                $this->error['warning'] = sprintf($this->language->get('error_product'), $product_total);
            }
        }

        return !$this->error;
    }

}