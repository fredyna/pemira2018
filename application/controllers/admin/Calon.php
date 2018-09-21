<?php 

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Calon extends CI_Controller {
        public function __construct(){
            parent::__construct();
            if(!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(1) && !$this->ion_auth->in_group(2)){
                redirect('auth');
            }
            $this->load->library('form_validation');
            $this->load->model('m_calon');
        }

        /* Calon Presma */

        public function index(){

        }

        public function presma(){
            $data['user']       = $this->ion_auth->user()->row();
            $data['group']  = $this->ion_auth->get_users_groups($data['user']->id)->row();
            $data['calon']      = $this->m_calon->getCalonPresma();
            $data['title']      = 'Admin | Calon Presma'; 
            $data['content']    = 'admin/calon_presma/calon_presma';
            $this->load->view('template',$data);
        }

        public function addCalonPresma(){
            if($this->input->post('submit')==true){

                $this->form_validation->set_rules('no_calon', 'No Calon', 'trim|required');
                $this->form_validation->set_rules('capres', 'Nama Capres', 'required');
                $this->form_validation->set_rules('prodi_capres', 'Prodi Capres', 'required');
                $this->form_validation->set_rules('cawapres', 'Nama Cawapres', 'required');
                $this->form_validation->set_rules('prodi_cawapres', 'Prodi Cawapres', 'required');
                $this->form_validation->set_rules('visi', 'Visi', 'required');
                $this->form_validation->set_rules('misi', 'Misi', 'required');

                if ($this->form_validation->run() == TRUE) {

                    $upload1 ='';

                    $config = array(
                        'upload_path'   => './uploads/',
                        'allowed_types' => 'jpg|png|gif',
                        'max_size'      => 2048,
                        'encrypt_name'  => TRUE,
                    );

                    $this->load->library('upload',$config);

                    if($this->upload->do_upload('file1')){
                        $upload1 = $this->upload->data('file_name');
                    } else{
                        $error = array('error' => $this->upload->display_errors());
                        $this->session->set_flashdata('info', 'Proses Upload Gagal!'.$error['error']);
                        redirect('admin/calon/addCalonPresma','refresh');
                    }

                    $data = array(
                        'no_calon'      => $this->input->post('no_calon'),
                        'nama_pres'     => ucwords(strtolower($this->input->post('capres'))),
                        'nama_wapres'   => ucwords(strtolower($this->input->post('cawapres'))),
                        'visi'          => $this->input->post('visi'),
                        'misi'          => $this->input->post('misi'),
                        'id_prodi_pres' => $this->input->post('prodi_capres'),
                        'id_prodi_wapres' => $this->input->post('prodi_cawapres'),
                        'picture'       => $upload1,
                    );

                    $sql = $this->m_calon->addCalonPresma($data);
                    if($sql){
                        $this->session->set_flashdata('info', 'Tambah Data Berhasil!');
                        redirect('admin/calon/presma');
                    } else{
                        $this->session->set_flashdata('info', 'Tambah Data Gagal!');
                        redirect('admin/calon/presma');
                    }

                } 

            } 

            $data['user']       = $this->ion_auth->user()->row();
            $data['group']  = $this->ion_auth->get_users_groups($data['user']->id)->row();
            $data['prodi']      = $this->m_calon->getProdi();
            $data['title']      = 'Add Calon Presma'; 
            $data['content']    = 'admin/calon_presma/calon_presma_add';
            $this->load->view('template',$data);
        }

        public function editCalonPresma($id=null){
            if($id==null){
                $this->session->set_flashdata('info', 'Edit Data Gagal!');
                redirect('admin/calon/presma','refresh');
            }

            if($this->input->post('submit')==true){

                $this->form_validation->set_rules('no_calon', 'No Calon', 'trim|required');
                $this->form_validation->set_rules('capres', 'Nama Capres', 'required');
                $this->form_validation->set_rules('prodi_capres', 'Prodi Capres', 'required');
                $this->form_validation->set_rules('cawapres', 'Nama Cawapres', 'required');
                $this->form_validation->set_rules('prodi_cawapres', 'Prodi Cawapres', 'required');
                $this->form_validation->set_rules('visi', 'Visi', 'required');
                $this->form_validation->set_rules('misi', 'Misi', 'required');

                if ($this->form_validation->run() == TRUE) {

                    $data = array(
                        'no_calon'      => $this->input->post('no_calon'),
                        'nama_pres'     => ucwords(strtolower($this->input->post('capres'))),
                        'nama_wapres'   => ucwords(strtolower($this->input->post('cawapres'))),
                        'visi'          => $this->input->post('visi'),
                        'misi'          => $this->input->post('misi'),
                        'id_prodi_pres' => $this->input->post('prodi_capres'),
                        'id_prodi_wapres' => $this->input->post('prodi_cawapres'),
                    );

                    $sql = $this->m_calon->updateCalonPresma($id,$data);
                    if($sql){
                        $this->session->set_flashdata('info', 'Update Data Berhasil!');
                        redirect('admin/calon/presma');
                    } else{
                        $this->session->set_flashdata('info', 'Update Data Gagal!');
                        redirect('admin/calon/presma');
                    }

                }

            }

            $data['user']       = $this->ion_auth->user()->row();
            $data['group']  = $this->ion_auth->get_users_groups($data['user']->id)->row();
            $data['prodi']      = $this->m_calon->getProdi();
            $data['calon']      = $this->m_calon->getCalonPresmaById($id);
            $data['title']      = 'Edit Calon Presma'; 
            $data['content']    = 'admin/calon_presma/calon_presma_edit';
            $this->load->view('template',$data);
        }

        public function viewCalonPresma($id=null){
            if($id==null){
                $this->session->set_flashdata('info', 'Gagal Lihat Data!');
                redirect('admin/calon/presma','refresh');
            }

            $data['user']       = $this->ion_auth->user()->row();
            $data['group']  = $this->ion_auth->get_users_groups($data['user']->id)->row();
            $data['calon']      = $this->m_calon->getCalonPresmaById($id);
            $data['title']      = 'View Calon Presma'; 
            $data['content']    = 'admin/calon_presma/calon_presma_view';
            $this->load->view('template',$data);
        }

        public function changePicturePresma($id=null){
            if($id==null){
                $this->session->set_flashdata('info', 'Gagal Update Gambar!');
                redirect('admin/calon/presma','refresh');
            }

            $upload1 ='';

            $config = array(
                'upload_path'   => './uploads/',
                'allowed_types' => 'jpg|png|gif',
                'max_size'      => 2048,
                'max_width'     => 1600,
                'maxt_height'   => 1200,
                'encrypt_name'  => TRUE,
            );

            $this->load->library('upload',$config);

            if($this->upload->do_upload('file1')){
                $upload1 = $this->upload->data('file_name');
            } else{
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('info', 'Proses Upload Gagal!'.$error['error']);
                redirect('admin/calon/viewCalonPresma/'.$id,'refresh');
            }

            $data = array(
                'picture'       => $upload1,
            );

            $sql = $this->m_calon->updateCalonPresma($id,$data);
            if($sql){
                $this->session->set_flashdata('info', 'Update Picture Berhasil!');
                redirect('admin/calon/viewCalonPresma/'.$id);
            } else{
                $this->session->set_flashdata('info', 'Update Picture Gagal!');
                redirect('admin/calon/viewCalonPresma/'.$id);
            }

        }

        public function deleteCalonPresma($id=null){
            if($id==null){
                $this->session->set_flashdata('info', 'Gagal Hapus Calon Presma!');
                redirect('admin/calon/presma','refresh');
            }

            $sql = $this->m_calon->deleteCalonPresma($id);

            if($sql){
                $this->session->set_flashdata('info', 'Berhasil Hapus Calon Presma!');
                redirect('admin/calon/presma/'.$id);
            } else{
                $this->session->set_flashdata('info', 'Gagal Hapus Calon Presma!');
                redirect('admin/calon/presma/'.$id);
            }
        }

        /* Calon Kahim */

        public function kahim(){
            $data['user']           = $this->ion_auth->user()->row();
            $data['group']  = $this->ion_auth->get_users_groups($data['user']->id)->row();
            $data['calon']          = $this->m_calon->getCalonKahim();
            $data['title']          = 'Admin | Calon Kahim'; 
            $data['content']        = 'admin/calon_kahim/calon_kahim';
            $this->load->view('template',$data);
        }

        public function addCalonKahim(){
            if($this->input->post('submit')==true){

                $this->form_validation->set_rules('no_calon', 'No Calon', 'trim|required');
                $this->form_validation->set_rules('nama', 'Nama', 'required');
                $this->form_validation->set_rules('prodi', 'Prodi Calon Kahim', 'required');
                $this->form_validation->set_rules('visi', 'Visi', 'required');
                $this->form_validation->set_rules('misi', 'Misi', 'required');

                if ($this->form_validation->run() == TRUE) {

                    $upload1 ='';

                    $config = array(
                        'upload_path'   => './uploads/',
                        'allowed_types' => 'jpg|png|gif',
                        'max_size'      => 2048,
                        'encrypt_name'  => TRUE,
                    );

                    $this->load->library('upload',$config);

                    if($this->upload->do_upload('file1')){
                        $upload1 = $this->upload->data('file_name');
                    } else{
                        $error = array('error' => $this->upload->display_errors());
                        $this->session->set_flashdata('info', 'Proses Upload Gagal!'.$error['error']);
                        redirect('admin/calon/addCalonKahim','refresh');
                    }

                    $data = array(
                        'no_calon'      => $this->input->post('no_calon'),
                        'nama'     => ucwords(strtolower($this->input->post('nama'))),
                        'visi'          => $this->input->post('visi'),
                        'misi'          => $this->input->post('misi'),
                        'id_prodi' => $this->input->post('prodi'),
                        'picture'       => $upload1,
                    );

                    $sql = $this->m_calon->addCalonKahim($data);
                    if($sql){
                        $this->session->set_flashdata('info', 'Tambah Data Berhasil!');
                        redirect('admin/calon/kahim');
                    } else{
                        $this->session->set_flashdata('info', 'Tambah Data Gagal!');
                        redirect('admin/calon/kahim');
                    }

                }

            }

            $data['user']       = $this->ion_auth->user()->row();
            $data['group']  = $this->ion_auth->get_users_groups($data['user']->id)->row();
            $data['prodi']      = $this->m_calon->getProdi();
            $data['title']      = 'Add Calon Kahim'; 
            $data['content']    = 'admin/calon_kahim/calon_kahim_add';
            $this->load->view('template',$data);
        }

        public function editCalonKahim($id=null){
            if($id==null){
                $this->session->set_flashdata('info', 'Edit Data Gagal!');
                redirect('admin/calon/kahim','refresh');
            }

            if($this->input->post('submit')==true){

                $this->form_validation->set_rules('no_calon', 'No Calon', 'trim|required');
                $this->form_validation->set_rules('nama', 'Nama', 'required');
                $this->form_validation->set_rules('prodi', 'Prodi Calon Kahim', 'required');
                $this->form_validation->set_rules('visi', 'Visi', 'required');
                $this->form_validation->set_rules('misi', 'Misi', 'required');

                if ($this->form_validation->run() == TRUE) {

                    $data = array(
                        'no_calon'      => $this->input->post('no_calon'),
                        'nama'     => ucwords(strtolower($this->input->post('nama'))),
                        'visi'          => $this->input->post('visi'),
                        'misi'          => $this->input->post('misi'),
                        'id_prodi' => $this->input->post('prodi'),
                    );

                    $sql = $this->m_calon->updateCalonKahim($id,$data);
                    if($sql){
                        $this->session->set_flashdata('info', 'Update Data Berhasil!');
                        redirect('admin/calon/kahim');
                    } else{
                        $this->session->set_flashdata('info', 'Update Data Gagal!');
                        redirect('admin/calon/kahim');
                    }

                }

            } else{
                $data['user']       = $this->ion_auth->user()->row();
                $data['group']  = $this->ion_auth->get_users_groups($data['user']->id)->row();
                $data['prodi']      = $this->m_calon->getProdi();
                $data['calon']      = $this->m_calon->getCalonKahimById($id);
                $data['title']      = 'Edit Calon Kahim'; 
                $data['content']    = 'admin/calon_kahim/calon_kahim_edit';
                $this->load->view('template',$data);
            }
        }

        public function viewCalonKahim($id=null){
            if($id==null){
                $this->session->set_flashdata('info', 'Gagal Lihat Data!');
                redirect('admin/calon/kahim','refresh');
            }

            $data['user']       = $this->ion_auth->user()->row();
            $data['group']  = $this->ion_auth->get_users_groups($data['user']->id)->row();
            $data['calon']      = $this->m_calon->getCalonKahimById($id);
            $data['title']      = 'View Calon Kahim'; 
            $data['content']    = 'admin/calon_kahim/calon_kahim_view';
            $this->load->view('template',$data);
        }

        public function changePictureKahim($id=null){
            if($id==null){
                $this->session->set_flashdata('info', 'Gagal Update Gambar!');
                redirect('admin/calon/kahim','refresh');
            }

            $upload1 ='';

            $config = array(
                'upload_path'   => './uploads/',
                'allowed_types' => 'jpg|png|gif',
                'max_size'      => 2048,
                'max_width'     => 1600,
                'maxt_height'   => 1200,
                'encrypt_name'  => TRUE,
            );

            $this->load->library('upload',$config);

            if($this->upload->do_upload('file1')){
                $upload1 = $this->upload->data('file_name');
            } else{
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('info', 'Proses Upload Gagal!'.$error['error']);
                redirect('admin/calon/viewCalonKahim/'.$id,'refresh');
            }

            $data = array(
                'picture'       => $upload1,
            );

            $sql = $this->m_calon->updateCalonKahim($id,$data);
            if($sql){
                $this->session->set_flashdata('info', 'Update Picture Berhasil!');
                redirect('admin/calon/viewCalonKahim/'.$id);
            } else{
                $this->session->set_flashdata('info', 'Update Picture Gagal!');
                redirect('admin/calon/viewCalonKahim/'.$id);
            }

        }

        public function deleteCalonKahim($id=null){
            if($id==null){
                $this->session->set_flashdata('info', 'Gagal Hapus Calon Presma!');
                redirect('admin/calon/kahim','refresh');
            }

            $sql = $this->m_calon->deleteCalonKahim($id);

            if($sql){
                $this->session->set_flashdata('info', 'Berhasil Hapus Calon Kahim!');
                redirect('admin/calon/kahim/'.$id);
            } else{
                $this->session->set_flashdata('info', 'Gagal Hapus Calon Kahim!');
                redirect('admin/calon/kahim/'.$id);
            }
        }

        
    }

?>