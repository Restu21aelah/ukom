<?php
session_start();
include "../koneksi.php";

if(!isset($_SESSION["status"]))
{
	header("location: ../index.php");
}
elseif($_SESSION["status"] == "petugas")
{	
	header("location: ../petugas/index.php");
}
elseif($_SESSION["status"] == "admin")
{	
	header("location: ../admin/index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Landing page</title>
</head>
<body>
	<?php include("header.php");?>
    <div class="container">
		<div class="card" style="background-color:orange;">
			<img src="../bahan/bahan/buku1/paris_sejarah_tersembunyi.jpg" width="100%" height="250px">
			<div class="teks">
				<h3>Paris</h3>
				<p>Restu Aji Prasetyo</p>
			</div>
		</div>
		<div class="card" style="background-color:orange;">
			<img src="../bahan/bahan/buku2/sejarah_islam.jpg" width="100%" height="250px">
			<div class="teks">
				<h3>Sejarah Islam</h3>
				<p>Restu Aji Prasetyo</p>
			</div>
		</div>
		<div class="card" style="background-color:orange;">
			<img src="../bahan/bahan/buku3/oligarki.jpg" width="100%" height="250px">
			<div class="teks">
				<h3>Oligarki</h3>
				<p>Restu Aji Prasetyo</p>
			</div>
		</div>
		<div class="card" style="background-color:orange;">
			<img src="../bahan/bahan/buku4/kitab_anti.jpg" width="100%" height="250px">
			<div class="teks">
				<h3>Kitab anti bodoh</h3>
				<p>Restu Aji Prasetyo</p>
			</div>
		</div>
		<div class="card" style="background-color:orange;">
			<img src="../bahan/bahan/buku5/politik.jpg" width="100%" height="250px">
			<div class="teks">
				<h3>Dasar ilmu komputer</h3>
				<p>Restu Aji Prasetyo</p>
			</div>
		</div>
		<div class="card" style="background-color:orange;">
			<img src="../bahan/bahan/buku6/kjd.jpg" width="100%" height="250px">
			<div class="teks">
				<h3>Dasar jaringan</h3>
				<p>Restu Aji Prasetyo</p>
			</div>
		</div>
		<div class="card" style="background-color:orange;">
			<img src="../bahan/bahan/buku1/paris_sejarah_tersembunyi.jpg" width="100%" height="250px">
			<div class="teks">
				<h3>Paris</h3>
				<p>Restu Aji Prasetyo</p>
			</div>
		</div>
		<div class="card" style="background-color:orange;">
			<img src="../bahan/bahan/buku1/paris_sejarah_tersembunyi.jpg" width="100%" height="250px">
			<div class="teks">
				<h3>Paris</h3>
				<p>Restu Aji Prasetyo</p>
			</div>
		</div>
		<div class="card" style="background-color:orange;">
			<img src="../bahan/bahan/buku1/paris_sejarah_tersembunyi.jpg" width="100%" height="250px">
			<div class="teks">
				<h3>Paris</h3>
				<p>Restu Aji Prasetyo</p>
			</div>
		</div>
		
    </div>
</body>
</html>