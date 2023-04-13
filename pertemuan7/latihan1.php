<?php 

// variable scope (lingkup variable)

// $x = 10; //variable local untuk halaman
// function tampilX() {
    // $x = 20;

    // global $x; //artinya adalah saya mendefinisikan variable x, saya akan mencari ada atau tidak variable x diluar functionnya, jika ada pakai yang itu! 
    // echo $x; //variable lokal untuk function itu saja
// }

// tampilX();
// echo "<br>";
// echo $x;
?>


<!-- variable super global -->
<!-- variable super global adalah variable2 yang sudah dimiliki oleh php, yang bisa kita akses dimanapun dan kapanpun didalam halaman php kita. -->
<!-- macam variable super global yang dimiliki php-->
<!-- 
    -$_GET
    -$_POST
    -$_REQUEST
    -$_SESSION
    -$_COOKIE
    -$_SERVER
    -$_ENV
-->

<!-- dari semua variable superglobal diatas tipe dari semuanya adalah associatife array  -->
<!-- masing2 punya perilaku yang berbeda beda, masing2 array diatas punya cara kerja yang berbeda2-->

<?php

// superglobals 
// variable global milik php
// merupakan array associative

// var_dump($_SERVER);
// echo $_SERVER["SERVER_NAME"];


//  $_GET

// $_GET["nama"] = "Fardli Yansah";
// $_GET["nim"] = "2033431606";
var_dump($_GET);

// diatas adalah cara memasukkan data kedalam array associative

// cara lain memasukkan data dengan $_GET yaitu dengan menggunakan "" dialamat websitenya..





?>

<!-- cara memasukkan data kedalam halaman atau ingin memasukkan data kedalam variable $_GET caranya adalah..  -->
<!-- dengan menambahkan diakhir urlnya tanda ?  -->
<!-- jika kalian menemukan tanda ? diakhir url adalah sekarang saya akan memasukkan data kehalaman ini..  -->
<!-- memasukkannya yaitu kedalam variable $_GET -->
<!-- cara menuliskannya adalah kalian buat pasangan antara key dan value pisahkan dengan tanda = -->
<!-- contoh http://localhost/php_dasar/pertemuan7/latihan1.php?nama=fardli%20yansah -->
<!-- note : tanda %20 itu adalah cara si url untuk menerjemahkan tanda atau karakter (spasi) -->
<!-- saya akan memasukkan sebuah data yang keynya adalah nama, valuenya adalah fardli yansah kedalam variable $_GET  -->
<!-- artinya kalimatnya bisa diperbaiki, saya bisa mengirimkan data kehalaman ini dengan menggunakan metode Request GET -->
<!-- note : jika metode requestnya GET datanya akan dikirim di url lalu data tersebut akan ditangkap oleh variable superglobal yakni $_GET -->
<!-- jika ingin menambahkan data yang lain caranya adalah menambahkan tanda & dan diikuti dengan pasangan antara key dan value -->
<!-- http://localhost/php_dasar/pertemuan7/latihan1.php?nama=fardli%20yansah&nim=2033431606 -->
<!-- contoh seperti diatas -->

<!-- diatas adalah penjelasan cara mengenai mengirimkan data menggunakan metode request GET, data dikirim dengan menggunakan metode request GET dan akan ditangkap oleh variable superglobal $_GET-->

