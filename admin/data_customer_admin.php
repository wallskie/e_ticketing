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

// Fungsi Hapus User
if (isset($_GET['delete_id'])) {
    $delete_id = intval($_GET['delete_id']);
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $delete_id);
    if ($stmt->execute()) {
        echo "<script>alert('User berhasil dihapus');</script>";
        echo "<script>window.location.href = 'data_customer_admin.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus user');</script>";
    }
}

// Ambil data user dengan role customer
$sql = "SELECT username, full_nm, role FROM users WHERE role = 'user'";
$result = $conn->query($sql);

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
    <!-- Datatable -->
    <link href="../vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
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
                                <h4 class="card-title">Customer List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-primary">
                                            <tr>
                                                <th scope="col"><center>No</center></th>
                                                <th scope="col"><center>Username</center></th>
                                                <th scope="col"><center>Full Name</center></th>
                                                <th scope="col"><center>Status</center></th>
                                                <th scope="col"><center>Modification</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no= 0;
                                        while ($users = $result->fetch_assoc()) { 
                                        $no++;
                                        ?>
                                        <tr>
                                            <th scope="row"><center><?= $no; ?></center></th>
                                            <td><center><?php echo $users['username']; ?></center></td>
                                            <td><center><?php echo $users['full_nm']; ?></center></td>
                                            <td><center><?php echo $users['role']; ?></center></td>
                                            <td><center> 
                                                <a href="data_customer_admin.php?delete_id=<?php echo $users['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')";>Delete</a>
                                            </center></td>
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