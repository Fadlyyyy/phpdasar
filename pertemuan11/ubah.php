<?php 
require "functions.php";

// ambil data di url

$id = $_GET["id"];


// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil diubah atau tidak
    if( ubah($_POST) > 0 ) {
        echo "
        <script>
        alert('data berhasil diubah!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal diubah!');
        document.location.href = 'index.php';
        </script>";
       };
};

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data mahasiswa</title>
</head>
<body>
    <h1>Ubah data mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
            <li>
                <label for="Nama">Nama : </label>
                <input type="text" name="Nama" id="Nama" required value="<?= $mhs["Nama"]; ?>">
            </li>
            </li>
            <li>
                <label for="Nim">Nim : </label>
                <input type="text" name="Nim" id="Nim" required value="<?= $mhs["Nim"]; ?>">
            </li>
            <li>
            <label for="Email">Email : </label>
                <input type="text" name="Email" id="Email" required value="<?= $mhs["Email"]; ?>">
            </li>
            </li>
            <li>
            <label for="Jurusan">Jurusan : </label>
                <input type="text" name="Jurusan" id="Jurusan" required value="<?= $mhs["Jurusan"]; ?>">
            </li>
            </li>
            <li>
            <label for="Gambar">Gambar : </label>
                <input type="text" name="Gambar" id="Gambar" required value="<?= $mhs["Gambar"]; ?>">
            </li>
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>




    </form>


</body>
</html>