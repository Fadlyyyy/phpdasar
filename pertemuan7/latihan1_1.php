<?php 

$datapegawai = [
    [
        "nama_pegawai" => "budi bardidi",
        "nip" => "2021010024001",
        "divisi" => "packing",
        "email" => "budi_lintangchiken@gmail.com",
        "gambar" => "done1.png",
        "alamat" => "cikampek"
    ],
    [
        "nama_pegawai" => "andi firmansyah",
        "nip" => "2010010024004",
        "divisi" => "pemotongan",
        "email" => "andi_lintangchiken@gmail.com",
        "gambar" => "done2.png",
        "alamat" => "pandeglang"
    ]
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Data Pegawai</h1>
    <ul>
    <?php foreach( $datapegawai as $datpeg) : ?>
    <li>
        <a href="latihan2.php?nama_pegawai=
        <?= $datpeg["nama_pegawai"]; ?>
        &nip=<?= $datpeg["nip"]; ?>
        &divisi=<?= $datpeg["divisi"]; ?>
        &email=<?= $datpeg["email"]; ?>
        &alamat=<?= $datpeg["alamat"]; ?>
        &gambar=<?= $datpeg["gambar"]; ?>
        ">
        <?= $datpeg["nama_pegawai"]; ?>
        </a>
    </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>