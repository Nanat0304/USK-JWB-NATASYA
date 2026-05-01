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
   
    
  <form action="add.php" method="POST">
    <label for="nama_buku">NAMA BUKU</label>
    <input type="text" id="nama_buku" name="nama_buku" class="form-control" required>
    
    <label for="kategori">Kategori</label>
    <select name="kategori" id="kategori" class="form-select" required>
      <option>Pilih Kategori</option>
      <option value="horor">kategori Horor</option>
      <option value="motivasi">kategori Motivasi</option>
      <option value="novel">kategori Novel</option>
    </select>
    <br>
    <br>
     <label for="nama_buku">PENULIS</label>
    <input type="text" id="penulis" name="penulis"  class="form-control" required>
    <br>

     <label for="nama_buku">DESKRIPSI</label>
    <input type="text" id="deskripsi" name="deskripsi"  class="form-control" required>
<br>
   
     <label for="nama_buku">HARGA</label>
    <input type="text" id="harga" name="harga"  class="form-control" required>

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

  $sqlGet = "SELECT * FROM crud WHERE nama_buku='$nama_buku'";
  $queryGet = mysqli_query($conn, $sqlGet);
  $cek = mysqli_num_rows($queryGet);

    $sqlInsert = "INSERT INTO crud(nama_buku,kategori,penulis,deskripsi,harga)
                  VALUES ('$nama_buku','$kategori','$penulis','$deskripsi','$harga')";  
                  

   $queryInsert = mysqli_query($conn, $sqlInsert);

   if (isset($sqlInsert) &&  $cek <= 0 && $queryInsert) {
    echo " 
      <div class='alert alert-success'>DATA BERHASIL DITAMBAHKAN <a href='CRUD.php'>LIHAT DATA</a></div>

     ";
   } else if($cek >= 1 ){
    echo"
      <div class='alert alert-danger'>DATA GAGAL DITAMBAHKAN <a href='CRUD.php'>LIHAT DATA</a></div>

    ";
   }
  


   header("location: CRUD.php");
  }


  




  


 
  ?>

</body>
</html>
      