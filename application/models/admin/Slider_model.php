<?php 

class Slider_model extends CI_Model{


	function __construct()
	{
		parent::__construct();
		
	}

	public function slider_ekle($data=array()){

		$result=$this->db->insert("slider",$data);
		return $result;
	}

	public function slider_duzenle($data=array(),$slider_id=array()){

		$result=$this->db->where($slider_id)->update("slider",$data);
		return $result;
	}

	public function slider_sil($slider_id=array()){

		$result=$this->db->where($slider_id)->delete("slider");
		return $result;
	}





}




 ?>