<?php
$id = $_GET['nim'];
include 'modelab.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">
<head>
<title>Edit Absen Mahasiswa</title>
</head>
<body>
<h1>Edit Absen Mahasiswa</h1>
<a href="indexab.php">Kembali</a><br><br>
<form action="prosesab.php" method="post">
<label>NIM</label><br>
<input type="text" name="nim" value="<?php echo $data->nim ?>"><br>
<label>Nama</label><br>
<input type="text" name="nama" value="<?php echo $data->nama ?>"><br>
<label>Matakuliah_ID</label><br>
<input type="number" name="mk_id" value="<?php echo $data->mk_id ?>"><br>
<label>Jam_Absen</label><br>
<input type="number" name="wkt_absen" value="<?php echo $data->wkt_absen ?>">
<br><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>
</html>