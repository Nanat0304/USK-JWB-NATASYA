<?php
session_start();
include '../config/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h2 class="mb-4">👤 Data User Login</h2>

    <div class="card shadow p-3">

        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    
                    <th>Username</th>
                    
                </tr>
            </thead>

            <tbody>

            <?php
            $no = 1;
            $data = mysqli_query($conn, "SELECT * FROM user_login_logs");

            while($d = mysqli_fetch_array($data)){
            ?>

                <tr>
                    <td><?= $d['username'] ?></td>
                </tr>

            <?php } ?>

            </tbody>

        </table>

    </div>

</div>

</body>
</html>