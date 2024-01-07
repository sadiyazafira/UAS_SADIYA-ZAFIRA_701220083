<?php
include('koneksi.php'); // Hubungkan ke database jika diperlukan

// Set header untuk memberitahu browser bahwa ini adalah file CSV yang akan diunduh
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="daftar_kelas.csv"');

// Buka output file untuk menulis data CSV
$output = fopen('php://output', 'w');

// Header CSV (nama kolom)
fputcsv($output, array('No', 'Nama', 'Program Khusus', 'Hari Kursus','Waktu Kursus', 'Pengajar'));

// Ambil data kelas dari database
$data = mysqli_query($koneksi, "SELECT * FROM kelas");

// Tulis data kelas ke dalam file CSV
$no = 1;
while ($d = mysqli_fetch_array($data)) {
    fputcsv($output, array(
        $no++,
        $d['nama'],
        $d['programkursus'],
        $d['harikursus'],
        $d['waktukursus'],
        $d['pengajar']
    ));
}

// Tutup file CSV
fclose($output);
?>
