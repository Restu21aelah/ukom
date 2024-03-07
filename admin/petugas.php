<?php
include "../koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="petugas.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
include "header.php";
?>
<div class="content">
   <a href="tambah_petugas.php" style="display: inline-block; margin-top: 50px; padding: 10px 20px;background-color: darkcyan;color: white; text-decoration-line: none;">Tambah Petugas</a>
   <table>
   	
   	<thead>
   		<tr>
   			<th>ID Petugas</th>
   			<th>Username</th>
   			<th>Nama</th>
   			<th>Email</th>
   			<th>password</th>
   			<th>Aksi</th>
   		</tr>
   	</thead>

   	<tbody>
   		<?php
   		//ambil data
        $ambil = mysqli_query($koneksi, "SELECT * FROM user WHERE status = 'petugas'");
   		while($data = mysqli_fetch_assoc($ambil))
   		{?>
   			<tr>
   			<th><?php echo $data['user_id']; ?></th>
   			<th><?php echo $data['nama']; ?></th>
   			<th><?php echo $data['username']; ?></th>
   			<th><?php echo $data['email']; ?></th>
   			<th><?php echo $data['password']; ?></th>
   			<th class="aksi">
   				<a href="detailpetugas.php?user_id=<?php echo $data['user_id']; ?>">Detail</a>
   				<a href="editpetugas.php?user_id=<?php echo $data['user_id']; ?>" style="background-color: green;">Edit</a>
   				<a href="hapuspetugas.php?user_id=<?php echo $data['user_id']; ?>" style="background-color: red;">Hapus</a>
   			</th>
   		    </tr>
   		<?php
   	    }
   		?>
   		
   	</tbody>
   </table>
</div>

</body>
</html>