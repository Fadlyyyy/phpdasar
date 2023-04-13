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
    ],
    [
        "nama_pegawai" => "riska sari",
        "nip" => "2011010055002",
        "divisi" => "pemotongan",
        "email" => "riska_lintangchiken@gmail.com",
        "gambar" => "done3.png",
        "alamat" => "subang"
    ],
    [
        "nama_pegawai" => "nurjen firdiansyah",
        "nip" => "2008010034009",
        "divisi" => "sanitasi",
        "email" => "nurjen_lintangchiken@gmail.com",
        "gambar" => "done4.png",
        "alamat" => "garut"
    ],
    [
        "nama_pegawai" => "rudi tabuti",
        "nip" => "2022010063002",
        "divisi" => "packing",
        "email" => "rudi_lintangchiken@gmail.com",
        "gambar" => "done5.png",
        "alamat" => "jakarta"
    ],
    [
        "nama_pegawai" => "doddy sudodi",
        "nip" => "2009010014091",
        "divisi" => "sanitasi",
        "email" => "doddy_lintangchiken@gmail.com",
        "gambar" => "done6.png",
        "alamat" => "papua"
    ],
    [
        "nama_pegawai" => "nurul marimping",
        "nip" => "2020010024003",
        "divisi" => "packing",
        "email" => "nurul_lintangchiken@gmail.com",
        "gambar" => "done7.png",
        "alamat" => "karawang"
    ],
    [
        "nama_pegawai" => "dito firmandi",
        "nip" => "2019010074009",
        "divisi" => "pemotongan",
        "email" => "dito_lintangchiken@gmail.com",
        "gambar" => "done8.png",
        "alamat" => "tasik"
    ],
    [
        "nama_pegawai" => "oji sarpudin",
        "nip" => "2007010044002",
        "divisi" => "packing",
        "email" => "oji_lintangchiken@gmail.com",
        "gambar" => "done9.png",
        "alamat" => "bandung"
    ],
    [
        "nama_pegawai" => "likun maniping",
        "nip" => "2006010074091",
        "divisi" => "sanitasi",
        "email" => "likun_lintangchiken@gmail.com",
        "gambar" => "done10.png",
        "alamat" => "tangerang"
    ]
    ];








?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar karyawan</title>
</head>
<body>
    <h1>Daftar Nama Karyawan PT Lintang Chiken</h1>
    <?php foreach($datapegawai as $datpeg) : ?>
        <ul>
            <li>
                <img src="img/<?php echo $datpeg["gambar"] ?>" alt="">
            </li>
            <li>Nama Pegawai : <?php echo $datpeg["nama_pegawai"]; ?></li>
            <li>NIP : <?php echo $datpeg["nip"]; ?> </li>
            <li>Divisi : <?php echo $datpeg["divisi"]; ?></li>
            <li>Email Kantor : <?php echo $datpeg["email"]; ?></li>
            <li>alamat : <?php echo $datpeg["alamat"]; ?></li>
        </ul>

    <?php endforeach; ?>
</body>
</html>