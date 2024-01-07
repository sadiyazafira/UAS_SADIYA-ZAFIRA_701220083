<?php 
session_start();
 
// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
    header("location:index.php?pesan=gagal");
}

require 'functions2.php';
$kelas = query("SELECT * FROM kelas");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $kelas = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Kelas</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <!-- Tambahkan link FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<h1>Daftar Kelas</h1>
<center>
    <br>
    <table border="1" cellpadding="10" width="100%">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Program Kursus</th>
            <th>Hari Kursus</th>
            <th>Waktu Kursus</th>
            <th>Pengajar</th> 
        </tr>
        <?php $i = 1; ?>
        <?php foreach( $kelas as $row ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['programkursus']; ?></td>
            <td><?php echo $row['harikursus']; ?></td>
            <td><?php echo $row['waktukursus']; ?></td>
            <td><?php echo $row['pengajar']; ?></td>
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
