<?php
session_start();
include "../koneksi.php"; // Koneksi ke database

include "../templates/header.php";
include "../templates/navbar.php";
include "../templates/sidebar.php";

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'user') {
    header("Location: ../index.php");
    exit();
}

// Mengambil data kereta
$trains = $conn->query("SELECT * FROM trains");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Focus - Bootstrap Admin Dashboard </title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
        <!-- Custom Stylesheet -->
        <link href="../css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Train List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-primary">
                                            <tr>
                                                <th scope="col"><center>No</center></th>
                                                <th scope="col"><center>Train Code</center></th>
                                                <th scope="col"><center>Available Seats</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $no= 0;
                                                while ($train = $trains->fetch_assoc()): 
                                                $no++;
                                            ?>
                                                <tr>
                                                    <th scope="row"><center><?= $no; ?></center></th>
                                                    <td><center><?php echo $train['code']; ?></center></td>
                                                    <td><center><?php echo $train['available_seats']; ?></center></td>
                                                </tr>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="../vendor/global/global.min.js"></script>
                    <script src="../js/quixnav-init.js"></script>
                    <script src="../js/custom.min.js"></script>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
  include '../templates/footer.php';