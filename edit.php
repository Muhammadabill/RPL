<?php
include "koneksi.php";

$id = $_GET['id'];
$data = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT * FROM blower WHERE id_blower='$id'")
);

if (isset($_POST['update'])) {
    $nama  = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok  = $_POST['stok'];

    mysqli_query($conn, "UPDATE blower SET
        nama_blower='$nama',
        harga='$harga',
        stok='$stok'
        WHERE id_blower='$id'");

    header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Blower</title>
</head>
<body>

<h2>Edit Blower</h2>

<form method="post">
    Nama Blower <br>
    <input type="text" name="nama" value="<?= $data['nama_blower']; ?>" required><br><br>

    Harga <br>
    <input type="number" name="harga" value="<?= $data['harga']; ?>" required><br><br>

    Stok <br>
    <input type="number" name="stok" value="<?= $data['stok']; ?>" required><br><br>

    <button type="submit" name="update">Update</button>
</form>

</body>
</html>
<head>
    <title>Edit Blower</title>
    <link rel="stylesheet" href="style.css">
</head>
