<?php
//mulai sesi
session_start();
//koneksi database
include "../koneksi.php";
if(isset($_POST['submit']))
{
	//inisialisasi variabel
	$judul = @$_POST['judul'];
     $penerbit = @$_POST['penerbit'];
     $tahunterbit = @$_POST['tahunterbit'];
     $penulis = @$_POST['penulis'];
     $cover = @$_FILES['cover']["tmp_name"];
     $file = @$_FILES['file']["tmp_name"];

	mysqli_query($koneksi, "INSERT INTO buku (id, judul, penulis, penerbit, tahunterbit, cover, file)
			VALUES('', '$judul','$penulis','$penerbit','$tahunterbit', '$cover', '$file')");
		echo "<script>alert('Berhasil ditambah')</script>";
    

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah buku</title>
	<link rel="stylesheet" href="tambahbuku.css">
</head>
<body>
    
	<form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<h2>Tambah buku</h2>
		<input type="text" name="judul" placeholder="Judul buku" required>
		<input type="text" name="penulis" placeholder="Penulis" required>
		<input type="text" name="penerbit" placeholder="Penerbit" required>
		<input type="number" name="tahunterbit" required placeholder="Tahun terbit">
		<input type="file"  name="cover">
        <input type="file"  name="file">
		<div class="tombol">
			<input type="submit" name="submit" value="Tambah" style="color: white">
		</div>
		
	</form>
</body>
</html>