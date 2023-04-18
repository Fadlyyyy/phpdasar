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

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO mahasiswa (Nama, Nim, Email, Jurusan, Gambar)
              VALUES ('$nama','$nim','$email','$jurusan', '$gambar')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function upload() {
    $namaFile = $_FILES['Gambar']['name'];
    $ukuranFile = $_FILES['Gambar']['size'];
    $error = $_FILES['Gambar']['error'];
    $tmpName = $_FILES['Gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
                alert('Pilih gambar terlebih dahulu!');
            </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('Yang Anda upload bukan gambar!');
            </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
                alert('Ukuran gambar terlalu besar!');
            </script>";
        return false;
    }

    // generate nama gambar baru
    $namaFileBaru = uniqid();       //akan membangkitkan angka random baru string saja belum ada ekstensi filenya..
    $namaFileBaru .= '.';
    $namaFileBaru  .= $ekstensiGambar;


    // lolos pengecekan, gambar siap diupload
    move_uploaded_file($tmpName, 'img/'.$namaFileBaru);
    return $namaFileBaru;
}

function hapus($id) {
    global $db;
    mysqli_query($db, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($db);
}

function ubah($data){
    global $db;

    $id = $data["id"];
    $nama = htmlspecialchars($data["Nama"]);
    $nim = htmlspecialchars($data["Nim"]);
    $email = htmlspecialchars($data["Email"]);
    $jurusan = htmlspecialchars($data["Jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user memilih gambar baru atau tidak
    if ($_FILES['Gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
        if (!$gambar) {
            return false;
        }
    }

    $query = "UPDATE mahasiswa SET
                Nama = '$nama',
                Nim = '$nim',
                Email = '$email',
                Jurusan = '$jurusan',
                Gambar = '$gambar'
            WHERE id = $id
            ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}



    function cari($keyword) {
        $query = "
        SELECT * FROM mahasiswa
                    WHERE
                nama LIKE '%$keyword%' OR
                nim LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%' 
        ";

        return query($query);
    }

?>