<?php

session_start();

if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
    $karyawan = query("SELECT * FROM karyawan");

    // Jika rombol cari dijalankan
    if(isset($_POST["cari"])) {
        $karyawan = cari($_POST["keyword"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

<a href="logout.php">Logout</a>
    
<h1>Daftar Calon Karyawan</h1>

<a href="lowongan.php">Tambah Data karyawan</a>
<br></br>

<form action="" method="post">
    <input type="text" name="keyword" size="40" autofocus="" placeholder="Cari Data karyawan" autocomplete="off" id="keyword">
    <button type="submit" name="cari" id="cari">Cari</button>
</form>

</br>

<div id="container">

    <table border="1" cellpadding="10" cellspacing="1">
        <tr>
            <th>No.</th>
            <th>aksi</th>
            <th>Nik</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Agama</th>
            <th>No Hp</th>
            <th>Pas Photo</th>
            <th>Ktp</th>
            <th>CV</th>
            <th>Ijazah</th>
            <th>Transkrip</th>
            <th>Kartu Keluarga</th>
            <th>SKCK</th>
        </tr>
        
        <?php $i = 1; ?>
        <?php foreach($karyawan as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')">hapus</a>
            </td>
            <td><?= $row["nik"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["tempatlahir"]; ?></td>
            <td><?= $row["tanggallahir"] ?></td>
            <td><?= $row["jeniskelamin"] ?></td>
            <td><?= $row["alamat"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["agama"] ?></td>
            <td><?= $row["nohp"] ?></td>
            <td><?= $row["pasphoto"] ?></td>
            <td><?= $row["ktp"] ?></td>
            <td><?= $row["cv"] ?></td>
            <td><?= $row["ijazah"] ?></td>
            <td><?= $row["transkrip"] ?></td>
            <td><?= $row["kk"] ?></td>
            <td><?= $row["skck"] ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>


    </table>

</div>

<script src="js/script.js"></script>

</body>
</html>