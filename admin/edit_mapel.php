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
		<h3>TABEL MAPEL</h3>
	</div> <hr>
	
	<a href="tambah_mapel.php"><input type="button" value="Tambah" class="button2"></a>
	<div class="div-tabel">
	<table class="tabel" cellspacing="10" border="0">
		<tr align="left">
			<th>NO</th>
			<th>ID MAPEL</th>
			<th>NAMA MAPEL</th>
			<th></th>
		</tr>
<?php
 $no=1;
 $id_mapel=$_GET['id_mapel'];
 $sql="SELECT * FROM tb_mapel";
 $query=mysqli_query($db_link, $sql);
 while ($data = mysqli_fetch_array($query))
 {
?>
		<tr>
			<td><?php echo $no ;?></td>
			<td><?php echo "$data[id_mapel]" ;?></td>
			<td><?php echo "$data[nama_mapel]" ;?></td>

			<td>
			<a href="edit_mapel.php?id_mapel=<?php echo $data['id_mapel'];?>"><input type="button" value="edit" class="button1"></a>
			<a href="hapus_mapel.php?id_mapel=<?php echo $data['id_mapel'];?>"><input type="button" value="hapus" class="button"></a>
			</td>
			<?php $no++;
		}
		?>
		</tr>
	</table>
	</div>
</div>
<?php
	$id_mapel=$_GET['id_mapel'];
	$sql="SELECT * FROM tb_mapel WHERE id_mapel='$id_mapel'";
	$query=mysqli_query($db_link, $sql);
	$data=mysqli_fetch_array($query);
	?>
<div class="formcard4">
	<h3 align="center">EDIT MAPEL</h3>
	<form action="aksiedit_mapel.php" method="POST">
		<label>kode guru</label><br>
		<input type="text" name="kode_guru" value="<?php echo "$data[kode_guru]"; ?>" readonly><br>
		<label>id mapel</label><br>
		<input type="text" name="id_mapel" value="<?php echo "$data[id_mapel]"; ?>" readonly><br>
		<label>nama mapel</label><br>
		<input type="text" name="nama_mapel" value="<?php echo "$data[nama_mapel]"; ?>"><br>
		<input type="submit" name="submit" class="submit">
	</form>
</div>
</div>
</body>
<footer>
	<h3>footer</h3>
</footer>
</html>