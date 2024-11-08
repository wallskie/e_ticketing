<?php
session_start();
include '../koneksi.php';

    include "../templates/header.php";
    include "../templates/navbar.php";
    include "../templates/sidebar.php";

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../index.php");
    exit();
}

// Fungsi Hapus Keberangkatan
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM schedules WHERE id=$id";
    $conn->query($sql);
    echo "Jadwal keberangkatan berhasil dihapus.";
}

$schedules = $conn->query("SELECT schedules.*, trains.code AS train_code, destinations.destination_name AS destination_name 
    FROM schedules 
    JOIN trains ON schedules.train_id = trains.id 
    JOIN destinations ON schedules.destination_id = destinations.id");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Focus - Bootstrap Admin Dashboard </title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.png">
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
                                <h4 class="card-title">Manage Schedules</h4>
                                <button type="button" class="btn btn-rounded btn-info" ><a href="add_sched_admin.php" class="btn-info"><span
                                        class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                                    </span>Add</a></button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-primary">
                                            <tr>
                                                <th scope="col"><center>No</center></th>
                                                <th scope="col"><center>Train</center></th>
                                                <th scope="col"><center>Destinations</center></th>
                                                <th scope="col"><center>Departure Day</center></th>
                                                <th scope="col"><center>Modification</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            $no= 0;
                                            while ($s = $schedules->fetch_assoc()): 
                                            $no++;
                                            ?>
                                                <tr>
                                                    <th scope="row"><center><?= $no; ?></center></th>
                                                    <td><center><?php echo $s['train_code']; ?></center></td>
                                                    <td><center><?php echo $s['destination_name']; ?></center></td>
                                                    <td><center><?php echo $s['departure_day']; ?></center></td>
                                                    <td><center>
                                                    <a href="?delete=< ?php echo $s['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus jadwal ini?')" class="btn btn-danger">Hapus</a>
                                                    </center></td>
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
include "../templates/footer.php";