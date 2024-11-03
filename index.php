

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
                                    <h3 class="text-center mb-6">Sign in your account</h3>
                                    <form action="proses_login.php" method="post">
                                        <div class="form-group">
                                            <label><strong>Username</strong></label>
                                            <input class="form-control" id="username" type="text" name="username" placeholder="Enter Username" required />
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input class="form-control" id="password" type="password" name="password" placeholder="Enter Password" required />
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
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