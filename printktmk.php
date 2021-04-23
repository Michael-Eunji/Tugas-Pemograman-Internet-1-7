<?php
include 'modelktmk.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
<title>Cetak Data Kontrak MAta Kuliah Mahasiswa</title>
<style>
h1 {
text-align: center;
}
table,
td,
th {
border: 1px solid #ddd;
text-align: left;
}
table {
border-collapse: collapse;
width: 100%;
}
th,
td {
padding: 15px;
}
</style>
</head>
<body>
<h1>Laporan Data Kontrak Kuliah Mahasiswa</h1>
<table>
<thead>
<tr>
<th>No.</th>
<th>MK_ID</th>
<th>Nama</th>
</tr>
</thead>
<tbody>
<?php
$result = $model->tampil_data();
if ( !empty($result) ) {
foreach ($result as $data): ?>
<tr>
<td><?=$index++ ?></td>
<td><?=$data->mk_id?></td>
<td><?=$data->nama ?></td>
</tr>
<?php endforeach;
} else{ ?>
<tr>
<td colspan="9">Belum ada data pada tabel kontrak kuliah
mahasiswa.</td>
</tr>
<?php } ?>
</tbody>
</table>
<script>
window.print();
</script>
</body>
</html>