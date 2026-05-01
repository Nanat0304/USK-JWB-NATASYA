<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: ../PHP/login.php");
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

  <!-- (Back) -->
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
    Back
  </button>

  <!-- Add cart -->
  <div>
    <button class="btn btn-danger btnFavorite">Favorite</button>
    <button class="btn btn-success btnAddCart"> Add to Cart</button>
  </div>

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
        <li class="nav-item">
          <a class="nav-link" href="#contact" aria-disabled="true">CONTACT</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            LAINNYA
          </a>
          <ul class="dropdown-menu ms-lg-auto">
            <li><a class="dropdown-item" href="/bookstore_natasya/USER/favorite.html">Favorite</a></li>
            <li><a class="dropdown-item" href="/bookstore_natasya/USER/cart.php">Cart</a></li>
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
  <img src="/bookstore_natasya/FOTO/gadis kretek.jpg" class="card-img-top">
  <div class="card-body">
    <p class="card-text">GADIS KRETEK BY RATIH
</p>
<br>
   <div class="d-none deskripsi"><p>Gadis Kretek adalah novel karya Ratih Kumala yang diterbitkan pada tahun 2012, yang mengangkat latar belakang sejarah industri kretek di Indonesia. Cerita ini bermula dari keinginan terakhir seorang pemilik pabrik kretek besar bernama Soeraja yang sedang sekarat, yang terus memanggil nama seorang wanita yang bukan istrinya, yaitu Jeng Yah.</div>
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
<br>
       <div class="d-none deskripsi "><p>Seorang penulis misteri menyelidiki denah sebuah rumah yang memiliki ruang-ruang tidak masuk akal dan tersembunyi.</p></div>
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
<br>
   <div class="d-none deskripsi "><p>Buku pengembangan diri yang memperkenalkan filosofi Stoisisme (Stoic) dengan bahasa yang ringan dan relevan untuk kehidupan modern.</p></div>
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
<br>
   <div class="d-none deskripsi "><p>Novel ini merupakan karya sastra yang mengangkat tema tragedi kemanusiaan di Indonesia pada Mei 1998. Mengisahkan penderitaan dan trauma yang dialami oleh para korban kerusuhan, khususnya dari sudut pandang perempuan etnis Tionghoa.</p></div>
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
    <br>
   <div class="d-none deskripsi "><p>Tentang Ove, seorang pria tua pemarah dan kaku yang merasa hidupnya tidak lagi berarti setelah istrinya meninggal.
  Rencana Ove untuk mengakhiri hidup berulang kali gagal karena gangguan dari tetangga barunya yang berisik namun ramah, yang perlahan mengubah cara pandangnya terhadap hidup.</p></div>
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
<br>
   <div class="d-none deskripsi "><p>Buku self-improvement populer asal Korea Selatan yang membahas teknik komunikasi yang efektif. Memberikan panduan tentang cara berbicara yang persuasif, cara membangun kesan pertama yang baik, hingga metode komunikasi untuk memenangkan hati lawan bicara.</p></div>
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


    <!--INI CONTACT-->
      <div class="container p-0 mb-4 mt-5 rounded-4 p-5 shadow bg-info">
      <form>
        <h1>CONTACT US</h1>
        <br>

        <!--KOLOM 1 NAMA-->
  <div class="mb-3" id="contact">
    <label for="InputNama" class="form-label">Nama</label>
    <input type="Nama" class="form-control" id="InputNama">
  </div>

        <!--KOLOM 2 email-->
  <div class="mb-3">
    <label for="InputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

          <!--kolom 3 password-->
  <div class="mb-3">
    <label for="InputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="InputPassword1">
  </div>
    <!--kolom 4 pesan-->
  <div class="mb-3">
    <label for="InputPesan" class="form-label">Pesan</label>
    <input type="Pesan" class="form-control" id="InputPesan">
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div> 
 
   <!--Copyright-->
    <div class="p-4 border-top text-center justify-content-center">&copy;2026 Natspace books - Books Store Number 01</div>
    </div>
  </div> <!--INI PENUTUP-->

<script src="/bookstore_natasya/Javascript/script.js"></script>
</body>
</html>
     