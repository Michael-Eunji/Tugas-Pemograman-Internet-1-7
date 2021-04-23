<?php
include 'modelab.php';
if (isset($_POST['submit_simpan'])) {
 $nim = $_POST['nim'];
 $nama = $_POST['nama'];
 $mk_id = $_POST['mk_id'];
 $wkt_absen = $_POST['wkt_absen'];
 $model = new Model();
 $model->insert($nim, $nama, $mk_id, $wkt_absen);
header ('location : indexab.php');
}
if (isset($_POST['submit_edit'])) {
 $nim = $_POST['nim'];
 $nama = $_POST['nama'];
 $mk_id = $_POST['mk_id'];
 $wkt_absen = $_POST['wkt_absen'];
 $model = new Model();
 $model->update($nim, $nama, $mk_id, $wkt_absen);
 header('location:indexab.php');
}
if (isset($_GET['nim'])) {
 $id = $_GET['nim'];
 $model = new Model();
 $model->delete($id);
 header('location:indexab.php');
}