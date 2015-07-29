<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['view'] = 'homepage';
        $this->load->view(ctTemplate(), $this->data);
    }
    
    public function e404() {
        $this->data['view'] = 'homepage';
        $this->load->view(ctTemplate('front','errors'), $this->data);
    }

}
