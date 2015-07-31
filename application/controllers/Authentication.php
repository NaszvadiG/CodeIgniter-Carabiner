<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->data["ctTemplate_slider"] = FALSE;
    }

    public function index() {
        $this->data['view'] = 'products';
        $this->load->view(ctTemplate(), $this->data);
    }

    public function checkout($id = NULL) {
        $this->data['view'] = 'shop-checkout';
        $this->load->view(ctTemplate('front','template-fullwidth'), $this->data);
    }
    public function login($id = NULL) {
        $this->data['view'] = 'shop-login';
        $this->load->view(ctTemplate('front','template-fullwidth'), $this->data);
    }
    public function cart($id = NULL) {
        $this->data['view'] = 'shop-cart';
        $this->load->view(ctTemplate('front','template-fullwidth'), $this->data);
    }

}
