<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public $data;
    public $ctTemplate;

    public function __construct() {
        parent::__construct();

        $this->load->helper('config');
        $this->load->helper('template');
        
        $this->load->library('carabiner');
        $this->load->library('parser');
        
        $this->data["ctTemplate_slider"] = TRUE;
        
        $carabiner_config = array(
            'script_dir' => 'assets/'.ctConfig('front_template').'/js/',
            'style_dir' => 'assets/'.ctConfig('front_template').'/css/',
            'cache_dir' => 'assets/cache/',
            'base_uri' => '/codeigniter-carabiner/',
            'combine' => FALSE,
            'dev' => TRUE,
            'minify_js' => TRUE,
            'minify_css' => TRUE
        );

        $this->carabiner->config($carabiner_config);

        $css_assets_global = array(
            array('bootstrap.min.css'),
            array('font-awesome.min.css'),
            array('prettyPhoto.css'),
            array('price-range.css'),
            array('animate.css'),
            array('main.css'),
            array('responsive.css'),
            array('customs.css'),
        );

        $this->carabiner->css($css_assets_global);
        $js_assets_global = array(
            array('jquery.js'),
            array('bootstrap.min.js'),
            array('jquery.scrollUp.min.js'),
            array('price-range.js'),
            array('jquery.prettyPhoto.js'),
            array('main.js'),
        );

        $this->carabiner->js($js_assets_global);
    }

}
