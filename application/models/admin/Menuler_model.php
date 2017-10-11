<?php 

class Menuler_model extends CI_Model{


	function __construct()
	{
		parent::__construct();
		
	}

	public function menu_ekle($data=array()){

		$result=$this->db->insert("menuler",$data);
		return $result;
	}

public function menu_sil($data=array()){

		$result=$this->db->delete("menuler",$data);
		return $result;
	}

	public function menu_duzenle($data,$menu_id){

		$result=$this->db->where($menu_id)->update("menuler",$data);
		return $result;
	}



}




 ?>