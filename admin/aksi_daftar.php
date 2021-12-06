<?php
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO login (username, password)  VALUES ('$username','$password')";
$query = mysqli_query($db_link, $sql);
if($query) {
	echo "<script>alert('Sukses');window.location='data_siswa.php'</script>";
} else {
	echo "gagal";
}

?>