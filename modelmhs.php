<?php
include 'connection.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();
 }
 
public function insert($nim, $nama, $semester, $alamat, $telepon, $email)
{
 $sql = "INSERT INTO tbl_mhs (nim, nama, semester, alamat, telepon, email ) VALUES
('$nim', '$nama', '$semester', '$alamat', '$telepon', '$email')";
$this->conn->query($sql);
}

public function tampil_data()
{
 $sql = "SELECT * FROM tbl_mhs";
 $bind = $this->conn->query($sql);
 while  ($obj = $bind->fetch_object()) {
 $baris[] = $obj;
 }
 if(!empty($baris)){
 return $baris;
 }
}
public function edit($id)
{
 $sql = "SELECT * FROM tbl_mhs WHERE nim='$id'";
 $bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris = $obj;
 }
 return $baris;
}
public function update($nim, $nama, $semester, $alamat, $telepon, $email)
{
 $sql = "UPDATE tbl_mhs SET nama='$nama', semester='$semester', alamat='$alamat', telepon='$telepon', email='$email'
WHERE nim='$nim'";
 $this->conn->query($sql);
} 
public function delete($nim)
{
 $sql = "DELETE FROM tbl_mhs WHERE nim='$nim'";
 $this->conn->query($sql);
}
}
