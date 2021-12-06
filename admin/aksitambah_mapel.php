<?php
include "koneksi.php";

	$id_mapel = $_POST['id_mapel'];
	$nama_mapel = $_POST['nama_mapel'];
	$kode_guru	= $_POST['kode_guru'];
	
	$query = mysqli_query($db_link, "INSERT INTO tb_mapel VALUES('$id_mapel','$nama_mapel','$kode_guru')");
	if($query) {
		header('location:data_mapel.php');
	} else {
		echo "gagal";
	}


?>