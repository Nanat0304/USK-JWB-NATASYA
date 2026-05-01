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
  <th>NOMOR</th>
  <th>KATEGORI</th>
  <th>PENULIS</th>
  <th>DESKRIPSI</th>
  <th>HARGA</th>
  <th>AKSI</th>
  
 </thead>

<?php
//buat data CRUD NYA BIAR  BISA NONGOL
  $sqlGet = "SELECT * FROM crud";
  $query = mysqli_query($conn, $sqlGet);

  while ($data = mysqli_fetch_array($query)){
  echo "
  <tbody>
 <tr>

  <td>$data[nama_buku]</td>
  <td>$data[kategori]</td>
  <td>$data[penulis]</td>
  <td>$data[deskripsi]</td>
  <td>$data[harga]</td>
   <td>


    <div class='row'>

      <div class='col d-flex justify-content-center'>
               <a href='update.php?nama_buku=$data[nama_buku]' class='btn btn-warning'>UPDATE</a>
      </div>

       <div class='col d-flex justify-content-center'>
               <a href='delete.php?nama_buku=$data[nama_buku]'
   onclick='return confirm('Yakin mau hapus?')'
   class='btn btn-danger'>DELETE</a>
      </div>

    </div>


 </tr>
</tbody>
 
  ";
  
  }
  
?>

 

</table>
  </div>
</body>
</html>
      