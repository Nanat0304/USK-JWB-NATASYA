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
  <div class="container mt-4">
    <a href="add.php" class="btn btn-primary btn-md mb-3">Tambah Data</a>
    <table class="table table-striped table-hover table-bordered mt-5">
 <thead class="table-dark">
  <th>NAMA BUKU</th>
  <th>PENULIS</th>
  <th>DESKRIPSI</th>
  <th>HARGA</th>
  <th>ALAMAT</th>
  <th>NO TELFON</th>
  <th>Aksi</th>
 </thead>

<?php
//buat data CRUD NYA BIAR  BISA NONGOL
  $sqlGet = 'SELECT * FROM crud';
  $query = mysqli_query($conn, $sqlGet);

  while ($data = mysqli_fetch_array($query)){
  echo "
  <tbody>
     <tr>
     <td>$data[nama_buku]</td>
  <td>$data[penulis]</td>
  <td>$data[deskripsi]</td>
  <td>$data[harga]</td>
  <td>$data[alamat]</td>
  <td>$data[No_tlp]</td>
  
 <div class='row'>
      <div class='col d-flex justify-content-center'>
              <a href='' class='btn btn-sm btn-warning'>UPDATE</a>
      </div>

       <div class='col d-flex justify-content-center'>
              <a href='' class='btn btn-sm btn-warning'>DELETE</a>
      </div>

      <div class='col d-flex justify-content-center'>
              <a href='' class='btn btn-sm btn-danger'>DELETE</a>
      </div>

    </div>
    <td>
  </tr>
 </tbody>

  ";
  
  }
  
?>

<tbody>
     <tr>
     <td>GADIS KRETEK</td>
  <td>RATIH KUSUMA</td>
  <td>Lorem ipsum dolor sit amet.</td>
  <td>Rp 45.000</td>
  <td>Pulgebang cakung</td>
  <td>0897379233</td>

  <td>

   
   <div class='row'>
      <div class='col d-flex justify-content-center'>
              <a href='' class='btn btn-sm btn-warning'>UPDATE</a>
      </div>

       <div class='col d-flex justify-content-center'>
              <a href='' class='btn btn-sm btn-danger'>DELETE</a>
      </div>

    </div>



  </tr>
 </tbody>
</table>
  </div>
</body>
</html>
      