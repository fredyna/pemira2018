<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilih extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(1) && !$this->ion_auth->in_group(2)){
			redirect('auth');
		}
		$this->load->library('form_validation');
		$this->load->model('m_admin');
	}

	public function index($prodi='ti')
	{
		$data['user']		= $this->ion_auth->user()->row();
		$data['group']		= $this->ion_auth->get_users_groups($data['user']->id)->row();
		$data['title']		= 'Admin | Pemilih'; 
		$data['content']	= 'admin/pemilih/pemilih';
		$data['prodi']		= $prodi;
		$data['nama_prodi']	= $this->getNamaProdi($prodi);

		if($prodi != 'te'){
			$data['kelas'] = array('A','B','C','D','E','F','G','H','I','J',
								'K','L','M','N','O','P','Q','R','S','T',
								'U','V','W','X','Y','Z');
			$data['jumlah'] = $this->m_admin->getKelas($prodi)->result();
		}

		$this->load->view('template',$data);
	}

	public function daftarPemilih($prodi=null,$smt=null,$kelas=null)
	{
		if($prodi==null||$smt==null||$kelas==null){
			$this->session->set_flashdata('info-umum', 'Pilihan Gagal! Silahkan Ulangi Kembali!');
			redirect('admin/pemilih/index/'.$prodi);
		}

		$param = array(
				'prodi' => $prodi,
				'kelas' => strtolower($kelas),
				'smt'	=> $smt
			);
		$data['pemilih'] 	= $this->m_admin->getPemilih($param);
		$data['user']		= $this->ion_auth->user()->row();
		$data['group']		= $this->ion_auth->get_users_groups($data['user']->id)->row();
		$data['no']			= 1;
		$data['prodi']		= $prodi;
		$data['nama_prodi']	= $this->getNamaProdi($prodi);
		$data['kelas'] 		= $kelas;
		$data['smt']		= $smt;
		$data['title']		= 'Admin | Pemilih';
		$data['content'] 	= 'admin/pemilih/pemilih_per_kelas';
		$this->load->view('template',$data);
	}

	public function addKelas($prodi=null){
		$jml = $this->input->post('jumlah');
		if($prodi==null || $jml==null){
			$this->session->set_flashdata('info', 'Update Jumlah Failed!');
			redirect('admin/pemilih/index/'.$prodi,'refresh');
		}

		$data = array(
				'id_prodi' => $prodi,
				'smt'	=> $this->input->post('smt'),
				'jumlah' => $jml
			);
		$query1 = $this->m_admin->getKelas($data['id_prodi'],$data['smt'])->row();
		if($query1){
			if($this->m_admin->updateKelas($data)){
				$this->session->set_flashdata('info', 'Update Jumlah Success!');
				redirect('admin/pemilih/index/'.$prodi,'refresh');
			}else{
				$this->session->set_flashdata('info', 'Update Jumlah Failed!');
				redirect('admin/pemilih/index/'.$prodi,'refresh');
			}
		}else{
			if($this->m_admin->addKelas($data)){
				$this->session->set_flashdata('info', 'Update Jumlah Success!');
				redirect('admin/pemilih/index/'.$prodi,'refresh');
			}else{
				$this->session->set_flashdata('info', 'Update Jumlah Failed!');
				redirect('admin/pemilih/index/'.$prodi,'refresh');
			}
		}
		
	}

	public function add_pemilih($prodi='ti',$smt=null,$kelas=null){
		if($prodi==null||$smt==null||$kelas==null){
			$this->session->set_flashdata('info-umum', 'Pilihan Gagal! Silahkan Ulangi Kembali!');
			redirect('admin/pemilih/index/'.$prodi);
		}		

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
					'last_name'		=> $this->input->post('lastname'),
					'smt'			=> $smt,
					'kelas'			=> $kelas,
					'prodi'			=> $prodi
					);
				$group = array('3');
				if($this->ion_auth->register($username,$password,null,$additional,$group)){
					$this->session->set_flashdata('info', 'Berhasil Tambah Data!');
					redirect('admin/pemilih/add_pemilih/'.$prodi.'/'.$smt.'/'.$kelas);
				}
				else{
					$this->session->set_flashdata('info', 'Gagal Tambah Data!');
					redirect('admin/pemilih/add_pemilih/'.$prodi.'/'.$smt.'/'.$kelas);
				}
			} 
		}
		
		$data['user']		= $this->ion_auth->user()->row();
		$data['group']		= $this->ion_auth->get_users_groups($data['user']->id)->row();
		$data['title']		= 'Admin | Pemilih';
		$data['prodi']		= $prodi;
		$data['nama_prodi']	= $this->getNamaProdi($prodi);
		$data['kelas']		= $kelas;
		$data['smt']		= $smt;
		$data['content']	= 'admin/pemilih/add_pemilih';
		$this->load->view('template',$data);
	}

	function edit_pemilih($id=null,$prodi='ti',$smt=null,$kelas=null){
		if($id==null||$prodi==null||$smt==null||$kelas==null){
			$this->session->set_flashdata('info-umum', 'Pilihan Gagal! Silahkan Ulangi Kembali');
			redirect('admin/pemilih/index/'.$prodi);
		}

		$users_group = $this->ion_auth->in_group(3,$id);
		if($users_group){
			$data['user']		= $this->ion_auth->user()->row();
			$data['group']	= $this->ion_auth->get_users_groups($data['user']->id)->row();
			$data['pemilih']	= $this->ion_auth->user($id)->row();
			$data['title']		= 'Admin | Pemilih';
			$data['prodi']		= $prodi;
			$data['nama_prodi']	= $this->getNamaProdi($prodi);
			$data['kelas']		= $kelas;
			$data['smt']		= $smt;
			$data['content']	= 'admin/pemilih/edit_pemilih';
			$this->load->view('template',$data);
		}
		else{
			$this->session->set_flashdata('info', 'Update Failed!');
			redirect('admin/pemilih/edit_pemilih/'.$id.'/'.$prodi.'/'.$smt.'/'.$kelas);
		}
	}

	function change_data($id=null,$prodi='ti',$smt=null,$kelas=null){
		if($id==null||$prodi==null||$smt==null||$kelas==null){
			$this->session->set_flashdata('info', 'Update Failed!');
			redirect('admin/pemilih/index/'.$prodi);
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
				redirect('admin/pemilih/edit_pemilih/'.$id.'/'.$prodi.'/'.$smt.'/'.$kelas);
			}
			else{
				$this->session->set_flashdata('info', 'Update Data Gagal!');
				redirect('admin/pemilih/edit_pemilih/'.$id.'/'.$prodi.'/'.$smt.'/'.$kelas);
			}

		} else {
			$data['user']		= $this->ion_auth->user()->row();
			$data['group']	= $this->ion_auth->get_users_groups($data['user']->id)->row();
			$data['pemilih']	= $this->ion_auth->user($id)->row();
			$data['title']		= 'Admin | Pemilih';
			$data['prodi']		= $prodi;
			$data['nama_prodi']	= $this->getNamaProdi($prodi);
			$data['kelas']		= $kelas;
			$data['smt']		= $smt;
			$data['content']	= 'admin/pemilih/edit_pemilih';
			$this->load->view('template',$data);
		}
		
	}

	function change_password($id=null,$prodi='ti',$smt=null,$kelas=null){
		if($id==null||$prodi==null||$smt==null||$kelas==null){
			$this->session->set_flashdata('info', 'Update Failed!');
			redirect('admin/pemilih/index/'.$prodi);
		}

		$this->form_validation->set_rules('new_password', 'New Password', 'required|min_length[6]|max_length[15]');
		$this->form_validation->set_rules('r_password', 'Repeat Password', 'required|min_length[6]|max_length[25]|matches[new_password]');
		if ($this->form_validation->run() == TRUE) {

			$data = array(
				'password'		=> $this->input->post('new_password')
				);
			if($this->ion_auth->update($id,$data)){
				$this->session->set_flashdata('info-password', 'Update Password Berhasil!');
				redirect('admin/pemilih/edit_pemilih/'.$id.'/'.$prodi.'/'.$smt.'/'.$kelas);
			}
			else{
				$this->session->set_flashdata('info-password', 'Update Password Gagal!');
				redirect('admin/pemilih/edit_pemilih/'.$id.'/'.$prodi.'/'.$smt.'/'.$kelas);
			}

		} else {
			$data['user']		= $this->ion_auth->user()->row();
			$data['group']	= $this->ion_auth->get_users_groups($data['user']->id)->row();
			$data['pemilih']	= $this->ion_auth->user($id)->row();
			$data['title']		= 'Admin | Pemilih';
			$data['prodi']		= $prodi;
			$data['nama_prodi']	= $this->getNamaProdi($prodi);
			$data['kelas']		= $kelas;
			$data['smt']		= $smt;
			$data['content']	= 'admin/pemilih/edit_pemilih';
			$this->load->view('template',$data);
		}
		
	}

	function del_pemilih($id=null,$prodi='ti',$smt=null,$kelas=null){
		if($id==null||$prodi==null||$smt==null||$kelas==null){
			$this->session->set_flashdata('info', 'Delete Failed!');
			redirect('admin/pemilih/index/'.$prodi);
		}

		if($this->ion_auth->delete_user($id)){
			$this->session->set_flashdata('info', 'Delete Success!');
			redirect('admin/pemilih/daftarPemilih/'.$prodi.'/'.$smt.'/'.$kelas);
		}
		else{
			$this->session->set_flashdata('info', 'Delete Failed!');
			redirect('admin/pemilih/daftarPemilih/'.$prodi.'/'.$smt.'/'.$kelas);
		}	
	}

	public function lock($id=null,$prodi='ti',$smt=null,$kelas=null){
		if($id==null||$prodi==null||$smt==null||$kelas==null){
			$this->session->set_flashdata('info-umum', 'Pilihan Gagal! Silahkan Ulangi Kembali');
			redirect('admin/pemilih/index/'.$prodi);
		}

		$user = $this->ion_auth->user()->row();
		$data = array(
			'active' => 0,
			'lock_by' => $user->username
			);
		if($this->m_admin->updateLock($id,$data)){
			$this->session->set_flashdata('info', 'Lock Success!');
			redirect('admin/pemilih/daftarPemilih/'.$prodi.'/'.$smt.'/'.$kelas);
		} else{
			$this->session->set_flashdata('info', 'Lock Failed!');
			redirect('admin/pemilih/daftarPemilih/'.$prodi.'/'.$smt.'/'.$kelas);
		}
	}

	public function unlock($id=null,$prodi='ti',$smt=null,$kelas=null){
		if($id==null||$prodi==null||$smt==null||$kelas==null){
			$this->session->set_flashdata('info-umum', 'Pilihan Gagal! Silahkan Ulangi Kembali');
			redirect('admin/pemilih/index/'.$prodi);
		}
		$user = $this->ion_auth->user()->row();
		$data = array(
			'active' => 1,
			'unlock_by' => $user->username
			);
		if($this->m_admin->updateLock($id,$data)){
			$this->session->set_flashdata('info', 'Unlock Success!');
			redirect('admin/pemilih/daftarPemilih/'.$prodi.'/'.$smt.'/'.$kelas);
		} else{
			$this->session->set_flashdata('info', 'Unlock Failed!');
			redirect('admin/pemilih/daftarPemilih/'.$prodi.'/'.$smt.'/'.$kelas);
		}
	}

	public function lockAll($prodi='ti',$smt=null,$kelas=null){
		if($prodi==null||$smt==null||$kelas==null){
			$this->session->set_flashdata('info', 'Gagal! Silahkan Ulangi Kembali');
			redirect('admin/pemilih/index/'.$prodi);
		}

		$user = $this->ion_auth->user()->row();
		$data = array(
			'active' => 0,
			'lock_by' => $user->username
			);
		if($this->m_admin->updateLockAll($prodi,$smt,$kelas,$data)){
			$this->session->set_flashdata('info', 'Lock All Success!');
			redirect('admin/pemilih/daftarPemilih/'.$prodi.'/'.$smt.'/'.$kelas);
		} else{
			$this->session->set_flashdata('info', 'Lock All Failed!');
			redirect('admin/pemilih/daftarPemilih/'.$prodi.'/'.$smt.'/'.$kelas);
		}
	}

	public function unlockAll($prodi='ti',$smt=null,$kelas=null){
		if($prodi==null||$smt==null||$kelas==null){
			$this->session->set_flashdata('info', 'Gagal! Silahkan Ulangi Kembali');
			redirect('admin/pemilih/index/'.$prodi);
		}
		
		$user = $this->ion_auth->user()->row();
		$data = array(
			'active' => 1,
			'unlock_by' => $user->username
			);
		if($this->m_admin->updateLockAll($prodi,$smt,$kelas,$data)){
			$this->session->set_flashdata('info', 'Unlock All Success!');
			redirect('admin/pemilih/daftarPemilih/'.$prodi.'/'.$smt.'/'.$kelas);
		} else{
			$this->session->set_flashdata('info', 'Unlock All Failed!');
			redirect('admin/pemilih/daftarPemilih/'.$prodi.'/'.$smt.'/'.$kelas);
		}
	}

	public function getNamaProdi($prodi)
	{
		switch($prodi){
			case 'ti':
				return 'D4 Teknik Informatika';
				break;
			case 'ak':
				return 'D3 Akuntansi';
				break;
			case 'kb':
				return 'D3 Kebidanan';
				break;
			case 'fm':
				return 'D3 Farmasi';
				break;
			case 'kom':
				return 'D3 Teknik Komputer';
				break;
			case 'tm':
				return 'D3 Teknik Mesin';
				break;
			case 'te':
				return 'D3 Teknik Elektro';
				break;
			case 'ind':
				return 'D3 Teknik Elektro - Industri';
				break;
			case 'dkv':
				return 'D3 Teknik Elektro - DKV';
				break;
			case 'tkj':
				return 'D3 Teknik Elektro - TKJ';
				break;
		}
	}

}

/* End of file Pemilih.php */
/* Location: ./application/controllers/admin/Pemilih.php */