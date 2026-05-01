<?php
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn,"admin_page"); //ini buat isi database di mysql

if(!$conn) {
    die("Koneksi gagal");
}
?>
