<?php 

// array


// array adalah sebuah variable yang bisa menampung lebih dari 1 nilai
//dengan kata lai  array adalah variable yang dapat memiliki banyak nilai
// array adalah pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// cara lama membuat array
$hari = array("senin", "selasa,", "rabu");

// cara baru
$bulan = ["jan", "feb", "mar", "apr"];

// elemen pada array, tipe datanya boleh beda



// contoh

$arr1 = [123, "tulisan", false];
// var_dump($array);
// echo "<br>";
// print_r($bulan);
// menampilkan array

// var+dump() / print_r()


// menampilkan 1 element pada array
// dengan cara menambahkan index tambahkan [] dan pilih index ke berapa

// echo "<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);




?>