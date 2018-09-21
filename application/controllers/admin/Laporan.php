<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(1)){
			redirect('auth');
		}
		$this->load->library('form_validation');
		$this->load->model('m_admin');
		$this->load->model('suaraModel');
	}

	public function index()
	{
		$data['suara_presma']	= $this->suaraModel->countPresma();
		$data['suara_ti']		= $this->suaraModel->countKahim('ti');
		$data['suara_ak']		= $this->suaraModel->countKahim('ak');
		$data['suara_kb']		= $this->suaraModel->countKahim('kb');
		$data['suara_fm']		= $this->suaraModel->countKahim('fm');
		$data['suara_kom']		= $this->suaraModel->countKahim('kom');
		$data['suara_tm']		= $this->suaraModel->countKahim('tm');
		$data['suara_te']		= $this->suaraModel->countKahim('te');

		//$this->load->view('admin/cetak_hasil_pemira',$data);
		$html	= $this->load->view('admin/laporan/cetak_hasil_pemira',$data,TRUE);
		$this->load->library('pdf');
		$nama = 'laporan_pemira_2017.pdf';

		$this->pdf->create($html, $nama);
	}
}

/* End of file Pemilih.php */
/* Location: ./application/controllers/admin/Pemilih.php */

?>