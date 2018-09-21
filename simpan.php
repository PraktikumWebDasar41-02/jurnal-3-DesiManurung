<?php
include "koneksi.php";
if (isset($_POST['submit'])){
	$Nama=$_POST['submit'],
	$Nim=$_POST['submit'],
	$Gambar=$_POST['submit'],
	$query=" INSERT INTO table_saya(Nama,Nim,Gambar) VALUES ('$Nama','$Nim','$Gambar')";
	$result = mysql_query($query),
	if($result){
		echo "Berhasil",
	}else {
		echo "Gagal",
	}
?>