<?php 

require '../functions.php';
$keyword = $_GET["keyword"];

$query = "
SELECT * FROM mahasiswa
            WHERE
        nama LIKE '%$keyword%' OR
        nim LIKE '%$keyword%' OR
        email LIKE '%$keyword%' OR
        jurusan LIKE '%$keyword%' 
";
$mahasiswa = query($query);

?>

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