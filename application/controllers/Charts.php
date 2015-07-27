<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charts extends MY_Controller {

	public function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$js_assets = array(
			array('plugins/morris/raphael.min.js'),
			array('plugins/morris/morris.min.js'),
			array('plugins/morris/morris-data.js'),
			array('plugins/flot/jquery.flot.js'),
			array('plugins/flot/jquery.flot.tooltip.min.js'),
			array('plugins/flot/jquery.flot.resize.js'),
			array('plugins/flot/jquery.flot.pie.js'),
			array('plugins/flot/flot-data.js'),
		);
		
		$this->carabiner->js( $js_assets );
		
	
		$this->data['view'] = 'view_charts'; 
		$this->load->view('themes/template',$this->data);
	}
}
