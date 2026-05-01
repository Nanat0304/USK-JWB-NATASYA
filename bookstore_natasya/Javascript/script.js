console.log("JS HIDUP 🔥");

document.addEventListener("DOMContentLoaded", function () {

  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  let favorite = JSON.parse(localStorage.getItem("favorite")) || [];

  // ======================
  // DETAIL
  // ======================
  document.querySelectorAll(".btnDetail").forEach(btn => {
    btn.addEventListener("click", function(e){
      e.preventDefault();

      const card = btn.closest(".card");    
      const judul = card.querySelector(".card-text").innerText;
      const deskripsi = card.querySelector(".deskripsi").innerText;
      const gambar = card.querySelector("img").src;
      const harga = card.querySelector(".harga").innerText;

      document.getElementById("judul").innerText = judul;
      document.getElementById("deskripsi").innerText = deskripsi;

      window.selectedBook = { judul, gambar, harga, deskripsi };

      new bootstrap.Modal(document.getElementById('detailModal')).show();
    });
  });

  // ======================
  // CLICK GLOBAL
  // ======================
  document.addEventListener("click", function(e){

    // ADD TO CART
    if(e.target.classList.contains("btnAddCart")){
      let item = window.selectedBook;

      if(!item){
        alert("Klik Detail dulu!");
        return;
      }

      if(!cart.some(c => c.judul === item.judul)){
        cart.push(item);
        localStorage.setItem("cart", JSON.stringify(cart));
      }

      alert("Masuk ke keranjang 🛒");
    }

    // FAVORITE
    if(e.target.classList.contains("btnFavorite")){
      let item = window.selectedBook;

      if(!item){
        alert("Klik Detail dulu!");
        return;
      }

      if(!favorite.some(f => f.judul === item.judul)){
        favorite.push(item);
        localStorage.setItem("favorite", JSON.stringify(favorite));
      }

      alert("Masuk ke favorite ❤️");
    }

  });

  // ======================
  // SEARCH 🔍
  // ======================
  const searchInput = document.getElementById("searchInput");

  if(searchInput){
    searchInput.addEventListener("keyup", function(){

      let keyword = this.value.toLowerCase();
      let semuaBuku = document.querySelectorAll(".buku");

      semuaBuku.forEach(function(buku){
        let judul = buku.querySelector(".card-text").innerText.toLowerCase();

        if(judul.includes(keyword)){
          buku.parentElement.style.display = "block";
        } else {
          buku.parentElement.style.display = "none";
        }
      });

    });
  }
  // CHECKOUT
if(e.target.classList.contains("btnCheckout")){

  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  if(cart.length === 0){
    alert("Keranjang kosong 😢");
    return;
  }

  // simpan ke riwayat checkout
  let checkout = JSON.parse(localStorage.getItem("checkout")) || [];

  checkout = checkout.concat(cart);

  localStorage.setItem("checkout", JSON.stringify(checkout));

  // kosongkan cart
  localStorage.removeItem("cart");

  alert("Checkout berhasil 🎉");
}

});

function checkout(){
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  let payment = document.getElementById("payment-method").value;

  if(cart.length === 0){
    alert("Keranjang kosong!");
    return;
  }

  if(payment === ""){
    alert("Pilih metode pembayaran!");
    return;
  }

  fetch("checkout.php", {
    method: "POST",
    headers: {"Content-Type": "application/json"},
    body: JSON.stringify({
      cart: cart,
      payment: payment
    })
  })
  .then(res => res.text())
  .then(res => {
    alert("Checkout berhasil!");
    localStorage.removeItem("cart");
    location.reload();
  });
}