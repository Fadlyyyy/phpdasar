<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lupa Password</title>
  <style>
    body {
      font-family: sans-serif;
      background-color: #F2F2F2;
    }

    .container {
      max-width: 500px;
      margin: 0 auto;
      padding: 40px;
      background-color: #FFF;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }

    input[type="email"] {
      display: block;
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 5px;
      border: none;
      background-color: #F2F2F2;
      box-shadow: inset 0px 0px 5px rgba(0,0,0,0.2);
    }

    button[type="submit"] {
      display: block;
      margin: 0 auto;
      padding: 10px 20px;
      background-color: #0095FF;
      border: none;
      border-radius: 5px;
      color: #FFF;
      font-size: 16px;
      cursor: pointer;
      box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
    }

    button[type="submit"]:hover {
      background-color: #0077FF;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Lupa Password</h1>
    <form action="#" method="post">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" required>
      <button type="submit">Kirim</button>
    </form>
  </div>
</body>
</html>
