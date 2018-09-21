<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_calon extends CI_Model {
        
        /* calon presma */
        public function getCalonPresma(){
            $this->db->select('calon_presma.*');
            $this->db->select('prodi_pres.nama as nama_prodi_pres');
            $this->db->select('prodi_wapres.nama as nama_prodi_wapres');
            $this->db->from('calon_presma');
            $this->db->join('prodi as prodi_pres','prodi_pres.id=calon_presma.id_prodi_pres');
            $this->db->join('prodi as prodi_wapres','prodi_wapres.id=calon_presma.id_prodi_wapres');
            $sql = $this->db->get()->result();
            return $sql;
        }

        public function getCalonPresmaById($id){
            $this->db->select('calon_presma.*');
            $this->db->select('prodi_pres.nama as nama_prodi_pres');
            $this->db->select('prodi_wapres.nama as nama_prodi_wapres');
            $this->db->from('calon_presma');
            $this->db->join('prodi as prodi_pres','prodi_pres.id=calon_presma.id_prodi_pres');
            $this->db->join('prodi as prodi_wapres','prodi_wapres.id=calon_presma.id_prodi_wapres');
            $this->db->where('calon_presma.id',$id);
            $sql = $this->db->get()->row();
            return $sql;
        }

        public function addCalonPresma($data){
            $sql = $this->db->insert('calon_presma',$data);
            if($sql){
                return true;
            } else{
                return false;
            }
        }

        public function deleteCalonPresma($id){
            $this->db->where('id',$id);
            $sql = $this->db->delete('calon_presma');
            if($sql){
                return true;
            } else{
                return false;
            }
        }

        public function updateCalonPresma($id,$data){
            $this->db->where('id',$id);
            $sql = $this->db->update('calon_presma',$data);
            if($sql){
                return true;
            } else{
                return false;
            }
        }

        /* Calon Kahim */

        public function getCalonKahim(){
            $this->db->select('calon_kahim.*');
            $this->db->select('prodi.id as id_prodi');
            $this->db->select('prodi.nama as nama_prodi');
            $this->db->from('calon_kahim');
            $this->db->join('prodi','prodi.id=calon_kahim.id_prodi');
            return $this->db->get()->result();
        }

        public function getCalonKahimByProdi($prodi){
            $this->db->select('calon_kahim.*');
            $this->db->select('prodi.id as id_prodi');
            $this->db->select('prodi.nama as nama_prodi');
            $this->db->from('calon_kahim');
            $this->db->join('prodi','prodi.id=calon_kahim.id_prodi');
            $this->db->where('calon_kahim.id_prodi',$prodi);
            return $this->db->get()->result();
        }

        public function addCalonKahim($data){
            $sql = $this->db->insert('calon_kahim',$data);
            return $sql ? true : false;
        }

        public function getCalonKahimById($id){
            $this->db->select('calon_kahim.*');
            $this->db->select('prodi.id as id_prodi');
            $this->db->select('prodi.nama as nama_prodi');
            $this->db->from('calon_kahim');
            $this->db->join('prodi','prodi.id=calon_kahim.id_prodi');
            $this->db->where('calon_kahim.id',$id);
            $sql = $this->db->get()->row();
            return $sql;
        }

        public function deleteCalonKahim($id){
            $this->db->where('id',$id);
            $sql = $this->db->delete('calon_kahim');
            if($sql){
                return true;
            } else{
                return false;
            }
        }

        public function updateCalonKahim($id,$data){
            $this->db->where('id',$id);
            $sql = $this->db->update('calon_kahim',$data);
            if($sql){
                return true;
            } else{
                return false;
            }
        }

        public function getProdi(){
            $sql = $this->db->get('prodi')->result();
            return $sql;
        }
    }

?>