 <?php include 'admin_header.php'; ?> 
 <?php include 'admin_sidebar.php'; ?> 
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Menü Düzenleme Sayfsı</title>
 </head>
 <body>
    <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Anasayfa</h1>
                        <h1 class="page-subhead-line">Sitenizdeki menüleri düzenliyorsunuz...  </h1>

                    </div>


                          <div class="col-md-8">
               			<div class="panel panel-info">
                        <div class="panel-heading">
                           Menü Düzenleme Formu
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo base_url("admin/admin_anasayfa/menuduzenle_islem"); ?>" method="POST">
                                        <div class="form-group">
                                        <input class="form-control" type="hidden" name="menu_id" value="<?php echo $menucek->menu_id; ?>">  
                                            <label>Menü Adı</label>
                                            <input class="form-control" type="text" name="menu_ad" value="<?php echo $menucek->menu_ad; ?>">                               
                                           	
                                           	

                                        </div>
                                 <div class="form-group">
                                            <label>Menü Linki</label>
                                            <input class="form-control" type="text" name="menu_link" value="<?php echo $menucek->menu_link; ?>">
                                     
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