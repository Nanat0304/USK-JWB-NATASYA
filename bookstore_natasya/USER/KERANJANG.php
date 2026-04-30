<?php
 include '/PHP/koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Document</title>
</head>
    <body class="bg-light">
        <a href="/bookstore_natasya/ADMIN/list_order.php"></a>

<div class="container mt-5">
  <h2 class="mb-4">🛒 Keranjang Saya</h2>

  <!-- LIST PRODUK -->
  <div class="row" id="listCart"></div>

  
  <!-- TOTAL + CHECKOUT -->
  <div class="d-flex align-items-center bg-light p-3 rounded shadow-sm">
    <h5 class="mb-0" >Total: <span id="totalHarga" class="text-danger">Rp 0</span></h5>
    <select id="payment-method" class="form-select w-auto">
    <option value="">Pilih Pembayaran</option>
    <option value="COD">COD</option>
    <option value="BANK">Transfer Bank</option>
    <option value="DEBIT">Debit / Kartu</option>
  </select>
  
    <!--  INI DIA TEMPAT INPUT KARTU -->
    <input 
      type="text" 
      id="card-input" 
      class="form-control d-none" 
      placeholder="1234 5678 9012 3456"
    >

    <button class="btn btn-success btnCheckout" onclick="checkout()" name="tambah">Checkout</button>
  </div>
</div>


</body>
</html>