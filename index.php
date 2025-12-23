<?php
include "koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM blower");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Blower</title>
</head>
<body>

<h2>Data Blower</h2>
<a href="tambah.php">Tambah Blower</a><br><br>

<table border="1" cellpadding="8">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Harga</th>
    <th>Stok</th>
    <th>Aksi</th>
</tr>

<?php $no = 1; ?>
<?php while ($row = mysqli_fetch_assoc($query)) { ?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $row['nama_blower']; ?></td>
    <td><?= $row['harga']; ?></td>
    <td><?= $row['stok']; ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id_blower']; ?>">Edit</a> |
        <a href="hapus.php?id=<?= $row['id_blower']; ?>" 
           onclick="return confirm('Yakin hapus data?')">Hapus</a>
    </td>
</tr>
<?php } ?>
<head>
    <title>Data Blower</title>
    <link rel="stylesheet" href="style.css">
</head>
<td>
    <a href="edit.php?id=<?= $row['id_blower']; ?>">Edit</a>
    <a href="hapus.php?id=<?= $row['id_blower']; ?>" 
       onclick="return confirm('Yakin hapus data?')"
       style="background-color:#d63031;">Hapus</a>
</td>
