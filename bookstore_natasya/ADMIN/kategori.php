<?php
include '../config/db.php';
session_start();

if(!isset($_SESSION['status']) || $_SESSION['status'] !== true){
    header("Location: ../AUTH/login.php");
    exit;
}
?>

<?php include '../config/db.php';

if(isset($_POST['add'])){
    mysqli_query($conn,"INSERT INTO kategori(nama) VALUES('$_POST[nama]')");
}

if(isset($_GET['hapus'])){
    mysqli_query($conn,"DELETE FROM kategori WHERE id='$_GET[hapus]'");
}
?>

<h2>Kategori</h2>
<form method="POST">
<input name="nama">
<button name="add">Tambah</button>
</form>

<?php
$data = mysqli_query($conn,"SELECT * FROM kategori");
while($d=mysqli_fetch_array($data)){
?>
<?= $d['nama'] ?>
<a href="?hapus=<?= $d['id'] ?>">hapus</a><br>
<?php } ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
</head>
<body>
    <h3>Edit Kategori</h3>
<table>
    <a href="?edit=<?= $d['id'] ?>">Edit</a> | 
<a href="?delete=<?= $d['id'] ?>">Hapus</a>
</table>
<form method="POST">
    <input type="hidden" name="id" value="<?= $data_edit['id'] ?? '' ?>">
    <input type="text" name="nama" value="<?= $data_edit['nama'] ?? '' ?>" placeholder="Nama kategori">
    <button type="submit" name="update">Update</button>
</form>
</body>
</html>
