<?php
class M_transaksi extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function list_dokumen($read=FALSE){
		if ($read=FALSE) {
			$query=$this->db->query('SELECT t.iduser,t.title,t.status,t.tglselesai FROM transaction as t,users as u WHERE t.iduser=u.iduser');
			$row=$query->result_array();
		// 	return $query->result_array();
		}else{		
			$query = $this->db->get_where('transaction', array('title' => $read));
		}
		// var_dump();
		// die();
		return $query->result_array();
	}
}