<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	
	public $data;

	public function __construct() {
        parent::__construct();
		
        $this->load->helper('pingler');
        $this->load->library('carabiner');
        $this->load->library('parser');
		
		$carabiner_config = array(
			'script_dir' => 'assets/js/', 
			'style_dir'  => 'assets/css/',
			'cache_dir'  => 'assets/cache/',
			//'base_uri'	 => base_url(),//'/codeigniter-carabiner/',
			'base_uri'	 => '/codeigniter-carabiner/',
			'combine'	 => FALSE,
			'dev' 		 => FALSE,
			'minify_js'  => TRUE,
			'minify_css' => TRUE
		);
		
		$this->carabiner->config($carabiner_config);
		
		$css_assets_global = array(
			array('bootstrap.min.css'),
			array( 'sb-admin.css'),
			array( 'plugins/morris.css'),
			array('font-awesome/css/font-awesome.min.css'),
		);
		
		$this->carabiner->css( $css_assets_global );
		$js_assets_global = array(
			array('jquery.js'),
			array( 'bootstrap.min.js')
		);
		
		$this->carabiner->js( $js_assets_global );
		
		
		
		
    }

	
}
