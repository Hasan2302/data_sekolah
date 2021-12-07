<?php
 include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<nav>
	<h1>SELAMAT DATANG</h1>
</nav>
<a href="../index.php"><input type="button" value="Log Out" class="cardnav"></a>
<a href="home.php"><input type="button" value="Home" class="cardnav"></a>
<a href="data_siswa.php"><input type="button" value="Data siswa" class="cardnav"></a>
<a href="data_guru.php"><input type="button" value="Data guru" class="cardnav"></a>
<a href="data_mapel.php"><input type="button" value="Data mapel" class="cardnav"></a>
<div class="formcard">
	<div class="formcard3">
		<div class="formtop">
		<h3>TABEL MAHASISWA</h3>
		</div> <hr>
		
		<a href="tambah_siswa.php"><input type="button" value="Tambah" align="left" class="button2"></a>
		<div class="div-tabel">
	<table class="tabel" cellspacing="10">
		<tr align="left">
			<th><h3>NO</h3></th>
			<th><h3>NIS</h3></th>
			<th><h3>NAMA</h3></th>
			<th><h3>JK</h3></th>
			<th><h3>ALAMAT</h3></th>
			<th><h3></h3></th>
		</tr>
<?php
$no=1;
$nis_mahasiswa=$_GET['nis_mahasiswa'];
$sql="SELECT * FROM tb_mahasiswa";
$query=mysqli_query($db_link, $sql);
while ($data = mysqli_fetch_array($query))
{
?>
	<tr>
		<td><?php echo $no;?></td>
		<td><?php echo "$data[nis_mahasiswa]" ;?></td>
		<td><?php echo "$data[nama_mahasiswa]" ;?></td>
		<td><?php echo "$data[jk_mahasiswa]" ;?></td>
		<td><?php echo "$data[alamat_mahasiswa]" ;?></td>
		<td align="right"><a href="info_siswa.php?nis_mahasiswa=<?php echo $data['nis_mahasiswa'];?>"><input type="button" value="info" class="button2"></a></td>

		<?php $no++;
	}
	?>
	</tr>
	</table>
</div>
</div>
<?php
	$nis_mahasiswa=$_GET['nis_mahasiswa'];
	$sql2="SELECT * FROM tb_mahasiswa WHERE nis_mahasiswa='$nis_mahasiswa'";
	$query=mysqli_query($db_link, $sql2);
	$data=mysqli_fetch_array($query);?>
<div class="formcard4">
	<h3>EDIT DATA SISWA</h3>
	<form action="aksiedit_siswa.php" method="POST">
			<label>nis</label><br>
			<input type="text" name="nis_mahasiswa" value="<?php echo "$data[nis_mahasiswa]" ;?>" readonly/><br>
			<label>nama</label><br>
			<input type="text" name="nama_mahasiswa" value="<?php echo "$data[nama_mahasiswa]" ;?>"><br>
			<label>alamat</label><br>
			<input type="text" name="alamat_mahasiswa" value="<?php echo "$data[alamat_mahasiswa]" ;?>"><br>
			<input type="radio" name="jk_mahasiswa" value="pria"> pria
			<input type="radio" name="jk_mahasiswa" value="wanita"> wanita<br>

			<input type="submit" value="OK" class="submit">
	</form>	
</div>
</div>
</body>
<footer><h3>footer</h3></footer>
</html>