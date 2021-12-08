<html>
<head>
	<title>Login Admin</title>
    <link rel="stylesheet" href="admin/css/login.css">
</head>
<body>
    <div class="login">
	<h2>Login Admin</h2>
	<br/>
	<br/>
	<hr>
	<br/>
	<form method="post" action="admin/cek_login.php">
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
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>
	</form> <br>
	<div class="tombol-daftar">
	<a href="admin/daftar.php"><input type="submit" class="tombol-daftar1" value="Daftar Admin"></a>
	<a href="login_siswa.php"><input type="submit" class="tombol-daftar1" value="Masuk Sebagai Siswa"></a>
	</div>
    </div>

</body>
</html>