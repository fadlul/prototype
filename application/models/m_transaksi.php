<?php
class M_transaksi extends CI_Model{

	var $tabel = 'tb_uploadimage'; //buat variabel tabel
	public function __construct(){
		$this->load->database();
	}

	public function list_dokumen($iduser){
		// $read=FALSE;
		// if ($read=FALSE) {
			$query=$this->db->query("SELECT iduser,keterangan,title,status,tglselesai FROM transaction WHERE iduser='" . $iduser . "'");
			$row=$query->result_array();
		// 	return $query->result_array();
		// }else{		
		// 	$query = $this->db->get_where('transaction', array('title' => $read));
		// }
		// var_dump($row);
		// die();
		return $query->result_array();
	}
 
    //fungsi untuk menampilkan semua data dari tabel database
    function get_allimage() {
        $this->db->from($this->tabel);
        $query = $this->db->get();
 
        //cek apakah ada data
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

 	//fungsi insert ke database
    function get_insert($data){
       $this->db->insert($this->tabel, $data);
       return TRUE;
    }
}