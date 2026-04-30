<?php
include '../config/db.php';
session_start();

if (isset($_POST['checkout'])) {
    $user = $_POST['user'];
    $judul = $_POST['juduL'];
    $total_bayar = $_POST['total_harga'];
    $metode = $_POST['payment_method'];
    $tgl = date('Y-m-d H:i:s'); // Sesuai format datetime di mysql

    // Sesuaikan urutan sama image_58448d.png
    $query = mysqli_query($conn, "INSERT INTO orders (user, juduL, total_harga, payment_method, order_date) 
                                  VALUES ('$user', '$judul', '$total_bayar', '$metode', '$tgl')");

    if ($query) {
        echo "<script>alert('Berhasil! Cek di List Order Admin ya'); window.location='../USER/cart.php';</script>";
    } else {
        echo "Gagal simpen: " . mysqli_error($conn);
    }
}
?>