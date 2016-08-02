<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard1 extends CI_Controller {

	 public function __construct() {
		 parent::__construct();
		 $this->load->model('m_transaksi');
	 }

	public function index()
	{
		$data = array('title' => 'Waarmeking','isi'=>'user/listdokumen');
		// $query=$this->m_transaksi->list_dokumen();
		// $data = array('title' => 'Dokumen','list'=>$query,'isi'=>'user/waarmeking' );
		$this->load->view('user/uv_home',$data);
	}

	public function transaksi(){
		$query=$this->m_transaksi->list_dokumen();
		$data = array('title' => 'Dokumen','list'=>$query,'isi'=>'user/listdokumen' );
		$this->load->view('user/uv_home', $data);
	}
}
