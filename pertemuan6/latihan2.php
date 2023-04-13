<?php 

// $mahasiswa = [
//     ["Fardli Yansah", "2033431606", 
// "Sistem Komputer","fardli@raharja.info"],
// [" Rudi", "2033438271", 
// "Sistem Komputer","rudi@raharja.info"]
// ]; 


// array associative
// definisinya sama seperti array numerik, kecuali 
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
    "nama" => "Fardli Yansah",
    "nim" => "2033431606",
    "jurusan" => "Sistem Komputer",
    "email" => "fardli@raharja.info",
    "gambar" => "done1.png"
    ],
    [
        "nama" => "Rudi",
        "nim" => "20334312275",
        "jurusan" => "Sistem Komputer",
        "email" => "rudi@raharja.info",
        "gambar" => "done2.png"
        ]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?php echo $mhs["gambar"] ?>" alt="">
        </li>
        <li>Nama :  <?= $mhs["nama"]; ?></li>
        <li>Nim : <?= $mhs["nim"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>
