<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perusahaan Teknologi</title>
</head>
<body>
<?php
// Mengubah array yang ada menjadi array multidimensi
$PerusahaanTeknologi = array(
    array(
        "ID" => 1,
        "Nama Perusahaan" => "Apple Inc",
        "Asal Negara" => "Amerika Serikat",
        "Didirikan" => "1 April 1976",
        "Gambar" => "apple.jpeg",
    ),
    array(
       "ID" => 2,
        "Nama Perusahaan" => "Alphabet Inc",
        "Asal Negara" => "Amerika Serikat",
        "Didirikan" => "2 Oktiber 2015",
        "Gambar" => "alphabet.jpeg",
    ),
    array(
       "ID" => 3,
        "Nama Perusahaan" => "Microsoft",
        "Asal Negara" => "Amerika Serikat",
        "Didirikan" => "4 April 1975",
        "Gambar" => "microsoft.jpeg",
    ),
    array(
        "ID" => 4,
        "Nama Perusahaan" => "Samsung Group",
        "Asal Negara" => "Korea Selatan",
        "Didirikan" => "1 Maret 1938",
        "Gambar" => "samsung.jpeg",
    ),
    array(
        "ID" => 5,
        "Nama Perusahaan" => "Tencent Holdings Ltd.",
        "Asal Negara" => "China",
        "Didirikan" => "11 November 1998",
        "Gambar" => "tencent.jpeg",
    ),
    array(
       "ID" => 6,
        "Nama Perusahaan" => "Meta Platform",
        "Asal Negara" => "Amerika Serikat",
        "Didirikan" => "4 Januari 2004",
        "Gambar" => "meta.jpeg",
    ),
    array(
        "ID" => 8,
        "Nama Perusahaan" => "Tokopedia",
        "Asal Negara" => "Indonesia",
        "Didirikan" => "6 Februari 2009",
        "Gambar" => "tokopedia.jpeg",
    ),
     array(
        "ID" => 9,
        "Nama Perusahaan" => "Cisco System Inc",
        "Asal Negara" => "Amerika Serikat",
        "Didirikan" => "10 Desember 1984",
        "Gambar" => "cisco.jpeg",
    ),
      array(
        "ID" => 10,
        "Nama Perusahaan" => "International Business Machines Corpration",
        "Asal Negara" => "Amerika Serikat",
        "Didirikan" => "16 Juni 1911",
        "Gambar" => "IBM.jpeg",
    ),

);

// membuat tabel
?>

<h1 style="text-align: center;">Perusahaan Teknologi</h1>
<table border="1" cellpadding="3" cellspacing="0" style=" margin: 0 auto;">
    <tr>
        <th>ID</th>
        <th>Nama Perusahaan</th>
        <th>Asal Negara</th>
        <th>Didirikan</th>
        <th>Gambar</th>
    </tr>

    <?php 
    foreach ($PerusahaanTeknologi as $kantor) {
        echo "<tr>";
        echo "<td>".$kantor["ID"]."</td>";
        echo "<td>".$kantor["Nama Perusahaan"] . "</td>";
        echo "<td>".$kantor["Asal Negara"] . "</td>";
        echo "<td>".$kantor["Didirikan"] . "</td>";
        echo "<td><img src=img/" . $kantor["Gambar"].">"; 
        echo "</tr>";
    };
    
    ?>
</table>
</body>
</html>