<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Jurusan extends MX_Controller {
	
	function index (){
		echo "Berikut adalah daftar jurusan di kampus STIKOM CKI ";
		$data['TI']= "Daftar Jurusan TI" ;
		$this->load->view('list_jurusanti',$data);	
	}

	function SI ($nama_jur=null) {
		$data['SI']= "Daftar Jurusan SI" .$nama_jur;
		$this->load->view('list_jurusansi',$data);	
	}
	
	function TI ($nama_jur=null) {
		$data['TI']= "Daftar Jurusan TI" .$nama_jur;
		$this->load->view('list_jurusanti',$data);	
	}
	
}