<?php 

class Sayfa_model extends CI_Model{


	function __construct()
	{
		parent::__construct();
		
	}

	public function sayfa_ekle($data=array()){

		$result=$this->db->insert("sayfa",$data);
		return $result;
	}

	public function sayfa_duzenle($data=array(),$sayfa_id=array()){

		$result=$this->db->where($sayfa_id)->update("sayfa",$data);
		return $result;
	}

	public function sayfa_sil($sayfa_id=array()){

		$result=$this->db->where($sayfa_id)->delete("sayfa");
		return $result;
	}

	




}




 ?>