<?php
session_start();
include "../koneksi.php";
$id = $_GET['user_id'];
$hapus = mysqli_query($koneksi, "DELETE FROM user WHERE user_id = $id");
header("Location: petugas.php")
?>