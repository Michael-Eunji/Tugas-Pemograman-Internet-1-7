<?php
$id = $_GET['nim'];
include 'modelktmk.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">
<head>
<title>Edit Data Kontrak Kuliah Mahasiswa</title>
</head>
<body>
<h1>Edit Data Mahasiswa</h1>
<a href="indexktmk.php">Kembali</a><br><br>
<form action="prosesktmk.php" method="post">
<label>NIM</label><br>
<input type="text" name="mk_id" value="<?php echo $data->mk_id ?>"><br>
<label>Nama</label><br>
<input type="text" name="nama" value="<?php echo $data->nama?>"><br>
<br><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>
</html>
