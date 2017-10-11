<?php  

class Menuler_model extends CI_Model
{	



		function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database(); // Sayfada database ye  erişmemizi sağlar
		$this->load->library('session');	
	}


	public function menu_listele($where=array())
	{

		$sorgu=$this->db->where($where)->get("menuler");
		$menucek=$sorgu->result_array();
	}



}





?>