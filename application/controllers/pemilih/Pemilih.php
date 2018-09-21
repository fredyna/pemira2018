<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilih extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->ion_auth->logged_in()){
			redirect('login');
		}
		$this->load->model('m_calon');
		$this->load->model('suaraModel');
	}

	public function index()
	{
		$this->cekKahim();
		redirect('pemilih/pemilih/pilihKahim');
	}

	/*function cekPresma(){
		$user = $this->ion_auth->user()->row();
		$presma = $user->status_presma;
		if($presma==1){
			redirect('pemilih/pemilih/pilihKahim');
		}
	}

	function cekBackPresma(){
		$user = $this->ion_auth->user()->row();
		$presma = $user->status_presma;
		if($presma==0){
			redirect('pemilih/pemilih/pilihPresma');
		}
	}

	function pilihPresma(){
		$this->cekPresma();
		$data['title']	= 'Pemilih | Pemira KM PHB 2017';
		$data['presma'] = $this->m_calon->getCalonPresma(); 
		$this->load->view('pemilih/pilihPresma',$data);
	}*/

	function cekKahim(){
		$user = $this->ion_auth->user()->row();
		$kahim = $user->status_kahim;
		if($kahim==1){
			redirect('pemilih/pemilih/selesai');
		}
	}

	function pilihKahim(){
		$this->cekKahim();
		$data['user'] = $this->ion_auth->user()->row();
		$data['title']	= 'Pemilih | Pemira KM PHB 2017';
		if($data['user']->prodi == 'ind' || $data['user']->prodi == 'dkv' || $data['user']->prodi == 'tkj'){
			$data['kahim'] = $this->m_calon->getCalonKahimByProdi('te');
		} else {
			$data['kahim'] = $this->m_calon->getCalonKahimByProdi($data['user']->prodi);
		}
		$this->load->view('pemilih/pilihKahim',$data);
	}

	function selesai(){
		$user = $this->ion_auth->user()->row();
		$kahim = $user->status_kahim;
		if($kahim==1){
			$data['title']	= 'Pemilih | Pemira KM PHB 2017';
			$this->load->view('pemilih/selesai',$data);
		} else {
			redirect('pemilih/pemilih');			
		}
	}

	/*public function pilihanPresma($id=null){
		if($id==null){
			redirect('pemilih/pemilih');
		}

		$user = $this->ion_auth->user()->row();
		$presma = $user->status_presma;
		$data = array(
			'id_user' 	=> $user->id,
			'id_calon'	=> $id
		);
		if($presma==0){
			$data2 = array(
				'status_presma' => 1
			);

			$sql = $this->suaraModel->addSuaraPresma($data);
			if($sql){
				$this->ion_auth->update($user->id,$data2);
			}
			redirect('pemilih/pemilih/pilihKahim');
		} else{
			redirect('pemilih/pemilih/pilihKahim','refresh');
		}


	}*/

	public function pilihanKahim($id=null){
		if($id==null){
			redirect('pemilih/pemilih');
		}

		$user = $this->ion_auth->user()->row();
		$kahim = $user->status_kahim;
		$data = array(
			'id_user' 	=> $user->id,
			'id_calon'	=> $id
		);
		if($kahim==0){
			$data2 = array(
				'status_kahim' => 1
			);

			$sql = $this->suaraModel->addSuaraKahim($data);
			if($sql){
				$this->ion_auth->update($user->id,$data2);
			}
			redirect('pemilih/pemilih/selesai');
		} else{
			redirect('pemilih/pemilih','refresh');
		}


	}

	public function logout(){
		$user = $this->ion_auth->user()->row();
		if($user->status_kahim==1){
			if($this->ion_auth->logout()){
				redirect('home');
			} else{
				redirect('pemilih/pemilih');
			}
		} else{
			redirect('pemilih/pemilih');
		}
	}

}

/* End of file Pemilih.php */
/* Location: ./application/controllers/pemilih/Pemilih.php */