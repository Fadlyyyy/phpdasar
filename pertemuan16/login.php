<?php

session_start();
if(isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}


require 'functions.php';


if( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

   $result = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");


    // cek username
    if( mysqli_num_rows($result) === 1 ) {
        
        // cek password
        $row = mysqli_fetch_assoc($result);
       if(password_verify($password, $row["password"])) {

            // set sessionnya
            $_SESSION["login"] = true;

            header("Location: index.php");
            exit;
       }
    } 

    $error = true;


}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        
        .container {
            margin: 50px auto;
            max-width: 400px;
            padding: 30px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        
        h1 {
            margin-top: 0;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            text-align: left;
        }
        
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        
        button[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        
        button[type="submit"]:hover {
            background-color: #3e8e41;
        }
        
        .form-footer {
            margin-top: 20px;
            font-size: 14px;
        }
        
        .form-footer a {
            color: #4CAF50;
            text-decoration: none;
        }
        
        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Halaman Login</h1>

                        <?php if( isset($error)) :  ?>
                            <p style="color: red; font-style: italic;">Username / Password yang anda masukkan salah!</p>
                        <?php endif; ?>
        <form action="" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <button type="submit" name="login">Login</button>
            <div class="form-footer">
                <a href="lupa_password.php">Lupa Password?</a>
                <span>Belum punya akun? <a href="registrasi.php">Daftar</a></span>
            </div>
        </form>
    </div>
</body>
</html>