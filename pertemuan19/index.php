<?php 

session_start();

if( !isset ($_SESSION["login"])) {
    header("Location: login.php");
    exit;
} 

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ASC");

// tombol cari ditekan
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        /* Style untuk tabel */
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }

        th, td {
            text-align: center;
            padding: 10px;
        }

        th {
            background-color: #333;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Style untuk form pencarian */
        form {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }

        button[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #555;
        }

        /* Style untuk tombol aksi pada kolom Aksi */
        .aksi a {
            display: inline-block;
            margin-right: 5px;
            padding: 5px 10px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .aksi a:hover {
            background-color: #555;
        }

        .aksi a:last-child {
            margin-right: 0;
        }

        /* Style untuk modal konfirmasi penghapusan data */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            width: 300px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .modal-content p {
            margin: 0;
            margin-bottom: 10px;
        }

        .modal-content button {
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }

        .modal-content button:hover {
            background-color: #555;
        }

        .logout-btn {
        background-color: #333;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 5px 10px;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
    }

.logout-btn:hover {
    background-color: #555;
}


    </style>
</head>
<body>
    
    
    <h1>Daftar Mahasiswa</h1>


    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>

    <form action="" method="post">

        <input type="text" name="keyword" size="30px" autofocus placeholder="Masukkan keyword pencarian.." autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">cari</button>
    </form>
    <br>
    <div id="container">
        <table border="1" cellpadding="10" cellspacing="0" >
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
            <?php foreach($mahasiswa as $row) :  ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?php echo $row["id"]; ?>">ubah</a> |
                    <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick ="return confirm('anda yakin akan mengapus data ini?');">hapus</a>
                </td>
                <td><img src="img/<?php echo $row["Gambar"]; ?>" width="50"></td>
                <td><?php echo $row["Nim"]; ?></td>
                <td><?php echo $row["Nama"]; ?></td>
                <td><?php echo $row["Email"]; ?></td>
                <td><?php echo $row["Jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php  endforeach;  ?>
        </table>
        </div>
        
        <a href="logout.php " class="logout-btn">Logout</a>
        <script src="js/script.js"></script>
</body>
</html>