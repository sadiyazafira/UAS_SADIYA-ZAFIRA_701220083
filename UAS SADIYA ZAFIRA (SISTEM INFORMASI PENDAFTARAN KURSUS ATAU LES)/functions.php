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
    $tanggallahir = ($data["tanggallahir"]);
    $jeniskelamin = ($data["jeniskelamin"]);
    $alamat = ($data["alamat"]);
    $nohp = ($data["nohp"]);
    $namaortu = ($data["namaortu"]);
    $asalsekolah = ($data["asalsekolah"]);
    $programkursus = ($data["programkursus"]);

    // upload gambar
    $gambar = upload();
    if( !$gambar ) {
        return false;
    }

    $query = "INSERT INTO siswa
                VALUES
              ('', '$nama', '$tanggallahir', '$jeniskelamin', '$alamat', '$nohp', '$namaortu', '$asalsekolah', '$programkursus', '$gambar')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function upload() {

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if( $error === 4 ) {
        echo "<script>
                alert('pilih gambar terlebih dahulu!');
              </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
                alert('yang anda upload bukan gambar!');
              </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if( $ukuranFile > 1000000 ) {
        echo "<script>
                alert('ukuran gambar terlalu besar!');
              </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}




function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}


function ubah($data) {
    global $conn;

    $id = $data["id"];
    $nama = ($data["nama"]);
    $tanggallahir = ($data["tanggallahir"]);
    $jeniskelamin = ($data["jeniskelamin"]);
    $alamat = ($data["alamat"]);
    $nohp = ($data["nohp"]);
    $namaortu = ($data["namaortu"]);
    $asalsekolah = ($data["asalsekolah"]);
    $programkursus = ($data["programkursus"]);
    
    // cek apakah input "gambarLama" ada
    $gambarLama = isset($data["gambarLama"]) ? $data["gambarLama"] : '';
    
    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }
    

    $query = "UPDATE siswa SET
                nama = '$nama',
                tanggallahir = '$tanggallahir',
                jeniskelamin = '$jeniskelamin',
                alamat = '$alamat',
                nohp = '$nohp',
                namaortu = '$namaortu',
                asalsekolah = '$asalsekolah',
                programkursus = '$programkursus',
                gambar = '$gambar'
              WHERE id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn); 
}

function cari($keyword) {
    $query = "SELECT * FROM siswa
                WHERE
              nama LIKE '%$keyword%' OR
              programkursus LIKE '%$keyword%' OR
              alamat LIKE '%$keyword%' OR
              nohp LIKE '%$keyword%'
            ";
    return query($query);
}


?>
