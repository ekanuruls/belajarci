<?php 

 class Mahasiswa_model extends CI_Model{
	 
	 function getListMahasiswa() {
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$query = $this->db->get();
		return $query->result_array(); 
	 }
 }
?>