<?php

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])) {
// cek username dan password
if($_POST["username"] == "admin" && $_POST["password"] == "123") {

// jika benar redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
// jika salah, tampilkan pesan kesalahan
        $error = true;

    }

    }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatibles" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>


    <?php if( isset($error)) :  ?>
    <p style="color: red; font-style: italic;">username / password yang anda masukkan salah!</p>
    <?php endif; ?>
<ul>
    <form action="" method="post">
        <li>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username">
        </li>
        <li>
        <label for="password">Password : </label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <button type="submit" name="submit">Login</button>
        </li>
    </form>
</ul>
</body>
</html>

<!-- 
    note :
jika membuat label dan disebelahnya kita membuat text field.
kita sebagai manusia melihat jika ada tampilan username dan text fieldnya.
kita pasti langsung tahu , kita hendak menuliskan apa di kolom text field tersebut..
tapi html tidak mengetahui jikalau username dan text field ada hubungannya..
supaya kita memberi tahu ke html jika kedua hal tersebut ada hubungannya, maka kita harus memberi tahu
harus memberi penghubung dengan cara di label dengan memberi "for"
dan beri "id" pada input..








-->