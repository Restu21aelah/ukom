<?php
session_start();
include "../koneksi.php";

if(!isset($_SESSION['status']))
{
	header("Location: ../index.php");
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
		<div class="word">
			<div class="inti">
				<div class="item" style="background-color: ;"></div>
			    <div class="item"></div>
			    <div class="item"></div>
			</div>
			
		</div>

		<img width="50%" height="100%" src="../bahan/bahan/Studying-amico.png">
		
	</div>
</body>
</html>