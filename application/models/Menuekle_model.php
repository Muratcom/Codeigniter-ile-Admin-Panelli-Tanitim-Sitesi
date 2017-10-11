<?php 

class Menuekle_model extends CI_Model
{	

		function __construct()
	{
		parent::__construct();
}


public function insertmenu($data=array())
	{

		$result=$this->db->insert("menuler",$data);
		return $result;

	}

}

 ?>