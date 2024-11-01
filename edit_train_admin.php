<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
    header('Location: index.php'); // Redirect jika bukan admin
}
include 'koneksi.php';


$id = $_GET['id'];
$sql = "SELECT * FROM trains WHERE id = '$id'";
$result = $conn->query($sql);

$id = '';
$code = '';
$available_seats = '';
$price_per_seat = '';

if ($result && $trains = mysqli_fetch_array($result)) {
    $id = $trains['id'];
    $code = $trains['code'];
    $available_seats = $trains['available_seats'];
    $price_per_seat = $trains['price_per_seat'];
} else {
    // Tambahkan pesan error untuk debugging jika query gagal
    echo "Error: " . $conn->error;
}
?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="back-button-container">
                                    </div>
                                    <h4 class="text-center mb-4">Update Data Train</h4>
                                    <form action="dt_train_act_admin.php" method="post">
                                        <div class="form-group">
                                            <label><strong>Trains Code</strong></label>
                                            <input type="text" class="form-control" id="code" name="code" 
                                            value="<?php echo $trains['code']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Available Seats</strong></label>
                                            <input type="number" class="form-control" id="available_seats" name="available_seats" 
                                            value="<?php echo $trains['available_seats']; ?>" required>
                                        </div>
                                            <div class="form-group">
                                            <label><strong>Price Seats</strong></label>
                                            <input type="text" class="form-control" id="price_per_seat" name="price_per_seat" value="<?php echo $trains['price_per_seat']; ?>" required>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="update" name="update" class="btn btn-primary btn-block">Update</button>
                                        </div> 
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer style="text-align: center; padding: 20px; background-color: rgba(88, 115, 254, 0.04); margin-top: 20px;">
                <p>Copyright © Designed &amp; Developed by <a href="https://bit.ly/4ebIbHr" target="_blank" style="color: blue">waLL Valor</a> 2024</p>
                <p>Distributed by <a href="https://themewagon.com/" target="_blank" style="color: blue">Themewagon</a></p>
            </footer>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <!--endRemoveIf(production)-->

</body>

</html>