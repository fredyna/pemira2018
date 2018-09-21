<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suara extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		if(!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(1)){
			redirect('auth');
		}
		$this->load->model('suaraModel');
	}

	public function index()
	{
		
	}

	public function presma(){
		$data['user']	= $this->ion_auth->user()->row();
		$data['suara']	= $this->suaraModel->countPresma();
		$data['title']	= 'Admin | Suara Presma'; 
		$data['content']= 'admin/suara/suara_presma';
		$this->load->view('template',$data);
	}

	public function kahim(){
		$data['user']	= $this->ion_auth->user()->row();
		$data['suara_ti']	= $this->suaraModel->countKahim('ti');
		$data['suara_ak']	= $this->suaraModel->countKahim('ak');
		$data['suara_kb']	= $this->suaraModel->countKahim('kb');
		$data['suara_fm']	= $this->suaraModel->countKahim('fm');
		$data['suara_kom']	= $this->suaraModel->countKahim('kom');
		$data['suara_tm']	= $this->suaraModel->countKahim('tm');
		$data['suara_te']	= $this->suaraModel->countKahim('te');
		$data['title']	= 'Admin | Suara Kahim'; 
		$data['content']= 'admin/suara/suara_kahim';
		$this->load->view('template',$data);
	}

}

/* End of file Suara.php */
/* Location: ./application/controllers/admin/Suara.php */