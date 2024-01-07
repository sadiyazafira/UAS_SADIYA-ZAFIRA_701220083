<?php
require 'functions2.php';

// ambil data di URL
$id = $_GET["id"];

// query data kelas berdasarkan id
$kl = query("SELECT * FROM kelas WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'kelas2.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'kelas2.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Kelas</title>
</head>
<style type="text/css">
      * {
        font-family: "Trebuchet MS";
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
      klat: left;
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
	<center><h1>Ubah data kelas</h1></center>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $kl["id"]; ?>">
		<section class="base">
			<div>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" required value="<?= $kl["nama"]; ?>">
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
				<label for="harikursus">Hari Kursus : </label>
    <select id="harikursus" name="harikursus" value="<?= $kl["harikursus"]; ?>">
      <option value="senin dan kamis">senin dan kamis</option>
      <option value="selasa dan jum'at">selasa dan jum'at</option>
      <option value="rabu dan sabtu">rabu dan sabtu</option>
    </select>
			</div>
			<div>
				<label for="waktukursus">Waktu Kursus : </label>
    <select id="waktukursus" name="waktukursus" value="<?= $kl["waktukursus"]; ?>">
      <option value="14.00 - 15.30">14.00 - 15.30</option>
      <option value="16.00 - 17.30">16.00 - 17.30</option>
      <option value="19.00 - 20.30">19.00 - 20.30</option>
    </select>
			</div>
			<div>
				<label for="pengajar">Pengajar :</label>
				<input type="text" name="pengajar" id="pengajar" value="<?= $kl["pengajar"]; ?>">
			</div>
			<div>
				<button type="submit" name="submit">Ubah Data!</button>
			</div>
		</ul>
	</form>
</body>
</html>
