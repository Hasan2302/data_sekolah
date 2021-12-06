<?php
include "koneksi.php";
	$nis_mahasiswa=$_GET['nis_mahasiswa'];
	$query=mysqli_query($db_link,"DELETE FROM tb_mahasiswa WHERE nis_mahasiswa='$nis_mahasiswa'");
	if ($query) {
		header('location:data_siswa.php');
	} else {
		echo "gagal";
	}
	?>