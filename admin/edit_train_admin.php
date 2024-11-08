<?php
session_start();
include "../koneksi.php"; // Pastikan koneksi ke database

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../index.php");
    exit();
}
if (isset($_GET['id'])) {
    $train_id = intval($_GET['id']);

    // Ambil data kereta untuk di edit
    $stmt = $conn->prepare("SELECT * FROM trains WHERE id=?");
    $stmt->bind_param("i", $train_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $train = $result->fetch_assoc();
    } else {
        die("Kereta tidak ditemukan.");
    }
}

if (isset($_POST['update_train'])) {
    $code = strip_tags(trim($_POST['code']));
    $price_per_seat = floatval($_POST['price_per_seat']);
    $available_seats = intval($_POST['available_seats']);

    // Update data kereta
    $stmt = $conn->prepare("UPDATE trains SET code=?, price_per_seat=?, available_seats=? WHERE id=?");
    $stmt->bind_param("sdsi", $code, $price_per_seat, $available_seats, $train_id);

    if ($stmt->execute()) {
        $success_message = "Kereta berhasil diperbarui!";
    } else {
        $error_message = "Error: " . $stmt->error;
    }

    $stmt->close();
    header("location: data_train_admin.php");

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
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.png">
    <link href="../css/style.css" rel="stylesheet">

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
                                    <a href="data_trainn_admin.php" style="background-color: white; font-size: 27px;"><button class="btn-dark" style="background-color: #8e9bb4; border-radius: 50%; width: 50px; height: 50px;">⬅</button></a>
                                    <h4 class="text-center" style="margin-top: 12px; margin-left: 28%;">Edit Train Form</h4>
                                    </div>
                                    <div class="back-button-container">
                                    </div>
                                    <form action="dt_train_act_admin.php" method="post">
                                        <div class="form-group">
                                            <label><strong>Trains Code</strong></label>
                                            <input type="text" class="form-control" id="code" name="code" 
                                            value="<?php echo $train['code']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Available Seats</strong></label>
                                            <input type="number" class="form-control" id="available_seats" name="available_seats" 
                                            value="<?php echo $train['available_seats']; ?>" required>
                                        </div>
                                            <div class="form-group">
                                            <label><strong>Price Seats</strong></label>
                                            <input type="text" class="form-control" id="price_per_seat" name="price_per_seat" value="<?php echo $train['price_per_seat']; ?>" required>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="update" name="update_train" class="btn btn-primary btn-block">Update</button>
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
    <script src="../vendor/global/global.min.js"></script>
    <script src="../js/quixnav-init.js"></script>
    <!--endRemoveIf(production)-->

</body>

</html>