<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MX_Controller 
{

    public function __construct() 
    {
        parent::__construct();
    }

    public function index() 
    {
        
        $this->data["carabiner_css"] = 'admin-plugin';
        $css["chart"] = array(
            array('dist/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css'),
            array('dist/css/plugins/rickshaw.min.css'),
            array('dist/css/plugins/morris.min.css'),
        );
        $this->carabiner->group('admin-plugin', array('css' => $css["chart"]));
        
        $this->data["carabiner_js"] = 'admin-chart';
        $this->data["carabiner_js_pages"] = 'admin-dashboard';
        
        $js["chart"] = array(
            array('dist/assets/plugins/jquery-sparkline/jquery.sparkline.js'),
            array('demo/js/demo.js'),
            array('dist/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js'),
            array('dist/assets/plugins/jquery-jvectormap/maps/world_mill_en.js'),
            array('dist/assets/plugins/rickshaw/js/vendor/d3.v3.js'),
            array('dist/assets/plugins/rickshaw/rickshaw.min.js'),
            array('dist/assets/plugins/flot/jquery.flot.js'),
            array('dist/assets/plugins/flot/jquery.flot.resize.js'),
            array('dist/assets/plugins/raphael/raphael-min.js'),
            array('dist/assets/plugins/morris/morris.min.js'),
        );
        
        $this->carabiner->group('admin-chart', array('js' => $js["chart"]));
        
        $js["dashboard"] = array(array('demo/js/dashboard.js'));
        $this->carabiner->group('admin-dashboard', array('js' => $js["dashboard"]));
        
        
        $this->data['view'] = 'users/profile';
        $this->load->view(ctTemplate('admin'), $this->data);
    }
    public function profile() 
    {
        $this->data["page_title"] = "User's profile";
        $this->data["carabiner_css"] = NULL;
        
        $this->data["carabiner_js"] = 'admin-chart';
        $this->data["carabiner_js_pages"] = 'admin-pages';
        
        $js["chart"] = array(
            array('dist/assets/plugins/jquery-sparkline/jquery.sparkline.js'),
            array('demo/js/demo.js'),
            array('dist/assets/plugins/flot/jquery.flot.js'),
            array('dist/assets/plugins/flot/jquery.flot.resize.js'),
        );
        
        $this->carabiner->group('admin-chart', array('js' => $js["chart"]));
        
        $js["pages"] = array(array('demo/js/pages-profile.js'));
        $this->carabiner->group('admin-pages', array('js' => $js["pages"]));
        
        
        $this->data['view'] = 'users/profile';
        $this->load->view(ctTemplate('admin'), $this->data);
    }
    
}
