<?php
include 'connection.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();
 }
 
public function insert($mk_id, $nama)
{
 $sql = "INSERT INTO tbl_kontrakmk (mk_id,nama) VALUES
('$mk_id', '$nama)";
$this->conn->query($sql);
}

public function tampil_data()
{
 $sql = "SELECT * FROM tbl_kontrakmk";
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
 $sql = "SELECT * FROM tbl_kontrakmk WHERE mk_id='$id'";
 $bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris = $obj;
 }
 return $baris;
}
public function update($mk_id, $nama)
{
 $sql = "UPDATE tbl_kontrakmk SET nama='$nama'
WHERE mk_id='$mk_id'";
 $this->conn->query($sql);
} 
public function delete($nim)
{
 $sql = "DELETE FROM tbl_kontrakmk WHERE nim='$mk_id'";
 $this->conn->query($sql);
}
}
