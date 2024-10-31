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