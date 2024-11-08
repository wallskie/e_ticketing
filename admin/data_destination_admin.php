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

$dest = $conn->query("SELECT * FROM destinations");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Focus - Bootstrap Admin Dashboard </title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href=".../images/favicon.png">
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
                                <h4 class="card-title"> Data Destinations</h4>
                                <button type="button" class="btn btn-rounded btn-info" ><a href="add_desti_admin.php" class="btn-info"><span
                                        class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                                    </span>Add</a></button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-primary">
                                            <tr>
                                                <th scope="col"><center>No</center></th>
                                                <th scope="col"><center>Destinations</center></th>
                                                <th scope="col"><center>Modification</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no= 0;
                                            while ($d = $dest->fetch_assoc()): 
                                            $no++;
                                            ?>
                                                <tr>
                                                    <th scope="row"><center><?= $no; ?></center></th>
                                                    <td><center><?php echo $d['destination_name']; ?></center></td>
                                                    <td><center>
                                                        <a href="edit_desti_admin.php?id=<?php echo $d['id']; ?>" class="btn btn-success" style=" margin-right: .4rem;">Edit</a>
                                                        <form action="del_desti_admin.php" method="post" style=" display: inline; ">
                                                            <input type="hidden" name="delete" value=<?php echo $d['id']; ?>>
                                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Sure Want To Delete This?');">Delete</button>
                                                        </form>
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
    include '../templates/footer.php';
