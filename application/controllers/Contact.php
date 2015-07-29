<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->data["ctTemplate_slider"] = FALSE;
    }

    public function index() {
        $this->load->view(ctTemplate('front', 'template-contact'), $this->data);
    }

}
