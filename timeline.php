<?php require_once("auth.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">

            <div class="card">
                <div class="card-body text-center">

                    <img class="img img-responsive rounded-circle mb-3" width="160" src="img/ajijahh.jpg">
                    
                    <h3><?php echo  $_SESSION["user"]["name"] ?></h3>
                    <p><?php echo $_SESSION["user"]["email"] ?></p>

                    <p><a href="logout.php">Logout</a></p>
                </div>
            </div>

            
        </div>



        <div class="col-md-8">

            <div class="card mb-3">
                <div class="card-body">
                  <table class="table">
  <tbody>
    <tr>
      <th scope="row">Nama Lengkap</th>
      <td>Siti Nurajijah</td>
    </tr>
    <tr>
      <th scope="row">NIM</th>
      <td>6701194081</td>
    </tr>
    <tr>
      <th scope="row">Jurusan</th>
      <td colspan="2">D3 Sistem Informasi</td>
    </tr>
    <tr>
      <th scope="row">Kelas</th>
      <td colspan="2">D3-SI-43-03</td>
    </tr>
  </tbody>
</table>
                
 
        </div>
    
    </div>


</body>
<div class="col-md-8">

            <div class="card mb-3">
                <div class="card-body">
                  <table class="table">
                    <p>Informasi Tentang Indeks Prestasi </p>
                    <p><a href="indexx.php">Klik Disini</a></p>

  
</table>
                
 </div>
        </div>
    
    </div>
</div>

</body>
</html>