<?php
session_start();
include 'koneksi.php';

$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id) {
    $result = $conn->query("SELECT * FROM trains WHERE id='$id'");
} else {
    // Default query if no specific id is provided
    $result = $conn->query("SELECT * FROM trains");
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
        <!-- Custom Stylesheet -->
        <link href="./css/style.css" rel="stylesheet">
    </head>

    <body>
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
                                    <th scope="col"><center>Price/Seat</center></th>
                                    <th scope="col"><center>Modification</center></th>
                                </tr>
                            </thead>
                            <tbody>
                            <tbody>
    <?php
        // Query to fetch data from the database
        $query = "SELECT * FROM trains";
        $result = mysqli_query($conn, $query);

        while ($trains = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "    <td><center>" . $trains['id'] . "</center></td>";
            echo "    <td><center>" . $trains['code'] . "</center></td>";
            echo "    <td><center>" . $trains['available_seats'] . "</center></td>";
            echo "    <td><center>" . $trains['price_per_seat'] . "</center></td>";
            echo "    <td><center>";
            echo "        <a href='edit.php?id=" . $trains['id'] . "' class='btn btn-success'>EDIT</a> | ";
            echo "        <a href='delete.php?id=" . $trains['id'] . "' class='btn btn-danger'>DELETE</a>";
            echo "    </center></td>";
            echo "</tr>";
        }
    ?>
</tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script src="./vendor/global/global.min.js"></script>
        <script src="./js/quixnav-init.js"></script>
        <script src="./js/custom.min.js"></script>
    </body>
</html>
