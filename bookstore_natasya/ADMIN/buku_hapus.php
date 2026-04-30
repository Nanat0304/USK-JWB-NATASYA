<?php
include '../config/db.php';
session_start();

if(!isset($_SESSION['status']) || $_SESSION['status'] !== true){
    header("Location: ../AUTH/login.php");
    exit;
}
?>
<?php
include '../config/db.php';
$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM buku WHERE id='$id'");
header("Location: buku.php");
?>
