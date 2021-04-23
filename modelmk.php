<?php
include 'connection.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();
 }
 
public function insert($nim, $nama_mk)
{
 $sql = "INSERT INTO tbl_mk (nim, nama_mk) VALUES
('$mk_id', '$nama')";
$this->conn->query($sql);
}

public function tampil_data()
{
 $sql = "SELECT * FROM tbl_mk";
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
 $sql = "SELECT * FROM tbl_mk WHERE nim='$id'";
 $bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris = $obj;
 }
 return $baris;
}
public function update($mk_id, $nama)
{
 $sql = "UPDATE tbl_mk SET nim='$nim', nama='$nama_mk'
WHERE nim='$nim'";
 $this->conn->query($sql);
} 
public function delete($nim)
{
 $sql = "DELETE FROM tbl_mk WHERE nim='$nim'";
 $this->conn->query($sql);
}
}
