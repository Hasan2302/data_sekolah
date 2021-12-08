<?php
 include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>halo</title>
	<link rel="stylesheet" type="text/css" href="css/login1.css">
</head>
<body>
<div class="login">
	<h2>DAFTAR</h2>
	<br/>
	<br/>
	<hr>
	<br/>
	<form method="post" action="aksi_daftar.php">
		<table class="tabel1">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="DAFTAR"></td>
			</tr>
		</table>
	</form> <br>
	<a href="../index.php"><input type="submit" value="back" class="tombol-daftar3"></a>
</div>
</body>
</html>