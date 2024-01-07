<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "kursu");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}
 

function tambah($data) {
	global $conn;

	$nama = ($data["nama"]);
	$programkursus = ($data["programkursus"]);
	$harikursus = ($data["harikursus"]);
	$waktukursus = ($data["waktukursus"]);
	$pengajar = ($data["pengajar"]);
	

	$query = "INSERT INTO kelas
				VALUES
			  ('', '$nama', '$programkursus', '$harikursus', '$waktukursus', '$pengajar')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}



function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM kelas WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function ubah($data) {
	global $conn;

	$id = $data["id"];
	$nama = ($data["nama"]);
	$programkursus = ($data["programkursus"]);
	$harikursus = ($data["harikursus"]);
	$waktukursus = ($data["waktukursus"]);
	$pengajar = ($data["pengajar"]);
	

	$query = "UPDATE kelas SET
				nama = '$nama',
				programkursus = '$programkursus',
				harikursus = '$harikursus',
				waktukursus = '$waktukursus',
				pengajar = '$pengajar'
			  WHERE id = $id
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}


function cari($keyword) {
	$query = "SELECT * FROM kelas
				WHERE
			  programkursus LIKE '%$keyword%' OR
			  nama LIKE '%$keyword%' OR
			  harikursus LIKE '%$keyword%' OR
			  pengajar LIKE '%$keyword%'
			";
	return query($query);
}


?>
