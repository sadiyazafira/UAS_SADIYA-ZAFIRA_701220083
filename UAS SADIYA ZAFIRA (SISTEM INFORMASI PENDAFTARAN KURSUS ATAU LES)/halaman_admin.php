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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KURSUS SADIYA</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="styles.css">
</head>
<style type="text/css">
  /* Add your custom styles here */
body {
  padding-top: 20px; /* Adjust based on the height of your navbar */
  background-color: mistyrose;
}

/* Style the footer */
footer {
  background-color: indianred;
  padding: 10px;
  text-align: center;
  color: white;
  
}
th {
        background-color: mistyrose;
        color: black;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
}

</style>
<body>
  <!-- Navbar -->
 <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: indianred;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: lightcoral  ;
  color: black;
}

.topnav a.active {
  background-color: lightcoral;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
   <a class="nav-link" href="halaman_admin.php">Beranda</a>
  <a class="navbar-brand" href="logout.php">Logout</a>
  <a class="nav-link" href="kelas2.php">Kelas</a>
 
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>

  <!-- Content -->
  <div class="container mt-4">
<center>
  <h1>Data Siswa</h1>
  <!-- Tambahkan ikon tambah -->
  <br>
    <a href="tambah.php" class="btn btn-success"><i class="fas fa-plus-square"></i> Tambah data siswa</a>
    <br><br>
    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian.." autocomplete="off">
        <button type="submit" name="cari" class="btn btn-primary"><i class="fas fa-search"></i> Cari!</button> 
    </form>
    <br/>
    <table class="table table-bordered table-hover">
        <thead class="thead-light">
            <tr>
                <th>No.</th>
                <th width="95px">Aksi</th>
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
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach( $siswa as $row ) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <!-- Tambahkan tombol Bootstrap untuk Ubah dan Hapus -->
                    <a href="ubah.php?id=<?= $row["id"]; ?>" class="btn btn-warning"><i class="fas fa-edit"></i> Ubah</a>
                    <p></p>
                    <a href="hapus.php?id=<?= $row["id"]; ?>" class="btn btn-danger" onclick="return confirm('Yakin hapus data?');"><i class="fas fa-trash-alt"></i> Hapus</a>
                </td>
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
        </tbody>
    </table>
    <p><a href="cetak.php" target="_blank" class="btn btn-primary">CETAK</a>
      <a href="unduh.php" class="btn btn-primary">UNDUH</a></p>

  </div>
      </br>
  <br/>
</br>


  <!-- Footer -->
 <footer class="text-white text-center py-3">
  <p>Sadiya Zafira 2024</p>
</footer>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
