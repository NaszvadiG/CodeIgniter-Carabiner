<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->data["ctTemplate_slider"] = FALSE;
    }

    public function index() {
        $this->data['view'] = 'blogs';
        $this->load->view(ctTemplate(), $this->data);
    }
    public function detail() {
        $this->data['view'] = 'blogs-detail';
        $this->load->view(ctTemplate(), $this->data);
    }

}
