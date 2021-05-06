<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <br>
    <h4>Index IP</h4>
    <table class="table table-bordered table-hover">
        <br>
        <thead>
        <tr>
            <th>No</th>
            <th>Semester</th>
            <th>Ip</th>
            <th colspan='2'>Aksi</th>

        </tr>
        </thead>
        <?php
        include "koneksi.php";
        $sql="select * from anggota order by semester asc";

        $hasil=mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data["semester"]; ?></td>
                <td><?php echo $data["ip"];   ?></td>
              
                <td>
                    <a href="update.php?semester=<?=$data['semester']?>&ip=<?=$data['ip']?>" class="btn btn-warning" role="button">Update</a>
                    <a href="delete.php?semester=<?=$data['semester']; ?>" class="btn btn-danger" role="button">Delete</a>
                </td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
    <a href="create.php" class="btn btn-primary" role="button">Tambah Data</a>
    <a href="timeline.php" class="btn btn-primary" role="button">Back</a>

</div>

</body>
</html>
