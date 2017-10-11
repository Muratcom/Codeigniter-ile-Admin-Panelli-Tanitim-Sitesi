<?php include 'header.php'; 



 
?>



    <div class="page_container">
    	<div class="breadcrumb">
        	<div class="wrap">
            	<div class="container">
                    <a href="index.php">Anasayfa</a><span>/</span>Web İçin Olmazsa Olmazlar!!!
                </div>
            </div>
        </div>
    	<div class="wrap">
        	<div class="container">
                <section>
                	<div class="row">
                    	<div class="span12">
                        	

                            <div class="post">
                            	<center><h2 class="title"><span><a href="#"><?php echo $sayfacek->sayfa_baslik;?></a></span></h2></center>
                           		<center><img src="<?php echo base_url("$sayfacek->sayfa_resimyol") ; ?>" alt="" /></center>
                                <div class="post_info">
                                	<div class="fleft">On <span><?php echo $sayfacek->sayfa_tarih;?></span> / By <a href="#"><?php echo $sayfacek->sayfa_yazar;?></a> </div>
                                                                        
                                	<div class="clear"></div>
                                </div>
                                <p><?php echo $sayfacek->sayfa_detay;?></p>
                                
                            </div>
                           
                        </div>
                            	
                	</div>
                </section>
            </div>
        </div>
    </div>




<?php include 'footer.php'; ?>