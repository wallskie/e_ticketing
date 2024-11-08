<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Query untuk memeriksa user
    $result = $conn->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
    
    // Cek jika hasil query ditemukan
    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];

        // Arahkan berdasarkan peran user
        if ($user['role'] === 'admin') {
            header("Location:dashboard_admin.php");
        } else {
            header("Location:user_dashboard.php");
        }
        exit();
    } 
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
                <div class="col-md-5">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h3 class="text-center mb-6 ">Sign in your account</h3>
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label><strong>Username</strong></label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Input Username" required>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Input Password" required>
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="login" class="btn btn-primary btn-block">Sign me in</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p><center>Don't have an account? <a class="text-primary" href="register.php">Sign up</a></center></p>
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
        </div>
    </div>


    <!--**********************************
        Scriptssdsdsd
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>

</body>

</html>