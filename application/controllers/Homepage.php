<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends MY_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('pingler');
    }

	public function index()
	{
		$js_assets = array(
			array('plugins/morris/raphael.min.js'),
			array('plugins/morris/morris.js'),
			array('plugins/morris/morris-data.js'),
		);
		
		$this->carabiner->js( $js_assets );
		$this->data['view'] = 'homepage';
		$this->load->view('themes/template',$this->data);
	}
}
