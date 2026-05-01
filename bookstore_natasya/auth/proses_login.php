<?php
session_start();
include '../config/db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$password'");

if(mysqli_num_rows($data) > 0){
    $_SESSION['login'] = true;
    header("Location: ../admin/dashboard.php");
} else {
    echo "Login gagal!";
}