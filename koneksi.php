<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "e_ticketing";
$conn = new mysqli ($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Koneksi GAGAL BLOK!" . $conn->connect_error);
}
?>