<?php include 'admin_header.php' ;
		include 'admin_sidebar.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sayhaberler sayfasıfa Sayfası</title>
</head>
<body>

<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="page-head-line">Sayfa</h1>
                        <h1 class="page-subhead-line">Sitenizdeki Sayfalari bu sayfadan ayarlayabilirsiniz...  </h1>

                    </div>
                </div>             
               
              <a href="<?php echo base_url("admin/admin_anasayfa/sayfa_ekle"); ?>"> <button class="btn btn-success" type="submit">Sayfa Ekle</button></a> <hr>
                         <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px;">Sayfa id</th>
                                            <th style="width: 300px;">Sayfa Resimyol</th>
                                            <th style="width: 300px;">Sayfa Başlık</th>
                                            <th style="width: 300px;">Sayfa Tarih</th>
                                            <th style="width: 300px;">Sayfa Yazar</th>
                                            <th style="width: 300px;">Sayfa Detay</th>
                                            <th style="width: 10px;"></th>
                                            <th style="width: 10px;"></th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($sayfacek as $sayfa) { ?>
                                    

                                    		  <tr>
                                            <td><?php echo $sayfa->sayfa_id; ?></td>
                                            
                                            <td>

                                            	<img src="<?php echo base_url($sayfa->sayfa_resimyol); ?>" style="width: 200px;">

                                            </td>

                                            <td><?php echo $sayfa->sayfa_baslik; ?></td>
                                            <td><?php echo $sayfa->sayfa_tarih; ?></td>
                                              <td><?php echo $sayfa->sayfa_yazar; ?></td>
                                                <td><?php echo $sayfa->sayfa_detay; ?></td>
                                            <td>
                                            	<a href="<?php echo base_url("admin/admin_anasayfa/sayfa_duzenle/$sayfa->sayfa_id"); ?>"><button class="btn btn-success" type="submit">Düzenle</button></a>
                                            </td>
                                            <td><a href="<?php echo base_url("admin/admin_anasayfa/sayfa_sil/$sayfa->sayfa_id/$sayfa->sayfa_resimyol"); ?>"><button class="btn btn-danger" type="submit">Sil</button></a></td>
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