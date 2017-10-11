<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_anasayfa extends CI_Controller {

		function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database(); // Sayfada database ye  erişmemizi sağlar
		$this->load->library('session');
	

	}

	//İlk açılınca anasyafayı gösteren fonksiyon
	public function index()
	{
		$this->load->view('admin/admin_index');
	}
//menuler sayfasını açıp veritabanındaki verileri çeken sayfa
	public function menuler()
	{
		$menucek=$this->db->get("menuler")->result();

		$viewData=array("menucek"=>$menucek);

		$this->load->view('admin/menuler',$viewData);
	}
//menu eklemek için hazırlanan sayfaya yönlendiren fonksiyon
	public function menu_ekle()
	{
		$this->load->view('admin/menu_ekle');
	}
//menü eklemeden girdiğin verilerin databaseda işlem görmesi için modele atılacak olan işler ve sonucu gösteren fonksiyon.Ekleme işleminin son noktası burada biter
	public function menu_insert()
	{
		$menu_adı=$this->input->post("menu_ad");
		$menu_linki=$this->input->post("menu_link");

		$data=array("menu_ad"=>$menu_adı,
					"menu_link"=>$menu_linki);
	
		$this->load->model("admin/menuler_model");
		$result=$this->menuler_model->menu_ekle($data);
		if ($result) {
			redirect(base_url("admin/admin_anasayfa/menuler"));
		}

	}
//parametre olarak alınan id ye göre gerekli şartın hazırlanıp modele yollandığı fonksiyon
	public function sil()
	{
		$id=$this->uri->segment('4');
		$data=array("menu_id"=>$id);

		$this->load->model("admin/menuler_model");
		$result=$this->menuler_model->menu_sil($data);
		if ($result) {
			redirect(base_url("admin/admin_anasayfa/menuler"));
		}
	}

//parametre olarak alınan id ye göre verilerin veritabanından çekilip doluşekilde geldiği yeniden veri girecek form sayfasına yönlendirilen fonksiyon
		public function menu_duzenle()
	{

			$id=$this->uri->segment('4');
			$menucek=$this->db->where("menu_id",$id)->get('menuler')->row();
			$viewData=array("menucek"=>$menucek);
		$this->load->view('admin/menu_duzenle',$viewData);
	}

//menu düzenleme formunda yapılan değişikliklerden sonra post olarak gelen verilerin artık şartlara uydurulup modele yollandığı fonksiyon.Düzenleme işleminin son bulduğu nokta.
	public function menuduzenle_islem()
	{	$id=$this->input->post("menu_id");
	
		$menu_adi=$this->input->post("menu_ad");
		$menu_linki=$this->input->post("menu_link");

		$menu_id=array("menu_id"=>$id);
		$data=array("menu_ad"=>$menu_adi,
					"menu_link"=>$menu_linki);

		$this->load->model("admin/menuler_model");
		$result=$this->menuler_model->menu_duzenle($data,$menu_id);
		if ($result) {
			redirect(base_url("admin/admin_anasayfa/menuler"));
		}

	}

//Sliderlerin görüntülendiği ve veritabanındaki kayıtların çekildiği fonksiyon.
	public function slider()
	{
		$slidercek=$this->db->get("slider")->result();
		$viewData=array("slidercek"=>$slidercek);

		$this->load->view("admin/slider",$viewData);
	}

//Slider ekle butonuna basınca erekli işlemleri yapmamızı sağlayan form sayfasına yönlendiren fonksiyon.
	public function slider_ekle()
	{
		

		$this->load->view("admin/slider_ekle");
	}

		
