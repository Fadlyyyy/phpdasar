<!-- sintaks dasar php -->

<?php  
    // pertemuan 2 - PHP dasar
    // sintaks php

    //standart output (mencetak sesuatu ke layar)
    // echo, print 
    // print.r
    // var_dump (mencampilkan isi variable)

    // echo "fardli";

    // penulisan sintaks php
    // 1. php didalam HTML
    // 2. HTML didalam PHP
    

    // variable dan tipe data
    // variable 
    // tidak boleh diawali dengan angka tapi boleh mengandung angka!
    // contoh $nama = "fardli"; (boleh)
    // $nama = "1fardli"; (gaboleh)

    // $nama = "fardli yansah";

    // echo "halo, nama saya $nama";

    // echo 'halo, nama saya $nama'; (interpolasi)

    // operator didalam php
    // 1. operator aritmatika (+, -, *, /, %)

    // $x = 10;
    // $y = 20;

    // echo $x * $y;


    // penggabung string / concatination / concat
    // .

    // $nama_depan = "fardli";
    // $nama_belakang ="yansah";
    // echo $nama_depan . " " . $nama_belakang;


    // operator assignment (operator penugasan)
    // =, +=, -=, *=, /=, %=, .=

    // $x = 1;
    // $x += 5;
    // echo $x;

    // $nama = "fardli";
    // $nama .= " ";
    // $nama .= "yansah";
    // echo $nama;

    // operator perbandingan
    //  <, >, <=, >=, ==, != (operator perbandingan tidak mengecek tipe datanya, hanya mengecek nilainya saja!)

    // var_dump(1 == "1"); (hanya cek nilai)

    // operator identitas (mengecek tipe data dan nilai)
    // ===, !== (tidak sama dengan)
    // var_dump(1 === "1");

    // operator logika
    // 1. &&
    // 2. || (pipe)
    // 3. ! (not)

    // dipakai untuk pengkondisisan

    // $x = 30;
    // var_dump($x < 20 && $x % 2 == 0);

    // jika menggunakan && hasilnya harus benar di keduanya
    // jika menggunakan || tak apa benar 1 saja

    $x = 30;
    var_dump($x < 20 || $x % 2 == 0);
?>