<?php 

//cek apakah tidak ada data di $_GET
if( 
    !isset($_GET["nama"])   || 
    !isset($_GET["nip"])    || 
    !isset($_GET["divisi"]) ||
    !isset($_GET["email"])  ||
    !isset($_GET["alamat"]) ||
    !isset($_GET["gambar"])
    ) {
    // if( !isset($_GET["nama"]) ) dibaca ketika $_GET["nama"] belum di set, maka paksa user untuk pindah.
    // redirect (memindahkan user dari sebuah halaman ke halaman lain )
    header("Location: latihan1_1.php");
    exit;
}

// isset adalah function yang digunakan untuk mengecek, apakah sebuah varaible sudah pernah dibuat atau belum.


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rincian data pegawai</title>
</head>
<body>
    
    <ul>
            <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
            <li><?= $_GET["nama_pegawai"]; ?></li>
            <li><?= $_GET["nip"]; ?></li>
            <li><?= $_GET["divisi"]; ?></li>
            <li><?= $_GET["email"]; ?></li>
            <li><?= $_GET["alamat"]; ?></li>
            <li><?= $_GET["gambar"]; ?></li>
    </ul>

<a href="latihan1_1.php">Kembali ke daftar data pegawai</a>



</body>
</html>