<?php
session_start();
if (!isset($_SESSION["login"]) ) {
    header("Location: login.php" );
    exit;
}

require 'functions.php';


// apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
if ( tambah ($_POST) > 0) {
    echo "
    <script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('data gagal ditambahkan');
        document.location.href = 'index.php';
    </script>
    ";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tambah.css">
    <title>Tamambah data mahasuswa</title>
</head>
<body>
    
<h1>Tambah data anggota</h1>

<img src="img/img1.png" id="iconn" alt="User Icon" />
<img src="img/img2.png" id="iconn2" alt="User Icon" />

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nrp">Bidang </label>
                <input type="text" name="nrp" id="nrp" required>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">Jabatan : </label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button class="submitt" type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>


    </form>


</body>
</html>