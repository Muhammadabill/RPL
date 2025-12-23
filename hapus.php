<?php
include "koneksi.php";

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM blower WHERE id_blower='$id'");

header("location:index.php");
