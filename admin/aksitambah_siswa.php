<?php
 include "koneksi.php";

 $nis_mahasiswa	= $_POST['nis_mahasiswa'];
 $nama_mahasiswa	= $_POST['nama_mahasiswa'];
 $jk_mahasiswa	= $_POST['jk_mahasiswa'];
 $alamat_mahasiswa	= $_POST['alamat_mahasiswa'];

 $sql="INSERT INTO tb_mahasiswa (nis_mahasiswa, nama_mahasiswa, jk_mahasiswa, alamat_mahasiswa) VALUES ('$nis_mahasiswa','$nama_mahasiswa','$jk_mahasiswa','$alamat_mahasiswa')";
 $query=mysqli_query($db_link, $sql);
 if ($query) {
 	header('location:data_siswa.php');
 } else {
 	echo "NIS tidak boleh sama";
 }
?>