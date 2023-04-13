<!-- metode request POST -->
<!-- 
    
metode request POST ini berbeda dengan GET, jika GET datanya dikirim lewat URL
jika post datanya dikirim melalui FORM.
harus mempunyai form dulu jika ingin menggunakan request method post ini
walaupun jika menggunakan form juga kita bisa menggunakan GET
jika form bisa keduanya, bisa get bisa post.
jika url hanya bisa menggunakan GET..

kelebihan menggunaka post adalah ketika kita mengirimkan data ke sebuah tempat, datanya tidak akan terlihat, tidak ada di urlnya
hal itu sangat penting, ketika nanti akan membuat login.
jika membuat login jangan pernah menggunakan GET karena jika menggunakan get nantinya passwordnya akan kelihatan di bagian urlnya dan orang lain bisa lihat, dan hal itu sangat berbahaya.




-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    
    <?php if(isset($_POST["submit"])) : ?>
        <h1>Halo,Selamat Datang <?php echo $_POST["nama"]; ?></h1>
    <?php endif; ?>


    <form action="" method="post">
        Masukkan Nama : 
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>



</body>
</html>