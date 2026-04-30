<?php include '../config/db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Orderan - Admin</title>
    <!-- Kakak pinjem Bootstrap ya biar class container-nya jalan -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h2 class="h4 mb-0">🛒 Daftar Orderan User</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Nama</th>
                                <th>Buku yang Dibeli</th>
                                <th>Total Bayar</th>
                                <th>Metode</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $ambil = mysqli_query($conn, "SELECT * FROM orders ORDER BY order_date DESC");
                            while($d = mysqli_fetch_array($ambil)){
                            ?>
                            <tr>
                                <td><?php echo $d['user']; ?></td>
                                <td><?php echo $d['juduL']; ?></td>
                                <td><span class="fw-bold text-success">Rp <?php echo number_format($d['total_harga']); ?></span></td>
                                <td><span class="badge bg-info text-dark"><?php echo $d['payment_method']; ?></span></td>
                                <td><?php echo date('d M Y, H:i', strtotime($d['order_date'])); ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                
                <?php if(mysqli_num_rows($ambil) == 0): ?>
                    <div class="alert alert-warning text-center">Belum ada orderan masuk nih...</div>
                <?php endif; ?>
            </div>
        </div>
        
        <div class="mt-3">
            <a href="dashboard.php" class="btn btn-secondary btn-sm">Kembali ke Dashboard</a>
        </div>
    </div>

</body>
</html>