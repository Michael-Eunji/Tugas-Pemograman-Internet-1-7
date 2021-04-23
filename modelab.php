<?php
include 'connection.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();
 }
 
public function insert($nim, $nama, $mk_id, $wkt_absen)
{
  $status = $this->status($wkt_absen);
  $sql = "INSERT INTO tbl_ab (nim, nama, mk_id, wkt_absen, status ) VALUES
('$nim', '$nama', '$mk_id', '$wkt_absen', '$status')";
$this->conn->query($sql);
}
public function status($wkt_absen)
{
 $status="";
 if($wkt_absen <=8 && $wkt_absen =9){
 $status="Hadir";
}else{
 $status="Tidak Hadir";
}
 return $status;
}
public function tampil_data()
{
 $sql = "SELECT * FROM tbl_ab";
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
 $sql = "SELECT * FROM tbl_ab WHERE nim='$id'";
 $bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris = $obj;
 }
 return $baris;
}
public function update($nim, $nama, $mk_id, $wkt_absen)
{
$sql = "UPDATE tbl_ab SET nama='$nama', matakuliah_id='$mk_id', jam_absen='$wkt_absen'
WHERE nim='$nim'";
 $this->conn->query($sql);
}
public function delete($nim)
{
 $sql = "DELETE FROM tbl_ab WHERE nim='$nim'";
 $this->conn->query($sql);
}
}
