<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anasayfa extends CI_Controller {

		function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database(); // Sayfada database ye  erişmemizi sağlar
		$this->load->library('session');	
	}

	public function index()
	{
		$menucek=$this->db->get("menuler")->result();
		$slidercek=$this->db->get("slider")->result();
		$sayfacek=$this->db->get("sayfa")->result();

		$viewData=array("menucek"=>$menucek,
						"slidercek"=>$slidercek,
						"sayfacek"=>$sayfacek);
		$this->load->view("index",$viewData);


	}

	public function ekle()
	{
		$this->load->view("menu_ekle");
	}

	public function insert()
	{	
		$ad=$this->input->post("menu_ad");
		$link=$this->input->post("menu_link");
		echo $ad;

		$data=array("menu_ad"=>$ad,
					"menu_link"=>$link);


		$this->load->model("menuekle_model");
		$veriler=$this->menuekle_model->insertmenu($data);
		if ($veriler) {
			redirect(base_url("anasayfa"));
		}
	}


	public function sayfa_detay()
	{	
		$menucek=$this->db->get("menuler")->result();	

		$id=$this->uri->segment("3");

		$sayfacek=$this->db->where("sayfa_id",$id)->get("sayfa")->row();

		$data=array("sayfacek"=>$sayfacek,
					"menucek"=>$menucek);

		$this->load->view("sayfa_detay",$data);
	}
}
