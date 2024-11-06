<!--**********************************
    Nav header start
***********************************-->
<div class="nav-header">
    <a href="dashboard_admin.php" class="brand-logo">
        <img class="logo-abbr" src="./images/pp.png" alt="">
        <img class="logo-compact" src="./images/text.png" alt="">
    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************
    Nav header end
***********************************-->
<style>
.nav-header {
    display: flex;
    align-items: center;
    padding: 10px;
    background-color: #f8f9fa; /* Warna latar belakang header */
}

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