<?php
session_start();
include "koneksi.php"; // Pastikan koneksi ke database

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

$des = null; // Inisialisasi $des dengan null agar terhindar dari undefined variable warning.

if (isset($_GET['id'])) {
    $dest = intval($_GET['id']);

    // Ambil data destinasi untuk diedit
    $stmt = $conn->prepare("SELECT * FROM destinations WHERE id=?");
    $stmt->bind_param("i", $dest);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $des = $result->fetch_assoc();
    } else {
        die("Destinasi tidak ditemukan.");
    }
}

if (isset($_POST['update_dest'])) {
    $destination_name = strip_tags(trim($_POST['destination_name']));

    // Update data destinasi
    $stmt = $conn->prepare("UPDATE destinations SET destination_name=? WHERE id=?");
    $stmt->bind_param("si", $destination_name, $dest);

    if ($stmt->execute()) {
        $success_message = "Destinasi berhasil diperbarui!";
    } else {
        $error_message = "Error: " . $stmt->error;
    }

    $stmt->close();
    header("location: data_destination_admin.php");
    exit(); // Pastikan proses setelah redirect berhenti.
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
                                    <h4 class="text-center mb-4">Edit Destinaton form</h4>
                                    <form method="POST" action="">
                                        <div class="form-group">
                                            <label><strong>Destination Name</strong></label>
                                            <input type="text" class="form-control" id="destination_name" name="destination_name" 
                                            value="<?php echo isset($des['destination_name']) ? $des['destination_name'] : ''; ?>" required>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="update" name="update_dest" class="btn btn-primary btn-block">Update</button>
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