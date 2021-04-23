<!doctype html>
<html lang="en">
<head>
<title>Tambah Data Absen</title>
</head>
<body>
<h1>Tambah</h1>
<a href="indexab.php">Kembali</a><br><br>
<form action="prosesab.php" method="post">
<label>NIM</label><br>
<input type="text" name="nim"><br>
<label>Nama</label><br>
<input type="text" name="nama"><br>
<label>Matakuliah_ID</label><br>
<input type="number" name="mk_id"><br>
<label>Jam_Absen</label><br>
<input type="number" name="wkt_absen">
<br><br>
<button type="submit" name="submit_simpan">Submit</button>
<button type="reset">Reset</button>
</form>
</body>
</html>
