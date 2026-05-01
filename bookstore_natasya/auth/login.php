<?php
session_start();
include '../config/db.php';

if(isset($_SESSION['admin_login']) && $_SESSION['admin_login'] === true){
    header("Location: ../ADMIN/dashboard.php");
    exit;
}

if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    // ambil data berdasarkan username saja
    $query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username'");
    $data = mysqli_fetch_assoc($query);

    if ($data) {

        // cek password di PHP
        if ($password == $data['password']) {

            $_SESSION['admin_id'] = $data['id_admin'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['admin_login'] = true;


            header("Location: ../ADMIN/dashboard.php");
            exit;

        } else {
            echo "❌ Password salah!";
        }

    } else {
        echo "❌ Username tidak ditemukan!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="/bookstore_natasya/USER/style.css">
</head>
<body>

<!-- NAVBAR -->
<nav>
<div class="container">
 <div class="container">
        <div class="form-box" id="login-form">
            <form action="" method="POST">
                <h2 class="bg-white">Login</h2>
                <br>
                <input type="Username" name="username" placeholder="username">
                <input type="password" name="password" placeholder="password">
                <button type="submit" name="login">login</button>
                <p> <a href="signup.html"></a> </p>
            </form>
        </div>
    </div>

</div>

</nav>

<!-- CONTENT / CARD BUKU -->


<!-- MODAL / POPUP -->
<div class="modal fade" id="detailModal">
  <div class="modal-dialog">
    <div class="modal-content p-3">
      <h5 id="judul"></h5>
      <p id="deskripsi"></p>
    </div>
  </div>
</div>

    
</body>
</html>