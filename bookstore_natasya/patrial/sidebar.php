<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
?>

<div class="col-md-2 bg-dark text-white vh-100 p-3">
<h4>Admin Panel</h4>

<a href="index.php" class="text-white d-block">Dashboard</a>
<a href="category.php" class="text-white d-block">Kategori</a>
<a href="book.php" class="text-white d-block">Buku</a>
<a href="users.php" class="text-white d-block">User</a>
<a href="orders.php" class="text-white d-block">Order</a>
<a href="logout.php" class="text-danger d-block mt-3">Logout</a>
</div>