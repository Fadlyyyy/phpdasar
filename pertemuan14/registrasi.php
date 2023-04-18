<?php
require 'functions.php';

if( isset($_POST["register"])) {
    if( registrasi($_POST) > 0 ) {
        echo "<script>
        alert('user baru berhasil ditambahkan!');
        </script>";
    } else {
        echo mysqli_error($db);
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #F8F8F8;
        }
        
        h1 {
            text-align: center;
            margin-top: 50px;
        }
        
        form {
            width: 500px;
            margin: 0 auto;
            background-color: #FFFFFF;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0,0,0,.2);
        }
        
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        
        li {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            box-shadow: 0 0 3px rgba(0,0,0,.1);
            font-size: 16px;
        }
        
        button[type="submit"] {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 12px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color .3s;
        }
        
        button[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <h1>Halaman Registrasi</h1>
    
    <form action="" method="post"> 
        <ul>
            <li>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="password2">Konfirmasi Password:</label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <button type="submit" name="register">Register</button>
            </li> 
        </ul>
    </form>
</body>
</html>
