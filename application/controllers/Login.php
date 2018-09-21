<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		redirect('auth','refresh');
		
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */