<!DOCTYPE html>
<html>
<head>
    <title>Form Input Nilai</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <?php
    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";

    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $semester=input($_POST["semester"]);
        $ip=input($_POST["ip"]);
    
        //Query input menginput data kedalam tabel anggota
        $sql="insert into anggota (semester,ip) values
		('$semester','$ip')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:indexx.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }
    ?>
    <h2>Input Data</h2>


    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class="form-group">
            <label>Semester:</label>
            <input type="number" name="semester" class="form-control" placeholder="Masukan Semester" required />

        </div>
        <div class="form-group">
            <label>IP:</label>
            <input type="text" name="ip" class="form-control" placeholder="Masukan Ip" required/>

        </div>
        

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        
        <a href="indexx.php" class="btn btn-primary" role="button">Back</a>
    </form>
</div>
</body>
</html>