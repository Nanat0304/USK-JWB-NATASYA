<?php
include '../config/db.php';
session_start();

if(!isset($_SESSION['status']) || $_SESSION['status'] !== true){
    header("Location: ../AUTH/login.php");
    exit;
}
?>
<?php include '../config/db.php';

if(isset($_POST['simpan'])){
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $harga = $_POST['harga'];
    $gambar = $_FILES['gambar']['name'];

    move_uploaded_file($_FILES['gambar']['tmp_name'],"../FOTO/$gambar");

    mysqli_query($conn,"INSERT INTO buku(judul,penulis,harga,gambar)
    VALUES('$judul','$penulis','$harga','$gambar')");

    header("Location: buku.php");
}
?>

<h2>Tambah Buku</h2>
<form method="POST" enctype="multipart/form-data">
<input name="judul" placeholder="judul"><br>
<input name="penulis" placeholder="penulis"><br>
<input name="harga" placeholder="harga"><br>
<input type="file" name="gambar"><br>
<button name="simpan">Simpan</button>
</form>