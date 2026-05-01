<?php
include '../config/db.php'; 
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <link rel="stylesheet" href="index.html">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cart</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS biar tombol dan tampilannya tetep minimalis tapi rapi */
        .btn-checkout { background-color: #198754; color: white; border: none; padding: 8px 20px; border-radius: 5px; }
        .card-img-top { height: 200px; object-fit: cover; }
        .total-section { background: #fff; padding: 20px; border-radius: 10px; margin-top: 20px; }
    </style>
</head>

<body class="bg-light">
<div class="container py-5">
    <h2 class="mb-4">🛒 Keranjang Saya</h2>
    
    <!-- INI TEMPAT BUAT MUNCULIN GAMBAR BUKUNYA -->
    <div id="listCart" class="row"></div>

    <!-- INI BAGIAN BAWAH YANG ADA DI GAMBAR KAMU -->
    <div class="total-section shadow-sm">
        <form action="../PHP/checkout.php" method="POST" id="formCheckout">
            <div class="d-flex align-items-center gap-3 flex-wrap">
                <!-- Data rahasia buat dikirim ke tabel orders -->
                <input type="hidden" name="user" value="<?php echo $_SESSION['username'] ?? 'Guest'; ?>">
                <input type="hidden" name="juduL" id="hiddenJudul">
                <input type="hidden" name="total_harga" id="hiddenTotal">

                <span>Total: <b class="text-danger" id="totalHarga">Rp 0</b></span>
                
                <select name="payment_method" class="form-select w-auto" required>
                    <option value="">Pilih Pembayaran</option>
                    <option value="Debit / Kartu">Debit / Kartu</option>
                    <option value="Transfer">Transfer Bank</option>
                </select>

                <button type="submit" name="checkout" class="btn-checkout">Checkout</button>
            </div>
        </form>
    </div>
</div>

<script>
// Ini script biar data dari localStorage muncul jadi gambar
document.addEventListener("DOMContentLoaded", function(){
  tampilCart();
});

function tampilCart(){
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  let container = document.getElementById("listCart");
  let total = 0;
  let daftarJudul = [];

  container.innerHTML = "";

  if(cart.length === 0){
    container.innerHTML = "<div class='col-12'><p>Keranjang kosong 😢</p></div>";
    document.getElementById("totalHarga").innerText = "Rp 0";
    return;
  }

  // Loop buat bikin kartu buku sesuai gambar image_f10593.jpg
  cart.forEach((item, index) => {
    let hargaAngka = parseInt(item.harga.replace(/[^0-9]/g, ""));
    total += hargaAngka;
    daftarJudul.push(item.judul);

    container.innerHTML += `
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm h-100">
          <img src="${item.gambar}" class="card-img-top">
          <div class="card-body">
            <p class="card-text fw-bold text-uppercase">${item.judul}</p>
            <div class="d-flex justify-content-between align-items-center">
                <span class="text-danger fw-bold">${item.harga}</span>
                <button onclick="hapusCart(${index})" class="btn btn-danger btn-sm">Hapus</button>
            </div>
          </div>
        </div>
      </div>
    `;
  });

  // Update angka total dan data rahasia buat PHP
  document.getElementById("totalHarga").innerText = "Rp " + total.toLocaleString();
  document.getElementById("hiddenTotal").value = total;
  document.getElementById("hiddenJudul").value = daftarJudul.join(", ");
}

function hapusCart(index){
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  cart.splice(index,1);
  localStorage.setItem("cart", JSON.stringify(cart));
  tampilCart();
}

// Pas klik checkout, bersihin keranjangnya
document.getElementById("formCheckout").onsubmit = function() {
    if(document.getElementById("hiddenTotal").value == "0") {
        alert("Keranjang masih kosong!");
        return false;
    }
    localStorage.removeItem("cart"); 
};
</script>
</body>
</html>

