<?php
//mulai sesi
session_start();
//koneksi database
include "../koneksi.php";
$error = "";
if(isset($_POST['submit']))
{
	//inisialisasi variabel
	 $nama = @$_POST['nama'];
     $username = @$_POST['username'];
     $password = @$_POST['password'];
     $email = @$_POST['email'];
     $status = @$_POST['status'];


     //cek kesamaan username
     // $user = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
     // $user = mysqli_num_rows($user);
     // echo $user;
     // if($user > 0)
     // {
     // 	$error = "Username telah dipakai";
     // }
     // else
     // {
		mysqli_query($koneksi, "INSERT INTO user(user_id, username, nama, email, password, status)
			VALUES('', '$username','$nama','$email','$password', '$status')");
		echo "<script>alert('Berhasil ditambahkan')</script>";
     // }

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Masuk</title>
	<link rel="stylesheet" href="tambahpetugas.css">
</head>
<body>
<?php include("header.php");?>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<h2>Tambah petugas</h2>
		<input type="text" name="nama" placeholder="Nama lengkap" required>
		<input type="text" name="username" placeholder="Username" required>
		<input type="password" name="password" placeholder="Password" required>
		<input type="email" name="email" required placeholder="Email">
		<input type="hidden" value="petugas" name="status">
		<div class="tombol">
			<input type="submit" name="submit" value="Tambah" style="color: white">
		</div>
		<samp><?php echo $error;?></samp>
		
	</form>
</body>
</html>