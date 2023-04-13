<!-- halaman index untuk seorang admin -->


<!-- menghubungkan database -->

<?php 

$db = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa 

$result = mysqli_query($db, "SELECT * FROM mahasiswa");


// var_dump($result);
// if( !$result) {
//     echo mysqli_error($db);
// } //untuk memunculkan erorr


// ambil data (fetch) mahasiswa dari object result

//mysqli_fetch_row() mengembalikkan array yang tipenya numerik (indexnya angka)
//mysqli_fetch_assoc() mengembalikkan array tipenya associative
// mysqli_fetch_array() mengembalikkan array yang tipenya  numerik dan associative namun ada kekurangannya
// yakni jika kita ingin menampilkan semua isinya, didalam arraynya ada 2-2nya. yakni numerik ada associative pun ada. (data yang disajikannya double)
//mysqli_fetch_object() //mengembalikkan nilai object gunakan var_dump($mhs -> nama); agar efektif

// while($mhs = mysqli_fetch_assoc($result) ) {
// var_dump($mhs);

// }


?>

<!-- menghubungkan database -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    


    <h1>Daftar Mahasiswa</h1>


        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>

            <?php $i = 1; ?>
            <?php while( $row = mysqli_fetch_assoc($result)) :  ?>
            <tr>
                <td><?= $i; ?></td>

                <td>
                    <a href="">ubah</a> |
                    <a href="">hapus</a>
                </td>
                <td><img src="img/<?php echo $row["Gambar"]; ?>" width="50"></td>
                <td><?php echo $row["Nim"]; ?></td>
                <td><?php echo $row["Nama"]; ?></td>
                <td><?php echo $row["Email"]; ?></td>
                <td><?php echo $row["Jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php  endwhile;  ?>


        </table>



</body>
</html>