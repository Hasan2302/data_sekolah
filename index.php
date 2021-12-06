<html>
<head>
	<title>Login Admin</title>
    <link rel="stylesheet" href="admin/css/style.css">
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
	<a href="admin/daftar.php"><input type="submit" class="tombol-daftar" value="Daftar"></a>
    </div>

</body>
</html>