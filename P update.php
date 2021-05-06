<?php
    include 'koneksi.php';
    $stmt = $kon->prepare("UPDATE anggota SET semester = ? , ip = ? WHERE semester = ?");
    $stmt->bind_param("isi", $_POST['username'],$_POST['nama'],$_POST['username']);
    $stmt->execute();
    $stmt->close();
    echo "<script> 
          alert('Data berhasil di update.');
          document.location.href = 'indexx.php';
          </script>";
?>