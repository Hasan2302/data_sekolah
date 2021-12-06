<?php
 include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
			<h3>TABEL GURU</h3>
		</div> <hr>
		<a href="tambah_guru.php"><input type="button" value="Tambah" class="button2"></a>
		<div class="div-tabel">
		<table class="tabel" cellspacing="10">
			<tr align="left">
				<th><h3>NO</h3></th>
				<th><h3>KODE GURU</h3></th>
				<th><h3>NAMA</h3></th>
				<th><h3>JK</h3></th>
				<th><h3>ALAMAT</h3></th>
				<th><h3></h3></th>
			</tr>
<?php
 $no=1;
 $kode_guru=$_GET['kode_guru'];
 $sql="SELECT * FROM tb_guru";
 $query=mysqli_query($db_link, $sql);
 while ($data = mysqli_fetch_array($query))
 {
?>
		<tr>
			<td><?php echo $no ;?></td>
			<td><?php echo "$data[kode_guru]" ;?></td>
			<td><?php echo "$data[nama_guru]" ;?></td>
			<td><?php echo "$data[jk]" ;?></td>
			<td><?php echo "$data[alamat]" ;?></td>
			<td align="right"><a href="info_guru.php?kode_guru=<?php echo $data['kode_guru'];?>"><input type="button" value="info" class="button2"></a></td>

			<td>
			<a href="edit_guru.php?kode_guru=<?php echo $data['kode_guru'];?>"><input type="button" value="edit" class="button1"></a>
			<a href="hapus_guru.php?kode_guru=<?php echo $data['kode_guru'];?>"><input type="button" value="hapus" class="button"></a>
			</td>
			<?php $no++;
		}
		?>
		</tr>
	</table>
	</div>
	</div>
	<?php
	$kode_guru=$_GET['kode_guru'];
	$sql="SELECT * FROM tb_guru WHERE kode_guru='$kode_guru'";
	$query=mysqli_query($db_link, $sql);
	$data=mysqli_fetch_array($query); ?>
	<div class="formcard4">
	<h3 align="center">EDIT GURU</h3>
	<form action="aksiedit_guru.php" method="POST">
		<label>kode guru</label><br>
		<input type="text" name="kode_guru" value="<?php echo "$data[kode_guru]"; ?>" readonly/><br>
		<label>nama</label><br>
		<input type="text" name="nama_guru" value="<?php echo "$data[nama_guru]"; ?>"><br>
		<label>alamat</label><br>
		<input type="text" name="alamat" value="<?php echo "$data[alamat]"; ?>"><br>
		<input type="radio" name="jk" value="pria"> pria
		<input type="radio" name="jk" value="wanita"> wanita<br> <br>
		<input type="submit" name="submit" class="submit">
	</form>
</div>
</div>
</body>
<footer>
	<h3>footer</h3>
</footer>
</html>