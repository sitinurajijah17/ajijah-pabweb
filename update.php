<!DOCTYPE html>
<html>
<head>
    <title>Form Update Data</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <h2>Update Data</h2>


    <form action="P update.php" method="post">
        <div class="form-group">
            <label>Semester:</label>
            <input type="number" name="username" class="form-control" value="<?=$_GET['semester'] ?>" placeholder="Masukan Semester" required/>

        </div>
        <div class="form-group">
            <label>Ip:</label>
            <input type="text" name="nama" class="form-control" value="<?=$_GET['ip'] ?>" placeholder="Masukan Ip" required/>

        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <a href="indexx.php" class="btn btn-primary" role="button">Back</a>
    </form>
</div>
</body>
</html>