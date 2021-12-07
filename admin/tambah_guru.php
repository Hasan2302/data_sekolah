<?php
 include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/style3.css">
</head>
<body>
<nav>

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
$carikode = mysqli_query($db_link, "select max(kode_guru) from tb_guru") or die (mysqli_error);
$datakode = mysqli_fetch_array($carikode);
if($datakode) {
	$nilaikode = substr($datakode[0], 1);
	$kode = (int) $nilaikode;
	$kode = $kode + 1;
	$hasilkode = "g".str_pad($kode, 2, "0", STR_PAD_LEFT);
} else {
	$hasilkode = "g01";
}
?>
	<div class="formcard4">
	<h3 align="center">TAMBAH GURU</h3> <br>
	<form action="aksitambah_guru.php" method="POST">
		<label>kode guru</label><br>
		<input type="text" name="kode_guru" value="<?php echo $hasilkode; ?>" readonly><br>
		<label>nama</label><br>
		<input type="text" name="nama_guru"><br>
		<label>alamat</label><br>
		<input type="text" name="alamat"><br>
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