<!-- function -->
<!-- date and time 
-time()
-date()
-mktime()
-stormtime()
-->

<!-- date untuk menampilkan tanggal dengan format tertentu -->
<!--  date("l") memanggil sebuah fungsi didalam php untuk mengelola tanggal dalam format hari -->
<!-- date("d") tanggal -->
<!-- date("m")  bulan -->
<!-- date("y")  tahun -->

<!-- date("l d-M-y") -->
<!-- <?php 

    // echo date("l");

?> -->

<!-- time -->

<?php 

// time
// unix TimeStamp / Epoch time
// detik yang sudah berlalu sejak 1 januari 1970

// echo date("d-M-Y", time()-60*60*24*100);
// echo time();

// mktime
// membuat sendiri detik 
// parameter mktime ada 6
// bisa menyimpan 6 angka

// mktime(0,0,0,0,0,0)

// urutan 
//  jam, menit, detik, bulan , tanggal, tahun
// echo date("l", mktime(0,0,0,11,03,2001));

// strtotime
// echo  date ("l",strtotime("03 nov 2001"));

?>

<!-- string -->
<!-- 
-strlen()
-strcmp()
-explode()
-htmlspecialchars()
 -->


 <!-- utility (fungsi bantuan) -->
 <!-- 
-var_dump() mengecek string total
-isset() menghasilkan nilai boolean
-empty() apakah variablenya ada isinya atau tidak
-die() untuk memberhentikan program
-sleep() memberhentikan sementara
  -->


<!-- user-defined function (fungsi yang dibuat sendiri) -->