//Slider ekleme işlemleri dosya upload ile yaptığımız fonksiyon. 
		 public function sliderekle_islem() 
        {
        		


                $config['upload_path']          = 'uploads_slider/';
                $config['allowed_types']        = '*';
             //   $config['max_size']             = 100;
               // $config['max_width']            = 1024;
                //$config['max_height']           = 768;
                
				
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('file'))
                {
                	echo $this->upload->display_errors();
                }
                else
                {		
                		$bilgiler = $this->upload->data();

						$yuklenen_dosya_yolu = $bilgiler['full_path'];  // Eğer resim eklenmişse resim yolunu veritabanına aktarmak için gerekli olan kısım...

                       
                       
                }

                $dosya_yol=substr($yuklenen_dosya_yolu,22);//Bütün ana yolu verdiği için burada bana gerekli olan kısmı aktarıyorum veritabanın. Normalde full path olayında C:xampp... gibi ana dizinden veriiyor. bizim için uploadstan itibaren yeterli olduğu için ilk 22 karakteri yok sayıyorum.



                $slider_adi=$this->input->post("slider_ad");
                $slider_resimyolu=$dosya_yol;//veriyabannda ilgili alana bunu yollaycam.
                $slider_linki=$this->input->post("slider_url");
                $slider_sirasi=$this->input->post("slider_sira");

                $data=array("slider_ad"=>$slider_adi,
                			"slider_url"=>$slider_linki,
                			"slider_sira"=>$slider_sirasi,
                			"slider_resimyol"=>$slider_resimyolu);
                $this->load->model("admin/slider_model");
                $result=$this->slider_model->slider_ekle($data);	
                if ($result) {
                	redirect(base_url("admin/admin_anasayfa/slider")); //Ekleme işlemi başarılı ise sliderların olduğu liste sayfasına yönlndir.
                }

                
        }

//Düzenle butonuna tıklanınca iilgili veriyi çemke için id yi parametreden alıp yeniden veritabanından veri çekme sorgusu yapılıp düzenleme formuna yönlendirme yaptığım fonksiyon.Burada saddece tek bir satırı cekmek zorunda olduğum için yeniden veri çekme sorgusu yazıp yollamak zorundayım.
        	public function slider_duzenle()
        	{	
        		$id=$this->uri->segment('4');
        		$slidercek=$this->db->where("slider_id",$id)->get("slider")->row();
        		$dataView=array("slidercek"=>$slidercek);
        		$this->load->view("admin/slider_duzenle",$dataView);
        	}


//Form sayfasında gerekli değişiklikleri yaptıktan sonra post ile gelen verilerin gerekli şartlara uydurulup modele yollandığı fonksiyondur.
        		public function sliderduzenle_islem()
        	{	
        		$id=$this->input->post("slider_id");
        		$ad=$this->input->post("slider_ad");
        		$link=$this->input->post("slider_url");
        		$sira=$this->input->post("slider_sira");

        		$data=array(
        					"slider_ad"=>$ad,
        					"slider_url"=>$link,
        					"slider_sira"=>$sira);
        		$slider_id=array("slider_id"=>$id);
        		$this->load->model("admin/slider_model");
        		$result=$this->slider_model->slider_duzenle($data,$slider_id);
        		if ($result) {
        			redirect(base_url("admin/admin_anasayfa/slider"));
        		}

     
        	}

