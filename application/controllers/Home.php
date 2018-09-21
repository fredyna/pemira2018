<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->ion_auth->logged_in()){
			redirect('auth','refresh');
		}
	}
	public function index()
	{
		$data['title']		= 'PEMIRA KM PHB 2017';
		$this->load->view('pemilih/home',$data);
	}
}