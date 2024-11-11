<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="dashboard_user.php" class="brand-logo">
                <img class="logo-abbr" src="./images/pp.png" alt="">
                <img class="logo-compact" src="./images/text.png" alt="">
            </a>
            <style>
                .nav-header .brand-logo {
                    display: flex;
                    align-items: center;
                    text-decoration: none;
                }
                
                .nav-header .logo-abbr {
                    width: 100 px;  /* Atur ukuran logo abbreviation */
                    height: auto;
                    margin-right: 10px; /* Spasi antara logo abbreviation dan logo compact */
                }
                
                .nav-header .logo-compact {
                    width: 110px; /* Atur ukuran logo compact */
                    height: auto;
                    margin-right: 10px; /* Spasi antara logo compact dan brand title */
                }
                
                .nav-header .brand-logo img {
                    display: block;
                    max-width: 100%;
                    height: auto;
                }
            </style>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>
    
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a href="logout.php" class="dropdown-item">
                                    <i class="icon-key"></i>
                                    <span class="ml-2">Logout </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div>
            <div class="quixnav">
                <div class="quixnav-scroll">
                    <ul class="metismenu" id="menu">
                        <li class="nav-label">Menu Utama</li>
                        <li><a class="nav-link" href="dashboard_user.php" aria-expanded="false">
                            </i><span class="nav-text">HOME</span></a>
                        </li>
                        <li class="nav-label">Data</li>
                        <li><a class="nav-link" href="./user/view_schedule.php" aria-expanded="false">
                            </i><span class="nav-text">Schedule</span></a>
                        </li>
                        <li><a class="nav-link" href="./user/view_trains.php" aria-expanded="false">
                            </i><span class="nav-text">Trains Available</span></a>
                        </li>
                        <li><a class="nav-link" href="./user/view_destinations.php" aria-expanded="false">
                            </i><span class="nav-text">Destinations List</span></a>
                        </li>
                        <li><a class="nav-link" href="./user/booking.php" aria-expanded="false">
                            </i><span class="nav-text">Booking</span></a>
                        </li>
                        <li><a class="nav-link" href="./user/view_orders.php" aria-expanded="false">
                            </i><span class="nav-text">Transaction</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-xl-6 col-xxl-12">
                        <div class="welcome-text">
                            <h4><center>Train OP Valor</center></h4>
                            <h3><center>Hi, welcome back user!</center></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-xxl-12">

                            <div class="card">
                                <div class="stat-widget-two card-body">
                                    <div class="stat-content">
                                        <div class="stat-digit">View Schedules</div>
                                        <div><a class="stat-text stretched-link" href="./user/view_schedule.php" style="color: blue">View Details</a></div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="stat-widget-two card-body">
                                    <div class="stat-content">
                                        <div class="stat-digit">View Available Trains</div>
                                        <div><a class="stat-text stretched-link" href="./user/view_trains.php" style="color: blue">View Details</a></div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->

                        <!-- /# column -->
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://bit.ly/4ebIbHr" target="_blank">waLL Valor</a> 2024</p>
                <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p> 
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="./vendor/raphael/raphael.min.js"></script>
    <script src="./vendor/morris/morris.min.js"></script>


    <script src="./vendor/circle-progress/circle-progress.min.js"></script>
    <script src="./vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="./vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="./vendor/flot/jquery.flot.js"></script>
    <script src="./vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="./vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="./vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="./vendor/jquery.counterup/jquery.counterup.min.js"></script>


    <script src="./js/dashboard/dashboard-1.js"></script>

</body>

</html>