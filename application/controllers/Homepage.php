<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['view'] = 'homepage';
        $this->load->view(ctTemplate(), $this->data);
    }

}
