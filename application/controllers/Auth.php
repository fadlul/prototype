<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->load->helper(array('url', 'form'));
        $this->load->model('m_user'); //call model
        if(!empty($_SESSION['iduser']))
            redirect('dasboard1');  
    }

    public function index() {
        // $this->load->helper(array('security'));
        $this->load->database();
        $this->load->view('v_login');
    }
    
    public function register()
    {
        $this->form_validation->set_rules('name', 'NAME', 'required');
        $this->form_validation->set_rules('username', 'USERNAME', 'required');
        $this->form_validation->set_rules('email', 'EMAIL', 'required|valid_email');
        $this->form_validation->set_rules('address', 'ADDRESS', 'required');
        $this->form_validation->set_rules('handphone', 'HANDPHONE', 'required|numeric|min_length[7]|max_length[12]');
        $this->form_validation->set_rules('password', 'PASSWORD', 'required');
        $this->form_validation->set_rules('password_conf', 'PASSWORD', 'required|matches[password]');
        
        if ($this->form_validation->run() == FALSE) {
            // redirect('home/register');
            $data_reg = array('title' => 'Sign Up');
            $this->load->view('v_register', $data_reg);
        } else {
            $data['name'] = $this->input->post('name');
            $data['username'] = $this->input->post('username');
            $data['email'] = $this->input->post('email');
            $data['address'] = $this->input->post('address');
            $data['phone'] = $this->input->post('handphone');
            $data['password'] = $this->input->post('password');
            $data['userrule'] = $this->input->post('typeuser');
            $data['tglinput']= (string)date('Y-m-d');
            if (isset($_POST['typeuser'])) {
                $data['idrule']="2";
            }else{
                $data['idrule']="1";
            }
            $this->m_user->registerUser($data);
            redirect('home');
            // $data_home = array('title' => 'Sign Up', 'isi' => 'home/index_home');
            // $this->load->view('layout/wrapper', $data_home);
        }
        // $data=array('title' => 'Sign Up');
        // $this->load->view('v_register',$data);
    }

	public function login()
	{
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $valid = $this->form_validation;
        $valid->set_rules('username', 'Username', 'required');
        $valid->set_rules('password', 'Password', 'required');
        if ($valid->run()) {
            $this->l_login->login($username, $password);
        }
        redirect('auth');
	}
        
    public function logout()
	{
        // $data = ['iduser', 'username',];
        // $this->session->unset_userdata($data);
        // redirect('auth');
        $this->l_login->logout();
	}
}
