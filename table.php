<?php
session_start();
include 'koneksi.php';

    include "./templates/header.php";
    include "./templates/navbar.php";
    include "./templates/sidebar.php";

$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id) {
    $result = $conn->query("SELECT * FROM users WHERE id='$id'");
} else {
    // Default query if no specific id is provided
    $result = $conn->query("SELECT * FROM users WHERE role = 'user'");
}

if (!$conn) {
    die("Query gagal: " . mysqli_error($conn));
}
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
    <!-- Datatable -->
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="./css/style.css" rel="stylesheet">

</head>
        <body>
            <div class="content-body">
                <div class="container-fluid">
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Customer Manage</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-responsive-sm"> 
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Full Name</th>
                                                <th>Role</th>
                                                <th>Modification</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no= 0;
                                        while ($users = $result->fetch_assoc()) { 
                                        $no++;
                                        ?>
                                        <tr>
                                            <th scope="row"><?= $no; ?></th>
                                            <td><?php echo $users['username']; ?></td>
                                            <td><?php echo $users['full_nm']; ?></td>
                                            <td><?php echo $users['role']; ?></td>
                                            <td>
                                                <a href="admin_edit_user.php?id=<?php echo $users['id']; ?>" class="btn btn-success">Edit</a> | 
                                                <a href="admin_delete_user.php?id=<?php echo $users['id']; ?>" class="btn btn-danger">Delete</a>
                                            </td>
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
            <script src="./vendor/global/global.min.js"></script>
            <script src="./js/quixnav-init.js"></script>
            <script src="./js/custom.min.js"></script>
        </body>
</html>