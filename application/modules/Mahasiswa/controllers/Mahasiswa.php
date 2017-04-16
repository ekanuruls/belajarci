<?php
defined('BASEPATH') OR exit ('NO direct script access allowed');

class Mahasiswa extends MX_Controller {
    
	function __construct(){
		parent::__construct();
		$this->load->model(array("Mahasiswa_model"=>"m_mahasiswa"));
	}
    function index(){
		$data['list_mahasiswa'] = $this->m_mahasiswa->getListMahasiswa();
        $this->load->view("mView",$data);
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
		$data['siswa']= array(
			'nama' => 'Song jongki',
			'ttl' => 'Korsel,09-09-1879',
			'alamat' => 'Korsel',
			'telepon' => '087654321',
			'email' => 'song@gmail.com'
		);
		$this->load->view('edit_view',$data);
	}
    
}


