<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(1)){
			redirect('auth');
		}
		$this->load->library('form_validation');
	}

	public function index(){
		$data['user']		= $this->ion_auth->user()->row();
		$data['petugas']	= $this->ion_auth->users(2)->result();
		$data['title']		= 'Admin | Petugas';
		$data['content']	= 'admin/petugas/petugas';
		$data['no']			= 1;
		$this->load->view('template',$data);
	}

	function add_petugas(){
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('firstname', 'First Name', 'trim|required|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|min_length[1]|max_length[30]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');
		$this->form_validation->set_rules('r_password', 'Repeat Password', 'required|min_length[6]|max_length[15]|matches[password]');

		if($this->input->post('submit')){
			if ($this->form_validation->run() == TRUE) {
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$additional = array(
					'first_name'	=> $this->input->post('firstname'),
					'last_name'		=> $this->input->post('lastname')
					);
				$group = array('2');
				if($this->ion_auth->register($username,$password,null,$additional,$group)){
					$this->session->set_flashdata('info', 'Berhasil Tambah Data!');
					redirect('admin/petugas/add_petugas');
				}
				else{
					$this->session->set_flashdata('info', 'Gagal Tambah Data!');
					redirect('admin/petugas/add_petugas');
				}
			} 
		}

		$data['user']		= $this->ion_auth->user()->row();
		$data['title']		= 'Admin | Petugas';
		$data['content']	= 'admin/petugas/add_petugas';
		$this->load->view('template',$data);
	}

	function del_petugas($id=null){
		if($id==null){
			$this->session->set_flashdata('info', 'Delete Failed!');
			redirect('admin/petugas');
		}

		
		if($this->ion_auth->delete_user($id)){
			$this->session->set_flashdata('info', 'Delete Success!');
			redirect('admin/petugas');
		}
		else{
			$this->session->set_flashdata('info', 'Delete Failed!');
			redirect('admin/petugas');
		}	
	}

	function edit_petugas($id=null){
		if($id==null){
			$this->session->set_flashdata('info', 'Update Failed!');
			redirect('admin/petugas/');
		}

		$users_group = $this->ion_auth->in_group(2,$id);
		if($users_group){
			$data['user']		= $this->ion_auth->user()->row();
			$data['petugas']	= $this->ion_auth->user($id)->row();
			$data['title']		= 'Admin | Petugas';
			$data['content']	= 'admin/petugas/edit_petugas';
			$this->load->view('template',$data);
		}
		else{
			$this->session->set_flashdata('info', 'Update Failed!');
			redirect('admin/petugas/');
		}		
	}

	function change_data($id=null){
		if($id==null){
			$this->session->set_flashdata('info', 'Update Failed!');
			redirect('admin/petugas/edit_petugas');
		}

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('firstname', 'First Name', 'required|min_length[3]|max_length[25]');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required|min_length[1]|max_length[25]');
		if ($this->form_validation->run() == TRUE) {

			$data = array(
				'username'		=> $this->input->post('username'),
				'first_name'	=> $this->input->post('firstname'),
				'last_name'		=> $this->input->post('lastname')
				);
			if($this->ion_auth->update($id,$data)){
				$this->session->set_flashdata('info', 'Update Data Berhasil!');
				redirect('admin/petugas');
			}
			else{
				$this->session->set_flashdata('info', 'Update Data Gagal!');
				redirect('admin/petugas');
			}

		} else {
			$data['user']		= $this->ion_auth->user()->row();
			$data['petugas']	= $this->ion_auth->user($id)->row();
			$data['title']		= 'Admin | Petugas';
			$data['content']	= 'admin/petugas/edit_petugas';
			$this->load->view('template',$data);
		}
		
	}

	function change_password($id=null){

		if($id==null){
			$this->session->set_flashdata('info', 'Update Failed!');
			redirect('admin/petugas/edit_petugas');
		}

		$this->form_validation->set_rules('new_password', 'New Password', 'required|min_length[6]|max_length[15]');
		$this->form_validation->set_rules('r_password', 'Repeat Password', 'required|min_length[6]|max_length[25]|matches[new_password]');
		if ($this->form_validation->run() == TRUE) {

			$data = array(
				'password'		=> $this->input->post('new_password')
				);
			if($this->ion_auth->update($id,$data)){
				$this->session->set_flashdata('info-password', 'Update Data Berhasil!');
				redirect('admin/petugas/edit_petugas/'.$id);
			}
			else{
				$this->session->set_flashdata('info-password', 'Update Data Gagal!');
				redirect('admin/petugas/edit_petugas/'.$id);
			}

		} else {
			$data['user']		= $this->ion_auth->user()->row();
			$data['petugas']	= $this->ion_auth->user($id)->row();
			$data['title']		= 'Admin | Petugas';
			$data['content']	= 'admin/petugas/edit_petugas';
			$this->load->view('template',$data);
		}
		
	}

	function aktifkan($id=null){
		if($id==null){
			$this->session->set_flashdata('info', 'Gagal!');
			redirect('admin/petugas');
		}

		$user = $this->ion_auth->user($id)->row();
		$data = array(
			'active' => 1
		);

		if($user->active==1){
			$data = array(
				'active' => 0
			);
		}
		
		$sql = $this->ion_auth->update($id,$data);
		if($sql){
			redirect('admin/petugas');
		}
		else{
			redirect('admin/petugas');
		}

	}
}

/* End of file Petugas.php */
/* Location: ./application/controllers/admin/Petugas.php */