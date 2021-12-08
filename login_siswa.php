<?php
 include "admin/koneksi.php";
?>
<html>
<head>
	<title>Login Siswa</title>
    <link rel="stylesheet" href="siswa/css/login.css">
</head>
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
}
?>
<body>
    <div class="login">
	<h2>Login Siswa</h2>
	<br/>
	<br/>
	<hr>
	<br/>
    <?php
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$sql = mysqli_query($db_link, "select * from tb_mahasiswa where nis_mahasiswa like '%".$cari."%'");		
		}else{
			$sql = mysqli_query($db_link, "select * from tb_mahasiswa");		
		}
		while ($data = mysqli_fetch_array($sql));
?>
	<form action="siswa/data_siswa.php" method="get">
	<!-- <input class="cari" type="text" name="cari" placeholder="cari..">
	<input class="cari2" type="submit" value="Cari"> -->
   
    <table class="tabel1">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="cari" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>
        </form> <br> <br>
        <div class="tombol-daftar">
	    <a href="index.php"><input type="submit" class="tombol-daftar2" value="Masuk Sebagai Admin"></a>
	    </div>
</body>
</html>