<?php
//mulai sesi
session_start();

//koneksi database
include "koneksi.php";
$error = "";

	if(@$_SESSION['status'] == "admin")
	{
		header("Location: admin/index.php");
	}
	elseif(@$_SESSION['status'] == "petugas")
	{
		header("Location: petugas/index.php");
	}
	elseif(@$_SESSION['status'] == "peminjam")
	{
		header("Location: peminjam/index.php");
	}
if(isset($_POST['submit']))
{
	//inisialisasi variabel
     $username = @$_POST['username'];
     $password = @$_POST['password'];
     $email = @$_POST['email'];

     $status = mysqli_query($koneksi, "SELECT status FROM user WHERE username = '$username'");
     $status = mysqli_fetch_assoc($status);
     //cek 
     $user = mysqli_query($koneksi, "SELECT * FROM user WHERE username ='$username'");
     
     $jumlah = mysqli_num_rows($user);
     if($jumlah > 0)
     {
     	$user = mysqli_fetch_assoc($user);
     if($user["username"] == $username AND $user["password"] == $password)
     {
     	$_SESSION['login'] = $user["status"];
     	$_SESSION['status'] = $user["status"];
     	//arahkan ke halaman masing-masing
     	if($user["status"] == "admin")
     	{
     		header("Location: admin/index.php");
     	}
     	elseif($user["status"] == "peminjam")
     	{
     		header("Location: peminjam/index.php");
     	}
     	elseif($user["status"] == "petugas")
     	{
     		header("Location: petugas/index.php");
     	}
     }
     else
     {
		$error = "Username atau password salah";
     }
     }
     else
     {
     	$error = "Username atau password salah";
     }
    
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Masuk</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<h2>Masuk</h2>
			<input type="text" name="username" placeholder="Username" required>
	    	<input type="password" name="password" placeholder="Password" required>
		    <input type="hidden" name="status">
		<div class="tombol">
			<a href="index.php">Daftar</a>
			<input type="submit" name="submit" value="Lanjutkan" style="color: white">
		</div>
		<samp><?php echo $error;?></samp>
	</form>
</body>
</html>