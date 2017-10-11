<?php include 'header.php' ?>


<!DOCTYPE html>
<html>
<head>
	<title>menu ekleme</title>
</head>
<body>


<form action="<?php echo base_url("Anasayfa/insert"); ?>" method="POST">
	
<input type="text" name="menu_ad" placeholder="menu adı">
<input type="text" name="menu_link" placeholder="menu linki">
<button type="submit">EKle</button>

</form>

</body>
</html>
	


<?php include 'footer.php' ?>