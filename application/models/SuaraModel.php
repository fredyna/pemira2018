<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuaraModel extends CI_Model {

	
	public function countPresma(){
		$query = "SELECT `suara_presma`.`id_calon`, COUNT(`suara_presma`.`id_calon`) AS `suara`, `calon_presma`.`no_calon`, `calon_presma`.`nama_pres`, `calon_presma`.`nama_wapres`, `calon_presma`.`picture` FROM `suara_presma` JOIN `calon_presma` ON `calon_presma`.`id`=`suara_presma`.`id_calon` GROUP BY id_calon";
		$sql = $this->db->query($query);
		return $sql->result();
	}

	public function countKahim($prodi){
		$query = "SELECT `suara_kahim`.`id_calon`, COUNT(`suara_kahim`.`id_calon`) AS `suara`, `calon_kahim`.`no_calon`, `calon_kahim`.`nama`, `calon_kahim`.`picture` FROM `suara_kahim` JOIN `calon_kahim` ON `calon_kahim`.`id`=`suara_kahim`.`id_calon` WHERE `calon_kahim`.`id_prodi`='$prodi' GROUP BY id_calon";
		$sql = $this->db->query($query);
		return $sql->result();
	}

	public function addSuaraPresma($data){
		$sql = $this->db->insert('suara_presma',$data);
		return $sql ? true : false;
	}

	public function addSuaraKahim($data){
		$sql = $this->db->insert('suara_kahim',$data);
		return $sql ? true : false;
	}
}

/* End of file SuaraModel.php */
/* Location: ./application/models/SuaraModel.php */