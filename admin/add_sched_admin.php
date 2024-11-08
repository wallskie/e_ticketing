<?php
session_start();
include "../koneksi.php"; // Pastikan koneksi ke database

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../index.php");
    exit();
}
if (isset($_POST['add_schedule'])) {
    $train_id = $_POST['train_id'];
    $destination_id = $_POST['destination_id'];
   // Memastikan format tanggal valid
   $departure_day = $_POST['departure_day'];
    
   // Cek apakah tanggal valid
   if (DateTime::createFromFormat('Y-m-d', $departure_day) !== false) {
       // Menyiapkan query
       $sql = "INSERT INTO schedules (train_id, destination_id, departure_day) VALUES ($train_id, $destination_id, '$departure_day')";
       
       if ($conn->query($sql) === TRUE) {
           echo "Jadwal keberangkatan berhasil ditambahkan.";
       } else {
           echo "Gagal menambahkan jadwal keberangkatan: " . $conn->error;
       }
   } else {
       echo "Format tanggal tidak valid.";
   }
    
    header("location:data_schedule_admin.php");
    exit();
}

$trains = $conn->query("SELECT * FROM trains");
$destinations = $conn->query("SELECT * FROM destinations");
$schedules = $conn->query("SELECT schedules.*, trains.code AS train_code, destinations.destination_name AS destination_name 
    FROM schedules 
    JOIN trains ON schedules.train_id = trains.id 
    JOIN destinations ON schedules.destination_id = destinations.id");

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
                                        <a href="data_schedule_admin.php" style="background-color: white; font-size: 27px;"><button class="btn-dark" style="background-color: #8e9bb4; border-radius: 50%; width: 50px; height: 50px;">⬅</button></a>
                                        <h4 class="text-center" style="margin-top: 12px; margin-left: 28%;">Add Schedule Form</h4>
                                    </div>
                                    <div class="back-button-container">
                                    </div>
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label for="train_id" class="form-label"><strong>Select Train</strong></label>
                                            <select name="train_id" class="form-control" style="width:100%" required>
                                                <option value="">...</option>
                                                <?php while ($train = $trains->fetch_assoc()): ?>
                                                    <option value="<?php echo $train['id']; ?>"><?php echo $train['code']; ?></option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="destination_id" class="form-label"><strong>Select Destinations</strong></label>
                                            <select name="destination_id" class="form-control" style="width:100%" required>
                                                <option value="">...</option>
                                                <?php while ($destination = $destinations->fetch_assoc()): ?>
                                                    <option value="<?php echo $destination['id']; ?>"><?php echo $destination['destination_name']; ?></option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>
                                            <div class="form-group">
                                            <label for="departure_day"><strong>Departure Day</strong></label>
                                            <input type="date" name="departure_day" class="form-control" required>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" name="add_schedule" class="btn btn-primary btn-block">Add</button>
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
</body>

</html>