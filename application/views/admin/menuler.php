 <?php include 'admin_header.php'; ?> 
 <?php include 'admin_sidebar.php'; ?> 

<!DOCTYPE html>
<html>
<head>
	<title>Menüler</title>
</head>
<body>

<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Menüler</h1>
                        <h1 class="page-subhead-line">Sitenizdeki menüleri bu sayfadan ayarlayabilirsiniz...  </h1>

                    </div>
                </div>             
               
              <a href="<?php echo base_url("admin/admin_anasayfa/menu_ekle"); ?>"> <button class="btn btn-success" type="submit">Menü Ekle</button></a> <hr>
                         <div class="row">
                            <div class="col-md-8">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px;">Menü id</th>
                                            <th style="width: 300px;">Menü Adı</th>
                                            <th style="width: 300px;">Menü Linki</th>
                                            <th style="width: 10px;"></th>
                                            <th style="width: 10px;"></th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($menucek as $menu) { ?>
                                    

                                    		  <tr>
                                            <td><?php echo $menu->menu_id; ?></td>
                                            <td><?php echo $menu->menu_ad; ?></td>
                                            <td><?php echo $menu->menu_link; ?></td>
                                            <td>
                                            	<a href="<?php echo base_url("admin/admin_anasayfa/menu_duzenle/$menu->menu_id"); ?>"><button class="btn btn-success" type="submit">Düzenle</button></a>
                                            </td>
                                            <td><a href="<?php echo base_url("admin/admin_anasayfa/sil/$menu->menu_id"); ?>"><button class="btn btn-danger" type="submit">Sil</button></a></td>
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