<?php
    include 'koneksi.php';
    $stmt = $kon->prepare("DELETE FROM anggota WHERE semester = ?");
    $stmt->bind_param("i", $_GET['semester']);
    $stmt->execute();
    header('location:indexx.php');
?>