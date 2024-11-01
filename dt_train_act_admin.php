<?php
session_start();
include 'koneksi.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $code = $_POST['code'];
    $available_seats = $_POST['available_seats'];
    $price_per_seat = $_POST['price_per_seat'];

    $result = $conn->query ("UPDATE trains SET code='$code', available_seats='$available_seats', price_per_seat='$price_per_seat' WHERE id='$id'");
    
    if ($conn->query($sql) === TRUE) {
        header('Location: data_train_admin.php');
    } else {
        echo "Error: " . $conn->error;
    }
}
?>