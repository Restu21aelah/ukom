<?php
include "../koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="detailpetugas.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
include "header.php";


   		//ambil data
        /*$ambil = mysqli_query($koneksi, "SELECT * FROM user WHERE status = 'petugas'");
   		while($data = mysqli_fetch_assoc($ambil))
   		{?>
   	
   	<?php echo $data['user_id']; ?>
   	<?php echo $data['nama']; ?>
   	<?php echo $data['username']; ?>
   	<?php echo $data['email']; ?>
   	<?php echo $data['password']; ?>
   				
   		<?php
   	    }
   		?>*/?>


<div class="container">
	<div class="detail">
		<h3 style="text-align: center;margin-top: 10px;">Detail Petugas</h3>

		<div class="main">
			
		</div>
	</div>
</div>
</body>
</html>