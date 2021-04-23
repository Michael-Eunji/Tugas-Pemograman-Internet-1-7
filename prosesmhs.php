<?php
include 'modelmhs.php';
if (isset($_POST['submit_simpan'])) {
 $nim = $_POST['nim'];
 $nama = $_POST['nama'];
 $semester = $_POST['semester'];
 $alamat = $_POST['alamat'];
 $telepon = $_POST['telepon'];
 $email = $_POST['email'];
 $model = new Model();
 $model->insert($nim, $nama, $semester, $alamat, $telepon, $email);
header ('location : indexmhs.php');
}
if (isset($_POST['submit_edit'])) {
 $nim = $_POST['nim'];
 $nama = $_POST['nama'];
 $semester = $_POST['semester'];
 $alamat = $_POST['alamat'];
 $telepon = $_POST['telepon'];
 $email = $_POST['email'];
 $model = new Model();
 $model->update($nim, $nama, $semester, $alamat, $telepon, $email);
 header('location:indexmhs.php');
}
if (isset($_GET['nim'])) {
 $id = $_GET['nim'];
 $model = new Model();
 $model->delete($id);
 header('location:indexmhs.php');
}