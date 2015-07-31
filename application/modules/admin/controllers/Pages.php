<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends MX_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        echo "ini pages index";
    }
    public function add() {
        echo "ini pages add";
    }

}
