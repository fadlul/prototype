<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard1 extends CI_Controller {

	 public function __construct() {
		 parent::__construct();
		 $this->load->model('m_transaksi');
	 }

	public function index()
	{


		// $data = array('title' =>'Home','isi'=>'user/uv_listdokumen');
		// $query=$this->m_transaksi->list_dokumen();
		// $data = array('title' => 'Dokumen','list'=>$query,'isi'=>'user/waarmeking' );

		$iduser=$_SESSION['id'];
		$query=$this->m_transaksi->list_dokumen($iduser);
		$data = array('title' => 'Dokumen','list'=>$query,'isi'=>'user/uv_listdokumen' );
		$this->load->view('user/uv_home',$data);
	}

	public function listdokumen(){
		if (!empty($_SESSION['id'])) {
			# code...
			$iduser=$_SESSION['id'];
			$query=$this->m_transaksi->list_dokumen($iduser);
			$data = array('title' => 'Dokumen','list'=>$query,'isi'=>'user/uv_listdokumen' );
			$this->load->view('user/uv_home', $data);
		}else{
			redirect('auth','refresh');
		}
		
	}

	public function newdokumen(){
		if (!empty($_SESSION['id'])) {

			$this->load->library('upload');
			$nmfile = $_SESSION['username']."file_".time();
			$config['upload_path'] = './assets/uploads/'; //path folder
	        $config['allowed_types'] = 'pdf|gif|jpg|png|jpeg|bmp|docs|rar'; //type yang dapat diakses bisa anda sesuaikan
	        $config['max_size'] = '2048'; //maksimum besar file 2M
	        $config['max_width']  = '1288'; //lebar maksimum 1288 px
	        $config['max_height']  = '768'; //tinggi maksimu 768 px
	        $config['file_name'] = $nmfile;

            $this->load->library('upload', $config);

            $this->form_validation->set_rules('name', 'NAME', 'required');
            $this->form_validation->set_rules('subject', 'subject', 'required');

             if ($this->form_validation->run() == FALSE OR !$this->upload->do_upload('dokumen1')) {
	            $data = array('title' => 'New Dokumen','isi'=>'user/uv_newdokumen' );
				$this->load->view('user/uv_home',$data);
				// redirect('dashboard1/newdokumen');
	        }else{
	        	$data['name'] = $this->input->post('name');
	        	$data['keterangan']=$this->input->post('subject');

	        	$jumlahfile=$this->input->post('jumdokumen');
	   //      	if ( ! $this->upload->do_upload('dokumen1')){
				// 	$data_up = array('pesan' => $this->upload->display_errors(),'title' => 'New Dokumen','isi'=>'user/uv_newdokumen');
				// 	$this->load->view('user/uv_home', $data_up);
				// }else{
				// 	$data_up = array('pesan' => $this->upload->data());
				// 	$this->load->view('user/uv_home', $data_up);
				// }
	            for ($i=0; $i < $jumfoto; $i++) { 
	            	$dokumen="dokumen".$i;
	            	if($_FILES['dokumen'.$i]['name'])
			        {
			            if ($this->upload->do_upload($dokumen))
			            {
			                $gbr = $this->upload->data();
			                $data = array(
			                  'title' =>$gbr['file_name'],
			                  'tipe_gbr' =>$gbr['file_type'],
			                  'ket_gbr' =>$this->input->post('textket')
			                   
			                );
			 
			                $this->mupload->get_insert($data); //akses model untuk menyimpan ke database
			                //pesan yang muncul jika berhasil diupload pada session flashdata
			                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
			                redirect('upload'); //jika berhasil maka akan ditampilkan view vupload
			            }else{
			                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
			                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
			                redirect('upload/add'); //jika gagal maka akan ditampilkan form upload
			            }
			        }
	            }
	             
	        }
			// $data = array('title' => 'New Dokumen','isi'=>'user/uv_newdokumen' );
			// $this->load->view('user/uv_home',$data);
		}else{
			redirect('auth','refresh');
		}
		
	}
}
