<?php include 'admin_header.php' ;
		include 'admin_sidebar.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Slider Sayfası</title>
</head>
<body>

<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="page-head-line">Slider</h1>
                        <h1 class="page-subhead-line">Sitenizdeki sliderlari bu sayfadan ayarlayabilirsiniz...  </h1>

                    </div>
                </div>             
               
              <a href="<?php echo base_url("admin/admin_anasayfa/slider_ekle"); ?>"> <button class="btn btn-success" type="submit">Slider Ekle</button></a> <hr>
                         <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px;">Slider id</th>
                                            <th style="width: 300px;">Slider Adı</th>
                                            <th style="width: 300px;">Slider Resimyol</th>
                                            <th style="width: 300px;">Slider Linki</th>
                                            <th style="width: 10px;"></th>
                                            <th style="width: 10px;"></th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($slidercek as $slider) { ?>
                                    

                                    		  <tr>
                                            <td><?php echo $slider->slider_id; ?></td>
                                            <td><?php echo $slider->slider_ad; ?></td>
                                            <td>

                                            	<img src="<?php echo base_url($slider->slider_resimyol); ?>" style="width: 200px;">

                                            </td>
                                            <td><?php echo $slider->slider_url; ?></td>
                                            <td>
                                            	<a href="<?php echo base_url("admin/admin_anasayfa/slider_duzenle/$slider->slider_id"); ?>"><button class="btn btn-success" type="submit">Düzenle</button></a>
                                            </td>
                                            <td><a href="<?php echo base_url("admin/admin_anasayfa/slider_sil/$slider->slider_id/$slider->slider_resimyol"); ?>"><button class="btn btn-danger" type="submit">Sil</button></a></td>
                                        </tr>


                                   <?php  } ?>
                                      
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>


            </div>
           
        </div>




</body>
</html>

<?php include 'admin_footer.php'; ?>