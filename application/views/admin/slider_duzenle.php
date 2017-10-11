 <?php include 'admin_header.php'; ?> 
 <?php include 'admin_sidebar.php'; ?> 
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Slider Düzenleme Sayfsı</title>
 </head>
 <body>
    <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Anasayfa</h1>
                        <h1 class="page-subhead-line">Sitenizdeki Sliderleri düzenliyorsunuz...  </h1>

                    </div>


                          <div class="col-md-8">
               			<div class="panel panel-info">
                        <div class="panel-heading">
                           Slider Düzenleme Formu
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo base_url("admin/admin_anasayfa/sliderduzenle_islem"); ?>" method="POST">
                                        <div class="form-group">
                                        <input class="form-control" type="hidden" name="slider_id" value="<?php echo $slidercek->slider_id; ?>">  
                                            <label>Slider Adı</label>
                                            <input class="form-control" type="text" name="slider_ad" value="<?php echo $slidercek->slider_ad; ?>">                               
                                           	
                                           	

                                        </div>
                                 <div class="form-group">
                                            <label>Slider Linki</label>
                                            <input class="form-control" type="text" name="slider_url" value="<?php echo $slidercek->slider_url; ?>">
                                     
                                        </div>


                                         <div class="form-group">
                                            <label>Slider Sıra</label>
                                            <input class="form-control" type="text" name="slider_sira" value="<?php echo $slidercek->slider_sira; ?>">
                                     
                                        </div>
                                         
                                  
                                 
                                        <button type="submit" class="btn btn-info">Düzenle </button>

                                    </form>
                            </div>
                        </div>
                            </div>

                </div>
               
            
               
            </div>
           
        </div>
 </body>
 </html>
 <?php include 'admin_footer.php'; ?> 