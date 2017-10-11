 <?php include 'admin_header.php'; ?> 
 <?php include 'admin_sidebar.php'; ?> 
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Slider Ekleme Sayfsı</title>
 </head>
 <body>
    <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Anasayfa</h1>
                        <h1 class="page-subhead-line">Sitenize Slider ekliyorsunuz  </h1>

                    </div>


                          <div class="col-md-8">
               			<div class="panel panel-info">
                        <div class="panel-heading">
                           Slider Ekleme Formu
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo base_url("admin/admin_anasayfa/sliderekle_islem"); ?>" method="POST" enctype="multipart/form-data">

                                     <div class="form-group">
                        <label class="control-label col-lg-4">No Input</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <span class="btn btn-file btn-default">
                                    <span class="fileupload-new">Select file</span>
                                    <span class="fileupload-exists">Change</span>
                                    <input type="file" name="file" id="dosya">
                                </span>
                                <span class="fileupload-preview"></span>
                                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                            </div>
                        </div>
                    </div> 

                               

                                    

                                        <div class="form-group">
                                            <label>Slider Adı</label>
                                            <input class="form-control" type="text" name="slider_ad" placeholder="Slider adını giriniz...">
                                           
                                        </div>
                                

                                        <div class="form-group">
                                            <label>Slider Linki</label>
                                            <input class="form-control" type="text" name="slider_url" placeholder="Slider linkini giriniz...">
                                     
                                        </div>

                                        <div class="form-group">
                                            <label>Slider Sira</label>
                                            <input class="form-control" type="text" name="slider_sira" placeholder="Slider linkini giriniz...">
                                     
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