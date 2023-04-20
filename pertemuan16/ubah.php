<?php 

session_start();

if( !isset ($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require "functions.php";

$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil diubah!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal diubah!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data mahasiswa</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
            margin-top: 50px;
        }
        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.3);
        }
        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <h1>Ubah data mahasiswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
    <input type="hidden" name="gambarLama" value="<?= $mhs["Gambar"]; ?>">
        <ul>
            <li>
                <label for="Nama">Nama : </label>
                <input type="text" name="Nama" id="Nama" required value="<?= $mhs["Nama"]; ?>">
            </li>
            <li>
                <label for="Nim">NIM : </label>
                <input type="text" name="Nim" id="Nim" required value="<?= $mhs["Nim"]; ?>">
            </li>
            <li>
                <label for="Email">Email : </label>
                <input type="text" name="Email" id="Email" required value="<?= $mhs["Email"]; ?>">
            </li>
            <li>
                <label for="Jurusan">Jurusan : </label>
                <input type="text" name="Jurusan" id="Jurusan" required value="<?= $mhs["Jurusan"]; ?>">
            </li>
            <li>
                <label for="Gambar">Gambar : </label>
                <img src="img/<?= $mhs['Gambar']; ?>" alt="">
                <input type="file" name="Gambar" id="Gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>