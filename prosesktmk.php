<?php
include 'modelktmk.php';
if (isset($_POST['submit_simpan'])) {
 $nim = $_POST['mk_id'];
 $matakuliah = $_POST['nama'];
 $model = new Model();
 $model->insert($mk_id, $nama);
header ('location : indexktmk.php');
}
if (isset($_POST['submit_simpan'])) {
    $nim = $_POST['mk_id'];
    $matakuliah = $_POST['nama'];
    $model = new Model();
    $model->insert($mk_id, $nama);
   header ('location : indexktmk.php');
}
if (isset($_GET['mk_id'])) {
 $id = $_GET['mk_id'];
 $model = new Model();
 $model->delete($id);
 header('location:indexktmk.php');
}