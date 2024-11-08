<?php
session_start();
include "../koneksi.php"; // Pastikan koneksi ke database

  include '../templates/header.php';
  include '../templates/navbar.php'; 
  include '../templates/sidebar.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../index.php");
    exit();
}

// Ambil data pemesanan yang pending
$result = mysqli_query($conn, "
    SELECT b.id AS reservation_id, u.full_nm AS user_name, d.destination_name, b.departure_day AS reservation_date, b.total_harga AS price, b.status
    FROM bookings b
    JOIN users u ON b.user_id = u.id
    JOIN schedules s ON s.destination_id = b.destination_id  -- Ubah join sesuai dengan kolom yang ada
    JOIN destinations d ON s.destination_id = d.id
    WHERE b.status = 'Pending'
");

// Periksa apakah query berhasil
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.png">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Confirm Payment</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-primary">
                                    <tr>
                                        <th scope="col"><center>No</center></th>
                                        <th scope="col"><center>Name</center></th>
                                        <th scope="col"><center>Destination</center></th>
                                        <th scope="col"><center>Order Date</center></th>
                                        <th scope="col"><center>Total Price</center></th>
                                        <th scope="col"><center>Status</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    while ($order = mysqli_fetch_assoc($result)) {
                                        $no++;
                                    ?>
                                    <tr>
                                        <th scope="row"><center><?= $no; ?></center></th>
                                        <td><center><?php echo $order['user_name']; ?></center></td>
                                        <td><center><?php echo $order['destination_name']; ?></center></td>
                                        <td><center><?php echo date('Y-m-d', strtotime($order['reservation_date'])); ?></center></td>
                                        <td><center>Rp<?php echo number_format($order['price'], 2, ',', '.'); ?></center></td>
                                        <td><center><?php echo $order['status']; ?></center></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../vendor/global/global.min.js"></script>
<script src="../js/quixnav-init.js"></script>
<script src="../js/custom.min.js"></script>
</body>
</html>

<?php
include '../templates/footer.php';

