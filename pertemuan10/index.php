<!-- halaman index untuk seorang admin -->


<!-- menghubungkan database -->

<?php 

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    


    <h1>Daftar Mahasiswa</h1>
    


        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach($mahasiswa as $row) :  ?>
            <tr>
                <td><?= $i; ?></td>

                <td>
                    <a href="">ubah</a> |
                    <a href="">hapus</a>
                </td>
                <td><img src="img/<?php echo $row["Gambar"]; ?>" width="50"></td>
                <td><?php echo $row["Nim"]; ?></td>
                <td><?php echo $row["Nama"]; ?></td>
                <td><?php echo $row["Email"]; ?></td>
                <td><?php echo $row["Jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php  endforeach;  ?>


        </table>



</body>
</html>