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


    mysqli_query($koneksi, "UPDATE ");
	mysqli_query($koneksi, "INSERT INTO user(user_id, username, nama, email, password, status)
			VALUES('', '$username','$nama','$email','$password', '$status')");
		echo "<script>alert('Registrasi berhasil')</script>";

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Masuk</title>
	<link rel="stylesheet" href="index.css">
    <style>
        *
{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}
body
{
	height: 100vh;
	font-family: sans-serif;
	display: flex;
	align-items: center;
	justify-content: center;
}
form
{
	width:  300px;
	height: 200px;
	display: flex;
	flex-direction: column;
	justify-content: space-around;
}
form > h2
{
	text-align: center;

}
form input
{
	padding:  5px;
	font-size:  17px;
	border-radius:  3px;
	border: 1px solid black;
	outline: 1px solid black;
}
form > div.tombol
{
	display: flex;
	justify-content: space-between;
}
div.tombol > input
{
	outline:  none;
	border:  none;
	background-color: #6aa84f;
	padding:  5px 20px;
	border:  2px solid #6aa84f;
}
div.tombol > a
{
	display: block;
	color: #6aa84f;
	text-decoration: none;
	border:  2px solid #6aa84f;
	padding:  5px 20px;
	border-radius:  3px;
}
form > samp
{
	color: red;
	margin-top: 10px;
}
div.container
{
	width:  100%;
	display: flex;
	justify-content: space-between;
}
div.container > input
{
	width:  40%;
}
    </style>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<h2>Daftar</h2>
		<input type="text" name="nama" placeholder="Nama lengkap" required>
		<input type="text" name="username" placeholder="Username" required>
		<input type="password" name="password" placeholder="Password" required>
		<input type="email" name="email" required placeholder="Email">
		<input type="hidden" value="peminjam" name="status">
		<div class="tombol">
			<a href="index.php">Masuk</a>
			<input type="submit" name="submit" value="Lanjutkan" style="color: white">
		</div>
		<samp><?php echo $error;?></samp>
		
	</form>
</body>
</html>