<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_petugas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(2)){
			redirect('auth');
		}
		$this->load->library('form_validation');
	}

	public function index()
	{
		
	}

	public function settings(){
		$data['user']		= $this->ion_auth->user()->row();
		$data['title']		= 'Petugas | Settings';
		$data['content']	= 'petugas/settings';
		$this->load->view('template',$data);
	}

	function change_data($id=null){
		if($id==null){
			$this->session->set_flashdata('info', 'Update Failed!');
			redirect('petugas/c_petugas/settings');
		}

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('firstname', 'First Name', 'required|min_length[3]|max_length[25]');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required|min_length[3]|max_length[25]');
		if ($this->form_validation->run() == TRUE) {

			$data = array(
				'username'		=> $this->input->post('username'),
				'first_name'	=> $this->input->post('firstname'),
				'last_name'		=> $this->input->post('lastname')
				);
			if($this->ion_auth->update($id,$data)){
				$this->session->set_flashdata('info-data', 'Update Data Berhasil!');
				redirect('petugas/c_petugas/settings');
			}
			else{
				$this->session->set_flashdata('info-data', 'Update Data Gagal!');
				redirect('petugas/c_petugas/settings');
			}

		} else {
			$data['user']		= $this->ion_auth->user()->row();
			$data['title']		= 'Petugas | Settings';
			$data['content']	= 'petugas/settings';
			$this->load->view('template',$data);
		}
		
	}

	function change_password($id=null){

		if($id==null){
			$this->session->set_flashdata('info', 'Update Failed!');
			redirect('petugas/c_admin/settings');
		}

		$this->form_validation->set_rules('new_password', 'New Password', 'required|min_length[6]|max_length[15]');
		$this->form_validation->set_rules('r_password', 'Repeat Password', 'required|min_length[6]|max_length[25]|matches[new_password]');
		if ($this->form_validation->run() == TRUE) {

			$data = array(
				'password'		=> $this->input->post('new_password')
				);
			if($this->ion_auth->update($id,$data)){
				$this->session->set_flashdata('info-password', 'Update Password Berhasil!');
				redirect('petugas/c_petugas/settings');
			}
			else{
				$this->session->set_flashdata('info-password', 'Update Password Gagal!');
				redirect('petugas/c_petugas/settings');
			}

		} else {
			$data['user']		= $this->ion_auth->user()->row();
			$data['title']		= 'Petugas | Settings';
			$data['content']	= 'petugas/settings';
			$this->load->view('template',$data);
		}
		
	}

}

/* End of file C_petugas.php */
/* Location: ./application/controllers/petugas/C_petugas.php */