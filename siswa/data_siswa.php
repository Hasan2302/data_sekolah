<?php
 include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>halo</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
<nav>
<form action="" method="get">
	<input class="cari" type="text" name="cari" placeholder="cari..">
	<input class="cari2" type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
}
?>
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
		<div class="div-tabel">
		<table class="tabel" cellspacing="10">
		<tr align="left">
			<th><h3>NO</h3></th>
			<th><h3>NAMA</h3></th>
			<th><h3>JK</h3></th>
			<th><h3></h3></th>
		</tr>
<?php
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$sql = mysqli_query($db_link, "select * from tb_mahasiswa where nama_mahasiswa like '%".$cari."%'");		
		}else{
			$sql = mysqli_query($db_link, "select * from tb_mahasiswa");		
		}
		$no=1;
		while ($data = mysqli_fetch_array($sql))
		{
?>
	<tr>
		<td><?php echo $no;?></td>
		<td><?php echo "$data[nama_mahasiswa]" ;?></td>
		<td><?php echo "$data[jk_mahasiswa]" ;?></td>
		<td align="right"><a href="info_siswa.php?nis_mahasiswa=<?php echo $data['nis_mahasiswa'];?>"><input type="button" value="info" class="button2"></a></td>
		
		<?php $no++;
	}
	?>
	</tr>
	</table>
	</div>
</div>
</div>
</body>
<footer><h3>footer</h3></footer>
</html>