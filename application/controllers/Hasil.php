<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		$this->load->model('suaraModel');
	}

	public function index()
	{
		$data['suara_ti']	= $this->suaraModel->countKahim('ti');
		$data['suara_ak']	= $this->suaraModel->countKahim('ak');
		$data['suara_kb']	= $this->suaraModel->countKahim('kb');
		$data['suara_fm']	= $this->suaraModel->countKahim('fm');
		$data['suara_kom']	= $this->suaraModel->countKahim('kom');
		$data['suara_tm']	= $this->suaraModel->countKahim('tm');
		$data['suara_te']	= $this->suaraModel->countKahim('te');
		$data['title']	= 'Hasil Pemira 2017'; 
		$data['content']= 'pemilih/hasil';
		$this->load->view('template',$data);
	}


}

/* End of file Hasil.php */
/* Location: ./application/controllers/Hasil.php */