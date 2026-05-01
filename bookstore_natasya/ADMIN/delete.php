<?php
include 'konek.php';

$nama_buku = $_GET['nama_buku'];
$sqlDelete = "DELETE FROM crud WHERE nama_buku='$nama_buku'";
mysqli_query($conn, $sqlDelete);

header("location: CRUD.php");
?>