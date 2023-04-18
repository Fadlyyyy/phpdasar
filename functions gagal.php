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
     if( !$gambar ) {
        return false;
     }

      //query insert data
    $query = "INSERT INTO mahasiswa
    VALUES
    ('', '$nama','$nim','$email','$jurusan', '$gambar')
    ";
    mysqli_query($db, "$query");
    return mysqli_affected_rows($db);
    }

    function upload() {
        
        $namaFile = $_FILES['Gambar']['Nama'];
        $ukuranFile = $_FILES['Gambar']['size'];
        $error = $_FILES['Gambar']['error'];
        $tmpName = $_FILES['Gambar']['tmp_name'];



        // cek apakah tidak ada gambar yang diupload
        if($error === 4) {
            echo "<script>
            alert('pilih gambar terlebih dahulu!');
            </script>";
            return false;
        }


        // cek apakah yang diupload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) { // fungsi in_array akan menghasilkan nilai true jika ada dan akan menghasilkan false jika tidak ada...
            echo "<script>
            alert('yang anda upload, bukan gambar!');
            </script>";
            return false;
        }


            // cek jika ukurannya terlalu besar
            if($ukuranFile > 1000000) {
                echo "<script>
                alert('ukuran gambar terlalu besar');
                </script>";
                return false;

            }



            // lolos pengecekan, gambar siap diupload
            move_uploaded_file($tmpName, 'img/'. $namaFile);
            return $namaFile;




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