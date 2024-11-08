<?php

include '../koneksi.php';

// Fungsi Hapus Kereta
if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $sql = "DELETE FROM trains WHERE id=$id";
    $conn->query($sql);

    header("location: data_train_admin.php");
}?>