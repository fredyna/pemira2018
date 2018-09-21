<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		if($this->ion_auth->logged_in()){
			$this->cek_group();
		}
		else{
			$data['title'] = 'Login Pemira';
			$data['head'] = 'Login Pemira';
			$this->load->view('login',$data);
		}
		
	}

	function login(){
		if($this->ion_auth->logged_in()){
			$this->cek_group();
		}
		else{
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if ($this->form_validation->run() == TRUE) {
				if($this->ion_auth->login($username,$password,false)){
					$this->cek_group();
				}
				else{
					$this->session->set_flashdata('info', 'Username atau Password Salah!');
					redirect('auth');
				}
			} else {
				$data['title'] = 'Login Pemira';
				$data['head'] = 'Login Pemira';
				$this->load->view('login',$data);
			}
			
		}
	}

	function cek_group(){
		if($this->ion_auth->in_group(1)){
			redirect('admin/c_admin');
		}
		else if($this->ion_auth->in_group(2)){
			redirect('petugas/home');
		} else if($this->ion_auth->in_group(3)){
			redirect('pemilih/pemilih');
		}
		else{
			$this->ion_auth->logout();
			$this->session->set_flashdata('info', 'Username atau Password Salah!');
			redirect('auth');
		}
	}

	function logout(){
		if($this->ion_auth->logout()){
			redirect('auth');
		}
		else{
			$this->session->set_flashdata('info', 'Anda Belum Logout');
		}
	}	

}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */