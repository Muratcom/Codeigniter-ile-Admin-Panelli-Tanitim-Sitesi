
     <?php include 'header.php'; ?>
    <!--page_container-->
    <div class="page_container">
        <!--slider-->
        <div id="main_slider">
        
            <div class="camera_wrap" id="camera_wrap_1">
             <?php foreach ($slidercek as $slider) {?>
            
       
            <div data-src="<?php echo $slider->slider_resimyol; ?>"></div>


       <?php } ?> 
                                              
            </div><!-- #camera_wrap_1 -->
            <div class="clear"></div>	
        </div>        
        <!--//slider-->
                       
        <!--planning-->
       
        <!--//planning-->
        
        <!--Welcome-->
        <div class="wrap block">
            <div class="container welcome_block">
            	<div class="welcome_line welcome_t"></div>
            	Cras vulputate pretium massa gravida egestas consectetur?<span>Lorem ipsum dolor sit amet &amp; consectetur adipiscing elit!</span>
                <div class="welcome_line welcome_b"></div>
            </div>
        </div>
        <!--//Welcome-->         
        
        <!--featured works-->
        <div class="wrap block carousel_block">
           
        </div>        
        <!--//featured works-->
        
        <!--Latest news-->
        <div class="wrap block">
        	<div class="container">
        		<div class="row news_block">
        			
                       		
            	</div>
        	</div>
        </div>
        <!--Latest news-->
        
        <!--latest posts-->
        <div class="wrap block carousel_block">
            <div class="container">
            	<h2 class="upper">Web Yazılımları İçin Olmazsa Olmazlar!!!</h2>
            	<div class="row">
                    <div class="span12">
                        <ul id="mycarousel2" class="jcarousel-skin-tango">
                           
                           <?php 

                                foreach ($sayfacek as $sayfa) {?>
                                  

                                          <li>
                                <div class="post_carousel">
                                    <img src="<?php echo $sayfa->sayfa_resimyol; ?>" alt="" />
                                    <div class="title_t"><a href="#"><?php echo $sayfa->sayfa_baslik; ?></a></div>
                                    <div class="post_meta">
                                        Posted by <a href="#"><?php echo $sayfa->sayfa_yazar; ?></a>  / <?php echo $sayfa->sayfa_tarih; ?>
                                    </div>
                                    <?php echo substr($sayfa->sayfa_detay, 0,300); ?> <a href="<?php echo base_url("anasayfa/sayfa_detay/$sayfa->sayfa_id"); ?>" class="arrow_link">Devamını Oku</a>
                                </div>  
                            </li>


                                <?php } ?>

                                                                                                             
                        </ul>                        
                    </div>                
                </div>                
            </div>
        </div>        
        <!--//latest posts--> 
    </div>
    <!--//page_container-->
    
    <!--footer-->
    <?php include 'footer.php'; ?>