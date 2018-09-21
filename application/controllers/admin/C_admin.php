<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		if(!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(1)){
			redirect('auth');
		}
	}

	public function index()
	{
		$data['user']	= $this->ion_auth->user()->row();
		$data['title']	= 'Admin | Dashboard'; 
		$data['content']= 'admin/umum/dashboard';
		$this->load->view('template',$data);
	}
	
	function login(){
		redirect('auth');
	}

	function settings(){
		$data['user']		= $this->ion_auth->user()->row();
		$data['title']		= 'Admin | Settings';
		$data['content']	= 'admin/umum/settings';
		$this->load->view('template',$data);
	}	

	function change_data($id=null){
		if($id==null){
			$this->session->set_flashdata('info', 'Update Failed!');
			redirect('admin/c_admin/setting');
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
				redirect('admin/c_admin/settings');
			}
			else{
				$this->session->set_flashdata('info-data', 'Update Data Gagal!');
				redirect('admin/c_admin/settings');
			}

		} else {
			$data['user']		= $this->ion_auth->user()->row();
			$data['title']		= 'Admin | Settings';
			$data['content']	= 'admin/umum/settings';
			$this->load->view('template',$data);
		}
		
	}

	function change_password($id=null){

		if($id==null){
			$this->session->set_flashdata('info', 'Update Failed!');
			redirect('admin/c_admin/settings');
		}

		$this->form_validation->set_rules('new_password', 'New Password', 'required|min_length[6]|max_length[15]');
		$this->form_validation->set_rules('r_password', 'Repeat Password', 'required|min_length[6]|max_length[25]|matches[new_password]');
		if ($this->form_validation->run() == TRUE) {

			$data = array(
				'password'		=> $this->input->post('new_password')
				);
			if($this->ion_auth->update($id,$data)){
				$this->session->set_flashdata('info-password', 'Update Data Berhasil!');
				redirect('admin/c_admin/settings');
			}
			else{
				$this->session->set_flashdata('info-password', 'Update Data Gagal!');
				redirect('admin/c_admin/settings');
			}

		} else {
			$data['user']		= $this->ion_auth->user()->row();
			$data['title']		= 'Admin | Settings';
			$data['content']	= 'admin/umum/settings';
			$this->load->view('template',$data);
		}
		
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/admin/Admin.php */

?>