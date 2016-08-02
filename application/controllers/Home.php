<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->l_login->cek_login();
    }
	public function index()
	{
		$data=array('title' => 'Personal Assistant');
		$this->load->view('v_index',$data);
	}

}