<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$ss = query("SELECT * FROM siswa WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'halaman_admin.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'halaman_admin.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Siswa</title>
</head>
<style type="text/css">
      * {
        font-family: "fnebuchet MS";
      }
      body{
      	background-color: mistyrose;
      }
      h1 {
        text-transform: uppercase;
        font-family: serif;
        color: black;
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
      outline-color: lightgreen;
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
	<center><h1>Ubah Data Siswa</h1></center>

	<form action="" method="post" enctype="multipart/form-data">
		<section class="base">
		<input type="hidden" name="id" value="<?= $ss["id"]; ?>">
		
			<div>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" required value="<?= $ss["nama"]; ?>">
			</div>
			<div>
			<label for="tanggallahir">Tanggal Lahir</label>
   		    <input type="date" id="tanggallahir" name="tanggallahir" value="<?= $ss["tanggallahir"]; ?>">
			</div>
			<div>
				<label for="jeniskelamin">Jenis Kelamin</label>
    		<select id="jeniskelamin" name="jeniskelamin" value="<?= $ss["jeniskelamin"]; ?>">
      		<option value="laki-laki">laki-laki</option>
      		<option value="perempuan">perempuan</option>
    		</select>
			</div>
			<div>
			<label for="alamat">Alamat:</label>
    		<textarea id="alamat" name="alamat" rows="4" value="<?= $ss["alamat"]; ?>"></textarea>
			</div>
			<div>
				<label for="nohp">No hp :</label>
				<input type="text" name="nohp" id="nohp" value="<?= $ss["nohp"]; ?>">
			</div>
			<div>
				<label for="namaortu">Nama Orang Tua : </label>
				<input type="text" name="namaortu" id="namaortu" value="<?= $ss["namaortu"]; ?>">
			</div>
			<div>
				<label for="asalsekolah">Asal Sekolah :</label>
				<input type="text" name="asalsekolah" id="asalsekolah" value="<?= $ss["asalsekolah"]; ?>">
			</div>
			<div>
				<label for="programkhusus">Program Kursus :</label>
				<select id="programkursus" name="programkursus" value="<?= $ss["programkursus"]; ?>">
      <option value="Bahasa Inggris">Bahasa Inggris</option>
      <option value="Matematika">Matematika</option>
      <option value="Komputer">Komputer</option>
      <option value="Calistung">Calistung</option>
    </select>
			</div>
			<div>
				<label for="gambar">Gambar :</label> <br>
				<img src="img/<?= $ss['gambar']; ?>" width="50"> <br>
				<input type="file" name="gambar" id="gambar">
			</div>
			<div>
				<button type="submit" name="submit">Ubah Data!</button>
			</div>

	</form>
</body>
</html>
