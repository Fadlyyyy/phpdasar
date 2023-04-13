<?php

// array
// membuat array


// $hari = array ("senin","selasa","rabu"); //membuat array versi lama
// $bulan = ["januari","februari","maret"]; //membuat array versi baru
// $arr = [100,"teks",true]; //membuat array yang tipe datanya berbeda2

// menampilkan array

// versi debugging
// var_dump($hari); //lebih lengkap
// echo "<br>";
// print_r($bulan); //print r penulisannya lebih ringkas

// echo "<br>";
// menampilkan 1 element pada array
// tiap2 element mempunyai index yang dimulai dari 0 untuk index element pertama

// echo $arr[0];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            float: left;
            margin: 3px;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear:both;
        }
    </style>
</head>
<body>
    <?php 
        $angka = [
            [1,2,3],
            [4,5,6],
            [7,8,9]
        ]; //array multi dimensi
        // echo $angka[2][2]; //mencetak array multi dimensi
    ?>
     <?php foreach( $angka as $a) : ?>
        <?php foreach ( $a as $b) : ?>
            <div class="kotak"><?= $b; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>

       
</html>