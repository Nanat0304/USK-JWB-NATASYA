<?php
include '../config/db.php';
session_start();

if(!isset($_SESSION['status']) || $_SESSION['status'] !== true){
    header("Location: ../AUTH/login.php");
    exit;
}
?>

<?php include '../config/db.php';
$id = $_GET['id'];
$data = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM buku WHERE id='$id'"));

if(isset($_POST['update'])){
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $harga = $_POST['harga'];

    mysqli_query($conn,"UPDATE buku SET 
    judul='$judul',penulis='$penulis',harga='$harga' 
    WHERE id='$id'");

    header("Location: buku.php");
}
?>

<h2>Edit Buku</h2>
<form method="POST">
<input name="judul" value="<?= $data['judul'] ?>"><br>
<input name="penulis" value="<?= $data['penulis'] ?>"><br>
<input name="harga" value="<?= $data['harga'] ?>"><br>
<button name="update">Update</button>
</form>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Edit Buku</h3>

<form method="POST">
    <input type="hidden" name="id" value="<?= $data_edit['id'] ?? '' ?>">

    <input type="text" name="judul" placeholder="Judul"
        value="<?= $data_edit['judul'] ?? '' ?>"><br>

    <input type="text" name="penulis" placeholder="Penulis"
        value="<?= $data_edit['penulis'] ?? '' ?>"><br>

    <input type="text" name="kategori" placeholder="Kategori"
        value="<?= $data_edit['kategori'] ?? '' ?>"><br>

    <button type="submit" name="update">Update</button>
</form>
</body>
</html>