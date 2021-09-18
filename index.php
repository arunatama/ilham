<?php
session_start();
if (!isset($_SESSION["login"]) ) {
    header("Location: login.php" );
    exit;
}
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexx.css">
    <title>Halaman Admin</title>
</head>

<div>

    <body class="fadeIn first">
    
    <div class="fadeIn first">
        <img src="img/img1.png" id="iconn" alt="User Icon" />
        <img src="img/img2.png" id="iconn2" alt="User Icon" />
    
    </div>
    
    <div class="fadeIn second">
    <h1 class="judul">Daftar Anggota IPM SMAMITA</h1>
    
    <a href="logout.php" class="btn btn-primary logout" type="logout">logout</a>
    
    <a href="tambah.php" class="tambahd">Tambah anggota IPM</a>
    <br><br>
    </div>
    
    <div class="fadeIn third">
    <form action="" method="post">
    
        <input class="pencarian" type="text" name="keyword" size="40" autofocus placeholder="masukkan kata pencarian..." autocomplete="off">
        <button type="submit" name="cari">cari</button>
    
    </form>
    </div>
    
    <div class="fadeIn fourth">
      
        <table  class="content-table">
            <thead>

                <tr class="judul_tabel_atas" >
                    <th>No.</th>
                    <th>Aksi</th>
                    <th>Gambar</th>
                    <th>Bidang</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jabatan</th>
                </tr>
            </thead>
        <?php $i = 1;?>
        <?php foreach($mahasiswa as $row):?>
            <tbody>

                <tr class="active-row">
                    <td class="isi_tabel"><?php echo $i;?></td>
                    <td>
                        <a class="ubah" href="ubah.php?id=<?php echo $row["id"];?>">ubah</a>|
                        <a class="ubah" href="hapus.php?id=<?php echo $row["id"];?>" onclick="return confirm('apakah kamu yakin?')";>hapus</a>
                    </td>
                    <td><img src="img/<?php echo $row["gambar"];?>" width="50" alt=""></td>
                    <td class="isi_tabel"><?php echo $row["nrp"];?></td>
                    <td class="isi_tabel"><?php echo $row["nama"];?></td>
                    <td class="isi_tabel"><?php echo $row["email"];?></td>
                    <td class="isi_tabel"><?php echo $row["jurusan"];?></td>
        
        
                </tr>
            </tbody>
            <?php $i++;?>
            <?php endforeach;?>
        </table>
    </div>
</div>




</body>
</html>