<?php
defined('BASEPATH') OR exit ('NO direct script access allowed');

class Mahasiswa extends MX_Controller {
    
	function __construct(){
		parent::__construct();
		$this->load->model("Mahasiswa_model","MM");
	}
    function index(){
       $this->load->view("mView");
    }
    
    function daftar_mahasiswa ($nama=null) {
		$data['mahasiswa'] = "List Daftar Mahasiswa ".$nama;
		$data['daftar_mahasiswa'] = array('Ariel','Tatum','Rizky','Abdur','Rahman','Palkam');
		$this->load->view('list_mahasiswa',$data);
	}
        
    function add (){
        $this->load->view("add_view");
        
    }   
	
	function edit(){
		$data = array(
			'nama' => 'Song jongki',
			'ttl' => 'Korsel,09-09-1879',
			'alamat' => 'Korsel',
			'telepon' => '087654321',
			'email' => 'song@gmail.com'
		);
		$this->load->view('edit_view',$data);
		
	}
	/*function save(){
		$data = array(
			"nama"=>$this->input->post("nama"),
			"ttl"=>$this->input->post("ttl"),
			"alamat"=>$this->input->post("alamat"),
			"telepon"=>$this->input->post("telepon"),
			"email"=>$this->input->post("email")
		);
		$this->MM->SaveOnDataToArray($data);
	}*/
    
}


