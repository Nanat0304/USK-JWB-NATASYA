<?php
 include 'konek.php';

 $nama_buku = $_GET['nama_buku'];
 $sqlGet = "SELECT * FROM crud WHERE nama_buku='$nama_buku'";
 $queryGet = mysqli_query($conn, $sqlGet);
 $data = mysqli_fetch_array($queryGet);
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
   
    
  <form action="update.php" method="POST">
    <label for="nama_buku">NAMA BUKU</label>
    <input type="text" id="nama_buku" name="nama_buku" value="<?php echo "$data[nama_buku]";?>" class="form-control" readonly required>
    
    <label for="kategori">Kategori</label>
    <select name="kategori" id="kategori" value="<?php echo "$data[kategori]";?>" class="form-select" required>
      <option value="<?php echo "$data[kategori]";?>">Pilih Kategori</option>
      <option value="horor">kategori Horor</option>
      <option value="motivasi">kategori Motivasi</option>
      <option value="novel">kategori Novel</option>
    </select>
    <br>
    <br>
     <label for="nama_buku">PENULIS</label>
    <input type="text" id="penulis" name="penulis" value="<?php echo "$data[penulis]";?>" class="form-control" required>
    <br>

     <label for="nama_buku">DESKRIPSI</label>
    <input type="text" id="deskripsi" name="deskripsi" value="<?php echo "$data[deskripsi]";?>"  class="form-control" required>
<br>
   
     <label for="nama_buku">HARGA</label>
    <input type="text" id="harga" name="harga" value="<?php echo "$data[harga]";?>" class="form-control" required>

    <input  class="btn btn-success mt-3" type="submit" name="tambah" value="TAMBAH DATA ">

    <div class="d-flex gap-2">
       <a href="dashboard.php" class="btn btn-success mt-3">KEMBALI KE HOME</a>
    </div>
    

  </form> 

  </div>


  <?php

  if (isset($_POST['tambah'])) {
      $nama_buku = $_POST['nama_buku'];
      $kategori = $_POST['kategori'];
       $penulis = $_POST['penulis'];
        $deskripsi = $_POST['deskripsi'];
         $harga = $_POST['harga'];

      $kategoriSelect = $_POST['kategori'];
  if ($kategoriSelect == 'motivasi') {
    $kategoriSelect = 'kategori Motivasi';
  }if ($kategoriSelect == 'novel') {
    $kategoriSelect = 'kategori Novel';
  }if ($kategoriSelect == 'horor') {
    $kategoriSelect = 'kategori horor';
  }

  $sqlUpdate = "UPDATE crud 
                SET kategori='$kategori', penulis='$penulis', deskripsi='$deskripsi',  harga='$harga'
                WHERE nama_buku='$nama_buku'";

    $queryUpdate = mysqli_query($conn, $sqlUpdate);     

    header("location: CRUD.php");
  }
  ?>

</body>
</html>
      