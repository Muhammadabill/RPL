<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $nama  = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok  = $_POST['stok'];

    mysqli_query($conn, "INSERT INTO blower 
        (nama_blower, harga, stok)
        VALUES ('$nama', '$harga', '$stok')");

    header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Blower</title>
</head>
<body>

<h2>Tambah Blower</h2>

<form method="post">
    Nama Blower <br>
    <input type="text" name="nama" required><br><br>

    Harga <br>
    <input type="number" name="harga" required><br><br>

    Stok <br>
    <input type="number" name="stok" required><br><br>

    <button type="submit" name="simpan">Simpan</button>
</form>

</body>
</html>
<head>
    <title>Tambah Blower</title>
    <link rel="stylesheet" href="style.css">
</head>
