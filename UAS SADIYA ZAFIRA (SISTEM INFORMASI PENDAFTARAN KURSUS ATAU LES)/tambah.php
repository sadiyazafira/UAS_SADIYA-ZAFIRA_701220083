<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'halaman_admin.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'halaman_admin.php';
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
        font-family: "Monospace";
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
	<center><h1>Tambah Data Siswa</h1></center>

	<form action="" method="post" enctype="multipart/form-data">
		<section class="base">
			<div>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" required >
			</div>
			<div>
			<label for="tanggallahir">Tanggal Lahir</label>
   		    <input type="date" id="tanggallahir" name="tanggallahir">
			</div>
			<div>
				<label for="jeniskelamin">Jenis Kelamin</label>
    		<select id="jeniskelamin" name="jeniskelamin">
      		<option value="laki-laki">laki-laki</option>
      		<option value="perempuan">perempuan</option>
    		</select>
			</div>
			<div>
			<label for="alamat">Alamat:</label>
    		<textarea id="alamat" name="alamat" rows="4"></textarea>
			</div>
			<div>
				<label for="nohp">No hp :</label>
				<input type="text" name="nohp" id="nohp">
			</div>
			<div>
				<label for="namaortu">Nama Orang Tua : </label>
				<input type="text" name="namaortu" id="namaortu">
			</div>
			<div>
				<label for="asalsekolah">Asal Sekolah :</label>
				<input type="text" name="asalsekolah" id="asalsekolah">
			</div>
			<div>
				<label for="programkhusus">Program Kursus :</label>
				<select id="programkursus" name="programkursus" value="<?= $kl["programkursus"]; ?>">
      <option value="Bahasa Inggris">Bahasa Inggris</option>
      <option value="Matematika">Matematika</option>
      <option value="Komputer">Komputer</option>
      <option value="Calistung">Calistung</option>
    </select>
			</div>
			<div>
				<label for="gambar">Gambar :</label> <br>
				<img src="img/<?= $sw['gambar']; ?>" width="50"> <br>
				<input type="file" name="gambar" id="gambar">
			</div>
			<div>
				<button type="submit" name="submit">Tambah Data!</button>
			</div>

	</form>




</body>
</html>
