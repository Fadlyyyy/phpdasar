<?php 

// definisikan fungsi terlebih dahulu
// baru bisa dipanggil
// contoh ingin menampilkan pesan selamat datang
// didalam function biasanya mengembalikkan nilai

function salam($salam = "halo, selamat", $waktu =  "pagi", $nama = "fardli") {
    return "$salam $waktu $nama!";
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?php echo salam();  ?></h1>
</body>
</html>