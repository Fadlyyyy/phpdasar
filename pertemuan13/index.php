<?php 

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ASC");

// tombol cari ditekan
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}



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
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>

    <form action="" method="post">

        <input type="text" name="keyword" size="30px" autofocus placeholder="Masukkan keyword pencarian.." autocomplete="off">
        <button type="submit" name="cari">cari</button>
    </form>
    <br>
    

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
                    <a href="ubah.php?id=<?php echo $row["id"]; ?>">ubah</a> |
                    <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick ="return confirm('anda yakin akan mengapus data ini?');">hapus</a>
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