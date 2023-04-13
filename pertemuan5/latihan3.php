<?php 


// array numerik (array yang indexnya angka)

$mahasiswa = [
    ["fardli yansah", "2033431606", "sistem komputer", "fardli@raharja.info"],
    ["budi", "2033432365", "sistem komputer", "budi@raharja.info"],
    ["indira", "2033439854", "Teknik Informatika", "indira@raharja.info"]
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

    <?php foreach( $mahasiswa as $mhs) : ?>
    <ul>
       <li>Nama : <?php echo $mhs[0]; ?></li>
       <li>Nim : <?php echo $mhs[1]; ?></li>
       <li>Jurusan : <?php echo $mhs[2]; ?></li>
       <li>Email : <?php echo $mhs[3]; ?></li>
    </ul>
    <?php endforeach;  ?>
</body>
</html>

<!-- cara memperbaiki dari array numerik ke array associatif, yang dimana indexnya bukan lagi angka
 tapi indexnya adalah string yang kita buat sendiri untuk mengasosiasikan ke nilai yang ada didalam array 
(indexnya berasosisasi dengan nilai) -->