<?php 

$db = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}





function tambah($data) {
    global $db;


     $nama = htmlspecialchars($data["Nama"]);
     $nim = htmlspecialchars($data["Nim"]);
     $email = htmlspecialchars($data["Email"]);
     $jurusan = htmlspecialchars($data["Jurusan"]);
     $gambar = htmlspecialchars($data["Gambar"]);

      //query insert data
    $query = "INSERT INTO mahasiswa
    VALUES
    ('', '$nama','$nim','$email','$jurusan', '$gambar')
    ";
    mysqli_query($db, "$query");



    return mysqli_affected_rows($db);


   
    }
    function hapus($id) {
        global $db;
        mysqli_query($db, "DELETE FROM mahasiswa WHERE id = $id");
        return mysqli_affected_rows($db);
}
    

function ubah($data) {
        global $db;

        $id = $data["id"];
        $nama = htmlspecialchars($data["Nama"]);
        $nim = htmlspecialchars($data["Nim"]);
        $email = htmlspecialchars($data["Email"]);
        $jurusan = htmlspecialchars($data["Jurusan"]);
        $gambar = htmlspecialchars($data["Gambar"]);
   
         //query insert data
       $query = "UPDATE mahasiswa SET 
                    Nim = '$nim',
                    Nama = '$nama',
                    Email = '$email',
                    Jurusan = '$jurusan',
                    Gambar = '$gambar'
                WHERE id = $id;
                    ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

    }

?>