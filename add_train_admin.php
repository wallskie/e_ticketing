<?php
session_start();
include "koneksi.php"; // Pastikan koneksi ke database


if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

if (isset($_POST['add_train'])) {
    $code = $_POST['code'];
    $available_seats = $_POST['available_seats'];
    $price_per_seat = $_POST['price_per_seat'];
    $sql = "INSERT INTO trains (code, available_seats, price_per_seat) VALUES ('$code', $available_seats, $price_per_seat)";
    $conn->query($sql);
    
    header("location:data_train_admin.php");
    exit();
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
                                    <div class="form-group" style="display: flex;align-items: center;">
                                        <a href="data_train_admin.php" style="background-color: white; font-size: 28px;"><button class="btn-dark" style="background-color: #424d63; border-radius: 50%; width: 50px; height: 50px;"><</button></a>
                                        <h4 class="text-center" style="margin-top: 12px; margin-left: 29%;">Add Train Form</h4>
                                    </div>
                                    <div class="back-button-container">
                                    </div>
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label><strong>Trains Code</strong></label>
                                            <input type="text" class="form-control" id="code" name="code" placeholder="Input Code" required>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Available Seats</strong></label>
                                            <input type="number" class="form-control" id="available_seats" name="available_seats"  placeholder="Input Seating" required>
                                        </div>
                                            <div class="form-group">
                                            <label><strong>Price Seats</strong></label>
                                            <input type="text" class="form-control" id="price_per_seat" name="price_per_seat" placeholder="Input Price" required>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" name="add_train" class="btn btn-primary btn-block">Add</button>
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