//İd si parametre ile alınan verinin gerekli silme işlemi için şartlarının oluşturulup model sayfasına yönlendirildiği fonksiyondur.
        	public function slider_sil()
        	{
        		$id=$this->uri->segment("4");//resim yolunu almak için bunu kullandım ama resim yolunda da gelen resimler / ile devam ettiği için iki parametre gibi algılanıyo. O yüzden iki parametreyi de alıp tek bir resim yol değişkeni altında birleştirdim.
        		$resimyol1=$this->uri->segment("5");
        		$resimyol2=$this->uri->segment("6");
        		$resimyol=$resimyol1."/".$resimyol2;


        		$slider_id=array("slider_id"=>$id);

        		$this->load->model("admin/slider_model");
        		$result=$this->slider_model->slider_sil($slider_id);

        		if ($result) {
        			
        			unlink($resimyol);//Silme işlemi gerçekleştiğinde uploads_slider dosyasında ki resmide uçuruyoruz...
        			redirect(base_url("admin/Admin_anasayfa/slider"));
        		}

        	}



        	public function sayfa()
	{
		$sayfacek=$this->db->get("sayfa")->result();
		$viewData=array("sayfacek"=>$sayfacek);

		$this->load->view("admin/sayfa",$viewData);
	}


		public function sayfa_ekle()
	{
		

		$this->load->view("admin/sayfa_ekle");
	}


		 public function sayfaekle_islem() 
        {
        		


                $config['upload_path']          = 'uploads_sayfa/';
                $config['allowed_types']        = '*';
             //   $config['max_size']             = 100;
               // $config['max_width']            = 1024;
                //$config['max_height']           = 768;
                
				
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('file'))
                {
                	echo $this->upload->display_errors();
                }
                else
                {		
                		$bilgiler = $this->upload->data();

						$yuklenen_dosya_yolu = $bilgiler['full_path'];  // Eğer resim eklenmişse resim yolunu veritabanına aktarmak için gerekli olan kısım...

                       
                       
                }

                $dosya_yol=substr($yuklenen_dosya_yolu,22);//Bütün ana yolu verdiği için burada bana gerekli olan kısmı aktarıyorum veritabanın. Normalde full path olayında C:xampp... gibi ana dizinden veriiyor. bizim için uploadstan itibaren yeterli olduğu için ilk 22 karakteri yok sayıyorum.


                $zaman=date('Y-m-d H:i');
                $sayfa_baslik=$this->input->post("sayfa_baslik");
                $sayfa_resimyolu=$dosya_yol;//veriyabannda ilgili alana bunu yollayacam.
                $sayfa_yazar=$this->input->post("sayfa_yazar");
                $sayfa_detay=$this->input->post("sayfa_detay");

                $data=array("sayfa_baslik"=>$sayfa_baslik,
                			"sayfa_yazar"=>$sayfa_yazar,
                			"sayfa_detay"=>$sayfa_detay,
                			"sayfa_resimyol"=>$sayfa_resimyolu,
                			"sayfa_tarih"=>$zaman);
                $this->load->model("admin/sayfa_model");
                $result=$this->sayfa_model->sayfa_ekle($data);	
                if ($result) {
                	redirect(base_url("admin/admin_anasayfa/sayfa")); //Ekleme işlemi başarılı ise sliderların olduğu liste sayfasına yönlndir.
                }

                
        }


        public function sayfa_duzenle()
        	{	
        		$id=$this->uri->segment('4');
        		$sayfacek=$this->db->where("sayfa_id",$id)->get("sayfa")->row();
        		$dataView=array("sayfacek"=>$sayfacek);
        		$this->load->view("admin/sayfa_duzenle",$dataView);
        	}


        	public function sayfaduzenle_islem()
        	{	$zaman=date('Y-m-d H:i');
        		$id=$this->input->post("sayfa_id");
        		$sayfa_baslik=$this->input->post("sayfa_baslik");
        		$sayfa_yazar=$this->input->post("sayfa_yazar");
        		$sayfa_detay=$this->input->post("sayfa_detay");

        		$data=array(
        					"sayfa_baslik"=>$sayfa_baslik,
        					"sayfa_yazar"=>$sayfa_yazar,
        					"sayfa_detay"=>$sayfa_detay,
        					"sayfa_tarih"=>$zaman);
        		$sayfa_id=array("sayfa_id"=>$id);
        		$this->load->model("admin/sayfa_model");
        		$result=$this->sayfa_model->sayfa_duzenle($data,$sayfa_id);
        		if ($result) {
        			redirect(base_url("admin/admin_anasayfa/sayfa"));
        		}

     
        	}

        		public function sayfa_sil()
        	{
        		$id=$this->uri->segment("4");//resim yolunu almak için bunu kullandım ama resim yolunda da gelen resimler / ile devam ettiği için iki parametre gibi algılanıyo. O yüzden iki parametreyi de alıp tek bir resim yol değişkeni altında birleştirdim.
        		$resimyol1=$this->uri->segment("5");
        		$resimyol2=$this->uri->segment("6");
        		$resimyol=$resimyol1."/".$resimyol2;


        		$sayfa_id=array("sayfa_id"=>$id);

        		$this->load->model("admin/sayfa_model");
        		$result=$this->sayfa_model->sayfa_sil($sayfa_id);

        		if ($result) {
        			
        			unlink($resimyol);//Silme işlemi gerçekleştiğinde uploads_slider dosyasında ki resmide uçuruyoruz...
        			redirect(base_url("admin/Admin_anasayfa/sayfa"));
        		}

        	}



               

}




