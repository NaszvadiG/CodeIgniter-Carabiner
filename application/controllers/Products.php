<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->data["ctTemplate_slider"] = FALSE;
    }

    public function index() {
        $this->data['view'] = 'products';
        $this->load->view(ctTemplate(), $this->data);
    }

    public function detail($id = NULL) {
        $this->data['view'] = 'product-single';
        $this->load->view(ctTemplate(), $this->data);
    }

}
