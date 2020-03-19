<!DOCTYPE html>
<html>
<head>
	<title>Formulir</title>
</head>
<body>
 
	<h1>Formulir</h1>
	<form action="/formulir/proses" method="post">
		<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
		Nama : <input type="text" name="nama">
		Alamat : <input type="text" name="alamat">
		<input type="submit" value="Simpan">
	</form>
 
</body>
</html>