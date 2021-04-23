<?php
include 'modelmk.php';
if (isset($_POST['submit_simpan'])) {
$nim = $_POST['nim'];
$nama_mk = $_POST['nama_mk'];
$model = new Model();
$model->insert($mk_id, $nama);
header ('location : indexmk.php');
}
if (isset($_POST['submit_edit'])) {
$nim = $_POST['nim'];
$nama_mk = $_POST['nama_mk'];
 $model = new Model();
 $model->update($mk_id, $nama);
 header('location:indexmk.php');
}
if (isset($_GET['nim'])) {
 $id = $_GET['nim'];
 $model = new Model();
 $model->delete($id);
 header('location:indexmk.php');
}