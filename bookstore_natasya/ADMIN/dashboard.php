<?php
session_start();
include '../config/db.php';

if(!isset($_SESSION['admin_login']) || $_SESSION['admin_login'] !== true){
    header("Location: ../AUTH/login.php");
    exit;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Natspace books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <div class="modal fade" id="detailModal">
  <div class="modal-dialog">
    <div class="modal-content p-3">
      <h5 id="judul"></h5>
      <p id="deskripsi"></p>
      <div class="modal-footer d-flex justify-content-between">

</div>
    </div>
  </div>
</div>

  </head>
  <body>
    <div class="container p-0 mb-4 mt-4 rounded-3 shadow bg-white">
    <!--Menu-->
 <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">NATSPACE BOOK'S</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#product" aria-disabled="true">PRODUCT</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#about" aria-disabled="true">ABOUT US</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            LAINNYA
          </a>
          <ul class="dropdown-menu ms-lg-auto">
            <li><a class="dropdown-item" href="/bookstore_natasya/ADMIN/list_user.php">LIST USER</a></li>
            <li><a class="dropdown-item" href="/bookstore_natasya/ADMIN/list_order.php">LIST ORDER</a></li>
                 <li><a class="dropdown-item" href="/bookstore_natasya/ADMIN/CRUD.php">CRUD</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/bookstore_natasya/PHP/logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search" onsubmit="return false;">
        <input id="searchInput" class="form-control me-2" type="search" placeholder="Search buku..."/>
        <button class="btn btn-outline-success" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>


    <!--banner-->
    <div class="px-4 mb-4">
      <img src="/bookstore_natasya/FOTO/bannerasli.png" class="w-100 rounded-2" alt="">

    </div>
    <!--produk books-->
    <h3 class="text-center">BUKU KAMI</h3>
    <div class="text-center w-50 mx-auto fw-light">Buku kami merupakan hal termurah yang anda temui dan dengan versi terkini anak muda pasti suka, gas beli</div>
   
    <!--pke bootstrap ini udh masuk ke dalam produk buku nya 
    bootstarp nya card -->
    <div class="row row-cols-md-3 row-cols-2 gx-5 p-5">
      <div class="col mb-5">
      
        <!--buku 1-->
        <div class="card shadow buku" id="product">
  <img src="../FOTO/gadis kretek.jpg" class="card-img-top">
  <div class="card-body">
    <p class="card-text">GADIS KRETEK BY RATIH
</p>
   <div class="d-none deskripsi"><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum asperiores voluptatum deserunt facere officiis aperiam omnis sequi reprehenderit natus, impedit at suscipit neque temporibus quod est similique nesciunt ad dolor blanditiis officia expedita. Repellat ullam aliquid nam porro, debitis at mollitia quam! Assumenda, distinctio exercitationem!</p></div>
  </div>
  <div class="card-footer d-flex">
     <a class="btn btn-sm btn-primary d-block btnDetail">Detail</a>
    <span class="ms-auto text-danger fw-blod d-block text-center harga">Rp 45.000</span>
  </div>
</div>
      </div>

        <!--buku 2-->
          <div class="col">
        <div class="card shadow buku">
  <img src="/bookstore_natasya/FOTO/teka teki rumah tua.jpg" class="card-img-top">
  <div class="card-body">
    <p class="card-text"> TEKA TEKI RUMAH ANEH BY UKETSU
</p>
       <div class="d-none deskripsi "><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum asperiores voluptatum deserunt facere officiis aperiam omnis sequi reprehenderit natus, impedit at suscipit neque temporibus quod est similique nesciunt ad dolor blanditiis officia expedita. Repellat ullam aliquid nam porro, debitis at mollitia quam! Assumenda, distinctio exercitationem!</p></div>
  </div>
  <div class="card-footer d-md-flex">
    <a class="btn btn-sm btn-primary d-block btnDetail">Detail</a>
    <span class="ms-auto text-danger fw-blod d-block text-center harga">Rp 50.000</span>

  </div>
</div>
      </div>

      <!--buku 3-->
          <div class="col mb-5">
        <div class="card shadow buku">
  <img src="/bookstore_natasya/FOTO/filosofi teras.jpg" class="card-img-top">
  <div class="card-body">
    <p class="card-text">FILOSOFI TERAS BY HENRY MANAMPIRING
</p>
   <div class="d-none deskripsi "><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum asperiores voluptatum deserunt facere officiis aperiam omnis sequi reprehenderit natus, impedit at suscipit neque temporibus quod est similique nesciunt ad dolor blanditiis officia expedita. Repellat ullam aliquid nam porro, debitis at mollitia quam! Assumenda, distinctio exercitationem!</p></div>
  </div>
  <div class="card-footer d-flex">
    <a class="btn btn-sm btn-primary d-block btnDetail">Detail</a>
    <span class="ms-auto text-danger fw-blod d-block text-center harga">Rp 65.000</span>

  </div>
</div>
      </div>

      <!--buku 4 -->
       <div class="col mb-5">
        <div class="card shadow buku">
  <img src="/bookstore_natasya/FOTO/mei merah.jpg" class="card-img-top">
  <div class="card-body">
    <p class="card-text"> MEI MERAH 1998 BY NANING PRANOTO
</p>
   <div class="d-none deskripsi "><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum asperiores voluptatum deserunt facere officiis aperiam omnis sequi reprehenderit natus, impedit at suscipit neque temporibus quod est similique nesciunt ad dolor blanditiis officia expedita. Repellat ullam aliquid nam porro, debitis at mollitia quam! Assumenda, distinctio exercitationem!</p></div>
  </div>
  <div class="card-footer d-flex">
    <a class="btn btn-sm btn-primary d-block btnDetail">Detail</a>
    <span class="ms-auto text-danger fw-blod d-block text-center harga">Rp 80.000</span>

  </div>
</div>
      </div>

      <!--buku 5 -->
       <div class="col mb-5">
        <div class="card shadow buku">
  <img src="/bookstore_natasya/FOTO/a man called otto.jpg" class="card-img-top">
  <div class="card-body">
    <p class="card-text"> A MAN CALLED OTTO BY FRIDRIK BACKMAN </p>
   <div class="d-none deskripsi "><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum asperiores voluptatum deserunt facere officiis aperiam omnis sequi reprehenderit natus, impedit at suscipit neque temporibus quod est similique nesciunt ad dolor blanditiis officia expedita. Repellat ullam aliquid nam porro, debitis at mollitia quam! Assumenda, distinctio exercitationem!</p></div>
  </div>
  <div class="card-footer d-flex">
    <a class="btn btn-sm btn-primary d-block btnDetail">Detail</a>
    <span class="ms-auto text-danger fw-blod d-block text-center harga">Rp 65.000</span>
  </div>
</div>
      </div>

      <!--buku 6 -->
       <div class="col mb-5">
        <div class="card shadow buku">
  <img src="/bookstore_natasya/FOTO/bicara ada seninya.jpg" class="card-img-top">
  <div class="card-body">
    <p class="card-text">BICARA ITU ADA SENINYA BY OH SU HYANG 
</p>
   <div class="d-none deskripsi "><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum asperiores voluptatum deserunt facere officiis aperiam omnis sequi reprehenderit natus, impedit at suscipit neque temporibus quod est similique nesciunt ad dolor blanditiis officia expedita. Repellat ullam aliquid nam porro, debitis at mollitia quam! Assumenda, distinctio exercitationem!</p></div>
  </div>
  <div class="card-footer d-md-flex">
    <a class="btn btn-sm btn-primary d-block btnDetail">Detail</a>
    <span class="ms-auto text-danger fw-blod d-block text-center harga">Rp 65.000</span>
  </div>
</div>
      </div>
    </div>


    <!--about us-->

    <div class="container p-0 mb-4 mt-6 rounded-3 p-5 shadow bg-light"> <!--ini buat bikin kotak luar-->
    <div class="container p-0 mb-2 mt-2 rounded-4 p-5 shadow bg-info"> <!--ini buat bikin kotak dalem-->
      <h1 class="text-center container bg-secondary fw-bolder rounded-4" id="about" >ABOUT US</h1> <!--ini buat bikin kotak about us pke container-->
      <br>
    <!--BIKIN ISIAN NYA-->
    <fieldset>
      <legend class="text-center fst-italic" >TENTANG KAMI</legend>
      <form action="text-center">
        <p class="text-center fw-semibold">"Selamat datang di toko buku kami"</p>
      </form>
    </fieldset>
    <br>

    <fieldset>
      <legend class="text-center fst-italic">KUALITAS KAMI</legend>
      <form action="">
        <p class="text-center fw-semibold">"Selamat datang di toko buku kami"</p>
      </form>
    </fieldset>
    <br>

    <fieldset>
      <legend class="text-center fst-italic">VISI MISI KAMI</legend>
      <form action="">
        <p class="text-center fw-semibold">"Selamat datang di toko buku kami"</p>
      </form>
    </fieldset>
    <br>
    </div>

