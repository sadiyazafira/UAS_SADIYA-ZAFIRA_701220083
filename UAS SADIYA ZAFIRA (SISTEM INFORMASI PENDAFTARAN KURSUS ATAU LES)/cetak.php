<?php 
session_start();
 
// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
    header("location:index.php?pesan=gagal");
}

require 'functions.php';
$siswa = query("SELECT * FROM siswa");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $siswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Siswa</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <!-- Tambahkan link FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<h1>Data Siswa</h1>
<center>
    <br>
    <table border="1" cellpadding="10" width="100%">
        <tr>
            <th>No.</th>
            <th>Nama Lengkap</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No. Telpon</th>
            <th>Nama Orang Tua</th>
            <th>Asal Sekolah</th>
            <th>Program Kursus</th>
            <th>Gambar</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach( $siswa as $row ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["tanggallahir"]; ?></td>
            <td><?= $row["jeniskelamin"]; ?></td>
            <td><?= $row["alamat"]; ?></td>
            <td><?= $row["nohp"]; ?></td>
            <td><?= $row["namaortu"]; ?></td>
            <td><?= $row["asalsekolah"]; ?></td>
            <td><?= $row["programkursus"]; ?></td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</center>
<script>
    window.print();
</script>
</body>
</html>
