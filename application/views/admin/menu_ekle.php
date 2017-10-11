 <?php include 'admin_header.php'; ?> 
 <?php include 'admin_sidebar.php'; ?> 
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Menü Ekleme Sayfsı</title>
 </head>
 <body>
    <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Anasayfa</h1>
                        <h1 class="page-subhead-line">Sitenize menü ekliyorsunuz  </h1>

                    </div>


                          <div class="col-md-8">
               			<div class="panel panel-info">
                        <div class="panel-heading">
                           Menü Ekleme Formu
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo base_url("admin/admin_anasayfa/menu_insert"); ?>" method="POST">
                                        <div class="form-group">
                                            <label>Menü Adı</label>
                                            <input class="form-control" type="text" name="menu_ad" placeholder="Menü adını giriniz...">
                                           
                                        </div>
                                 <div class="form-group">
                                            <label>Menü Linki</label>
                                            <input class="form-control" type="text" name="menu_link" placeholder="Menü linkini giriniz...">
                                     
                                        </div>


                                         
                                  
                                 
                                        <button type="submit" class="btn btn-info">Ekle </button>

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