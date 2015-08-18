<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/** load the CI class for Modular Extensions * */
require dirname(__FILE__) . '/Base.php';

/**
 * Modular Extensions - HMVC
 *
 * Adapted from the CodeIgniter Core Classes
 * @link	http://codeigniter.com
 *
 * Description:
 * This library replaces the CodeIgniter Controller class
 * and adds features allowing use of modules and the HMVC design pattern.
 *
 * Install this file as application/third_party/MX/Controller.php
 *
 * @copyright	Copyright (c) 2015 Wiredesignz
 * @version 	5.5
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 * */
class MX_Controller {

    public $autoload = array();
    public $data;

    public function __construct() {
        $class = str_replace(CI::$APP->config->item('controller_suffix'), '', get_class($this));
        log_message('debug', $class . " MX_Controller Initialized");
        Modules::$registry[strtolower($class)] = $this;
        // ================================ START CITSTUDIO CONFIG =====
        $this->load->helper('config');
        $this->load->helper('template');

        $this->load->library('carabiner');
        $this->load->library('parser');

        $this->data["ctTemplate_slider"] = TRUE;

        $carabiner_config = array(
            'script_dir' => 'assets/' . ctConfig('admin_template') . '/',
            'style_dir' => 'assets/' . ctConfig('admin_template') . '/',
            'cache_dir' => 'assets/cache/',
            'base_uri' => '/',
            'combine' => FALSE,
            'dev' => TRUE,
            'minify_js' => TRUE,
            'minify_css' => TRUE
        );

        $this->carabiner->config($carabiner_config);

        $css["global"] = array(
            array('dist/css/bootstrap.min.css'),
            array('dist/css/veneto-admin.min.css'),
        );
        
        $css["themes"] = array( array('demo/css/demo.css'), );
        $css["fonts"] = array( array('dist/assets/font-awesome/css/font-awesome.css'),);

        $this->carabiner->group('admin', array('css' => $css["global"]));
        $this->carabiner->group('admin-theme', array('css' => $css["themes"]));
        $this->carabiner->group('admin-fonts', array('css' => $css["fonts"]));
        
        $js["global"] = array(
            array('dist/assets/libs/jquery/jquery.min.js'),
            array('dist/assets/bs3/js/bootstrap.min.js'),
            array('dist/assets/plugins/jquery-navgoco/jquery.navgoco.js'),
            array('dist/js/main.js'),
        );
        
        $this->carabiner->group('admin', array('js' => $js["global"]));
        
        $this->data["tpl_title"] = "Control Panel JabarCMS";
        $this->data["page_title"] = "Dashboard";

        // ================================ END CITSTUDIO CONFIG =======

        /* copy a loader instance and initialize */
        $this->load = clone load_class('Loader');
        $this->load->initialize($this);

        /* autoload module items */
        $this->load->_autoloader($this->autoload);
    }

    public function __get($class) {
        return CI::$APP->$class;
    }

}
