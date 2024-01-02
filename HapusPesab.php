<?php 
	$koneksi = mysqli_connect("localhost", "root", "", "dbimpal") or die("Gagal Koneksi Database");
	$idPesan = $_GET['idPesan'];
	$query="DELETE FROM pesan WHERE idPesan='$idPesan'";
	$sql = mysqli_query($koneksi,$query) or die("Gagal input:".$query);
	header("location:tampilPesan.php");
?>
