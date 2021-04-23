<?php
$id = $_GET['nim'];
include 'modelmhs.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">
<head>
<title>Edit Data Mahasiswa</title>
</head>
<body>
<h1>Edit Data Mahasiswa</h1>
<a href="indexmhs.php">Kembali</a><br><br>
<form action="prosesmhs.php" method="post">
<label>NIM</label><br>
<input type="text" name="nim" value="<?php echo $data->nim ?>"><br>
<label>Nama</label><br>
<input type="text" name="nama" value="<?php echo $data->nama ?>"><br>
<label>Semester</label><br>
<input type="text" name="tugas" value="<?php echo $data->semester ?>"><br>
<label>Alamat</label><br>
<input type="text" name="uas" value="<?php echo $data->alamat ?>"><br>
<label>Telepon</label><br>
<input type="number" name="uas" value="<?php echo $data->Telepon ?>"><br>
<label>Email</label><br>
<input type="text" name="email" value="<?php echo $data->email ?>">
<br><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>
</html>
