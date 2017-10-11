 <?php include 'admin_header.php'; ?> 
 <?php include 'admin_sidebar.php'; ?> 
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Sayfa Düzenleme Sayfsı</title>
 </head>
 <body>
    <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Anasayfa</h1>
                        <h1 class="page-subhead-line">Sitenizdeki Sayfaleri düzenliyorsunuz...  </h1>

                    </div>


                          <div class="col-md-8">
               			<div class="panel panel-info">
                        <div class="panel-heading">
                           Sayfa Düzenleme Formu
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo base_url("admin/admin_anasayfa/sayfaduzenle_islem"); ?>" method="POST">
                                        <div class="form-group">
                                        <input class="form-control" type="hidden" name="sayfa_id" value="<?php echo $sayfacek->sayfa_id; ?>">  
                                            <label>Sayfa Başlık</label>
                                            <input class="form-control" type="text" name="sayfa_baslik" value="<?php echo $sayfacek->sayfa_baslik; ?>">                               
                                           	
                                           	

                                        </div>
                                 <div class="form-group">
                                            <label>Sayfa Yazar</label>
                                            <input class="form-control" type="text" name="sayfa_yazar" value="<?php echo $sayfacek->sayfa_yazar; ?>">
                                     
                                        </div>


                                         <div class="form-group">
                                            <label>Sayfa Detay</label>
                                            <input class="form-control" type="text" name="sayfa_detay" value="<?php echo $sayfacek->sayfa_detay; ?>">
                                     
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