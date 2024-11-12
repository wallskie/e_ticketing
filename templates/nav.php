<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo Section -->
                <div class="col-md-2">
                    <div id="colorlib-logo">
                        <a href="../dashboard_user.php">
                            <strong>OPW Train</strong>
                        </a>
                    </div>
                </div>
                
                <!-- Menu Section -->
                <div class="col-md-10 text-right menu-1">
                    <ul class="nav-list">
                        <li><a href="../dashboard_user.php"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="travel.html"><i class="fas fa-calendar-alt"></i> Schedule</a></li>
                        <li><a href="view_trains.php"><i class="fas fa-train"></i> Available Trains</a></li>
                        <li><a href="travel.html"><i class="fas fa-map-marked-alt"></i> Destination List</a></li>
                        <li><a href="about.html"><i class="fas fa-ticket-alt"></i> Booking</a></li>
                        <li><a href="transaction.html"><i class="fas fa-exchange-alt"></i> Transaction</a></li>
                        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li> <!-- Logout Item -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- CSS Styles -->
<style>
.colorlib-nav {
    background-color: #ffffff; /* Ganti background menjadi putih */
}

#colorlib-logo a {
    color: #343a40; /* Ganti warna teks logo menjadi gelap agar terlihat di background putih */
}

.menu-1 .nav-list li a {
    color: #343a40; /* Ganti warna teks menu menjadi gelap agar kontras dengan background putih */
}

.menu-1 .nav-list li a:hover {
    color: #ffffff; /* Ganti warna teks menjadi putih saat dihover */
    background-color: #343a40; /* Ganti background hover menjadi gelap */
}

.menu-1 .nav-list li a.active {
    color: #ffffff; /* Warna teks putih untuk link aktif */
    background-color: #343a40; /* Background gelap untuk link aktif */
}

</style>
