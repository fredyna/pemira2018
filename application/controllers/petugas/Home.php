<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends CI_Controller {

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $data['user']	= $this->ion_auth->user()->row();
			$data['title']	= 'Petugas | Dashboard'; 
			$data['content']= 'petugas/dashboard';
			$this->load->view('template',$data);
        }

    }
?>