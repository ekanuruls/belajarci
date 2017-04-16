<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends MX_Controller {
	
	function index() {
		echo "ini index barang";
	}
	
	function elektronik ($type=null) {
		$data['title'] = "Daftar Barang Elektronik ".$type;
		$data['elektronik'] = array('handphone','televisi','radio','kulkas','ac','dispenser');
		$this->load->view('list_barang',$data);
	}
	
}