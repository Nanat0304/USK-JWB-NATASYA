<?php
 include 'konek.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
<title>CRUD</title>
</head>
<body>
  <div class="w-50 mx-auto border p-3 mt-5 ">
    <a href="dashboard.php">KEMBALI KE HOME</a>
  <form action="add.php" method="POST">
    <label for="nama_buku">NAMA BUKU</label>
    <input type="text" id="nama_buku" name="nama_buku" class="form-control" required>

     <label for="nama_buku">PENULIS</label>
    <input type="text" id="penulis" name="penulis"  class="form-control" required>

     <label for="nama_buku">DESKRIPSI</label>
    <input type="text" id="deskripsi" name="deskripsi"  class="form-control" required>


     <label for="nama_buku">HARGA</label>
    <input type="text" id="harga" name="harga"  class="form-control" required>

     <label for="nama_buku">ALAMAT</label>
    <input type="text" id="alamat" name="alamat"  class="form-control" required>

     <label for="nama_buku">NO TELP</label>
    <input type="text" id="No_telp" name="No_telp"  class="form-control" required>

    <input  class="btn btn-success mt-3" type="submit" name="tambah" value="TAMBAH DATA ">
  </form> 

  </div>


  <?php

  if (isset($_POST['tambah'])) {
      $nama_buku = $_POST['nama_buku'];
    $penulis = $_POST['penulis'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $alamat = $_POST['alamat'];
    $No_telp = $_POST['No_telp'];


    $sqlInsert = "INSERT INTO crud(nama_buku,penulis,deskripsi,harga,alamat,No_telp);
                  VALUES ('$nama_buku','$penulis','$deskripsi','$harga','$alamat','$No_telp')";  
                  
                  mysqli_query($conn, $sqlInsert);
  }


  




  


  
  ?>
  
</body>
</html>
      