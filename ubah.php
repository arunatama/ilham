<?php
session_start();
if (!isset($_SESSION["login"]) ) {
    header("Location: login.php" );
    exit;
}
require 'functions.php';

// ambil data dari url
$id = $_GET["id"];
// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


// apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
if ( ubah ($_POST) > 0) {
    echo "
    <script>
        alert('data berhasil diubah');
        document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('data gagal diubah');
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
    <link rel="stylesheet" href="ubah.css">
    <title>Ubah data mahasiswa</title>
</head>
<body>
    
<h1>Ubah data anggota</h1>

<img src="img/img1.png" id="iconn" alt="User Icon" />
<img src="img/img2.png" id="iconn2" alt="User Icon" />

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $mhs["id"];?>">
        <input type="hidden" name="gambarLama" value="<?php echo $mhs["gambar"];?>">
        <ul>
            <li>
                <label for="nrp">Bidang : </label>
                <input type="text" name="nrp" id="nrp" required value="<?php echo $mhs["nrp"]?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?php echo $mhs["nama"]?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required value="<?php echo $mhs["email"]?>">
            </li>
            <li>
                <label for="jurusan">Jabatan : </label>
                <input type="text" name="jurusan" id="jurusan" required value="<?php echo $mhs["jurusan"]?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <br>
                <img src="img/<?php echo $mhs['gambar'];?>" width="40" alt="">
                <br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>


    </form>


</body>
</html>