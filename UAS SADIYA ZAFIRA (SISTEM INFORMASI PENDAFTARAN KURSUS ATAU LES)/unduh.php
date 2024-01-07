<?php
include('koneksi.php'); // Hubungkan ke database jika diperlukan

// Set header untuk memberitahu browser bahwa ini adalah file CSV yang akan diunduh
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="daftar_siswa.csv"');

// Buka output file untuk menulis data CSV
$output = fopen('php://output', 'w');

// Header CSV (nama kolom)
fputcsv($output, array('No', 'Nama', 'Tanggal Lahir', 'Jenis Kelamin', 'Alamat', 'No Telpon', 'Nama Orang Tua', 'Asal Sekolah', 'Program Khusus', 'Gambar'));

// Ambil data siswa dari database
$data = mysqli_query($koneksi, "SELECT * FROM siswa");

// Tulis data siswa ke dalam file CSV
$no = 1;
while ($d = mysqli_fetch_array($data)) {
    fputcsv($output, array(
        $no++,
        $d['nama'],
        $d['tanggallahir'],
        $d['jeniskelamin'],
        $d['alamat'],
        $d['nohp'],
        $d['namaortu'],
        $d['asalsekolah'],
        $d['programkursus'],
        $d['gambar']
    ));
}

// Tutup file CSV
fclose($output);
?>
