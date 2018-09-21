<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	/*pemilih*/
	public function getKelas($id_prodi=null,$smt=null){
		if($smt==null){
			$this->db->where('id_prodi',$id_prodi);
		}else{
			$where = array(
			'id_prodi' => $id_prodi,
			'smt'	=> $smt
			);

			$this->db->where('id_prodi',$id_prodi);
			$this->db->where('smt',$smt);
		}
		$this->db->order_by('smt', 'ASC');
		return $this->db->get('jumlah_kelas');
	}
	
	public function addKelas($data){
		$sql = $this->db->insert('jumlah_kelas',$data);
		if($sql){
			return true;
		} else{
			return false;
		}
	}
	public function updateKelas($data){
		$jumlah = array(
			'jumlah' => $data['jumlah']
			);
		$this->db->where('id_prodi',$data['id_prodi']);
		$this->db->where('smt',$data['smt']);
		$sql = $this->db->update('jumlah_kelas',$jumlah);
		if($sql){
			return true;
		} else{
			return false;
		}
	}
	public function getPemilih($data){
		$this->db->where('prodi',$data['prodi']);
		$this->db->where('smt',$data['smt']);
		$this->db->where('kelas',$data['kelas']);
		$this->db->order_by('first_name','asc');
		return $this->db->get('users')->result();
	}
	public function updateLock($id,$data){
		$this->db->where('id',$id);
		$sql = $this->db->update('users',$data);
		if($sql){
			return true;
		} else{
			return false;
		}
	}

	public function updateLockAll($prodi,$smt,$kelas,$data){
		$this->db->where('prodi', $prodi);
		$this->db->where('smt', $smt);
		$this->db->where('kelas', $kelas);
		$sql = $this->db->update('users', $data);
		if($sql){
			return true;
		} else{
			return false;
		}
	}

}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */