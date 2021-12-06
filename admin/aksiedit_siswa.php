<?php
 include "koneksi.php";

 $nis_mahasiswa	= $_POST['nis_mahasiswa'];
 $nama_mahasiswa	= $_POST['nama_mahasiswa'];
 $jk_mahasiswa	= $_POST['jk_mahasiswa'];
 $alamat_mahasiswa	= $_POST['alamat_mahasiswa'];

 $sql2="UPDATE tb_mahasiswa SET nama_mahasiswa='$nama_mahasiswa', jk_mahasiswa='$jk_mahasiswa', alamat_mahasiswa='$alamat_mahasiswa' WHERE nis_mahasiswa='$nis_mahasiswa'";
 $query=mysqli_query($db_link, $sql2);
 if ($query) {
 	header('location:data_siswa.php');
 } else {
 	echo "gagal";
 }
?>