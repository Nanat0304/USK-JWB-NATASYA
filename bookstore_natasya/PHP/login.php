<?php
session_start();
include "koneksi.php";

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");
    $data = mysqli_fetch_assoc($query);

    if($data){
        if($password == $data['password']){
            $_SESSION['username'] = $data['username'];

            mysqli_query($conn, "
    INSERT INTO user_login_logs (username)
    VALUES ('$username')
");

            header("Location: ../USER/index.php");
            exit;
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Username tidak ditemukan!";
    }
$data = mysqli_query($conn, "SELECT * FROM user_login_logs");



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
</body>
</html>