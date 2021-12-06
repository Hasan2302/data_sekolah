	
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
				$no=1;
				$kode_guru=$_GET['kode_guru'];
				$query = mysqli_query($db_link,"SELECT tb_guru.kode_guru, tb_guru.nama_guru, tb_mapel.nama_mapel, tb_guru.jk, tb_guru.alamat 
				FROM tb_guru 
				JOIN tb_mapel 
				ON tb_mapel.kode_guru = tb_guru.kode_guru 
				WHERE tb_mapel.kode_guru='$kode_guru'");
				while ($data = mysqli_fetch_array($query)) {
					?>
				<div class="formcard4">
					<H3>PROFIL GURU</H3>
					<br>
					<table border="1px" cellspacing="0">
						<tr>
							<th><H5>NO</H5></th>
							<th><H5>NAMA GURU</H5></th>
							<th><H5>JENIS KELAMIN</H5></th>
							<th><H5>ALAMAT</H5></th>
							<th><H5>NAMA MAPEL</H5></th>
							<th><H5></H5></th>
						</tr>
						<tr>
							<td><?php echo $no ;?></td>
							
							<td><?php echo "$data[nama_guru]" ;?></td>
							
							<td><?php echo "$data[jk]" ;?></td>
							
							<td><?php echo "$data[alamat]" ;?></td>
							
							<td><?php echo "$data[nama_mapel]" ;?></td>
						</tr>
					</table>
						<!-- <label>NO</label> : <?php echo $no++ ;?></td><br>
						<label>nama</label> : <?php echo $data['nama_guru']; ?><br>
						<label>jenis kelamin</label> : <?php echo $data['jk']; ?><br>
						<label>alamat</label> : <?php echo $data['alamat']; ?><br>
						<label>nama pelajaran</label> : <?php echo $data['nama_mapel']; ?><br> -->
				</div>
			<?php } ?>
	</div>
</body>
<footer>
	<h3>footer</h3>
</footer>
</html>

