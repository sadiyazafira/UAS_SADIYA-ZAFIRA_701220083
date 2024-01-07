<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
  
  // cek apakah data berhasil di tambahkan atau tidak
  if( tambah($_POST) > 0 ) {
    echo "
      <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'halaman_siswa.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php';
      </script>
    ";
  }


}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Tambah Data Siswa</title>
</head>
<style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }

      body {
        background-color: mistyrose;

      }  
      
      h1 {
        text-transform: uppercase;
        color: black;
        font-family: serif;
      }
    button {
          background-color: firebrick;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input,select,textarea {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: black;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: rosybrown;
    }
</style>
<body>
  <center><h1>Tambah Data Siswa</h1></center>

  <form action="" method="post" enctype="multipart/form-data">
    <section class="base">
      <div>
        <label for="nama">Nama  </label>
        <input type="text" name="nama" id="nama">
      </div>
      <div>
      <label for="tanggallahir">Tanggal Lahir</label>
          <input type="date" id="tanggallahir" name="tanggallahir" required="" />
      </div>
      <div>
        <label for="jeniskelamin">Jenis Kelamin</label>
        <select id="jeniskelamin" name="jeniskelamin" required="" />
          <option value="pria">pria</option>
          <option value="wanita">wanita</option>
        </select>
      </div>
      <div>
      <label for="alamat">Alamat</label>
        <textarea id="alamat" name="alamat" rows="4" required></textarea>
      </div>
       <div>
        <label for="nohp">No hp </label>
        <input type="text" name="nohp" id="nohp">
      </div>
      <div>
        <label for="namaorangtua">Nama Orang Tua  </label>
        <input type="text" name="namaorangtua" id="namaorangtua">
      </div>
      <div>
        <label for="asalsekolah">Asal Sekolah </label>
        <input type="text" name="asalsekolah" id="asalsekolah">
      </div>
      <div>
        <label for="programkursus">Program Kursus </label>
        <select id="programkursus" name="programkursus" required="" />
          <option value="bahasainggris">Bahasa Inggris</option>
          <option value="matematika">Matematika</option>
          <option value="komputer">Komputer</option>
          <option value="calistung">Calistung</option>
        </select>
      </div>
      <div>
        <label for="gambar">Gambar </label>
        <input type="file" name="gambar" id="gambar">
      </div>
      <div>
        <button type="submit" name="submit">Tambah Data!</button>
      </div>

  </form>
</body>
</html>
