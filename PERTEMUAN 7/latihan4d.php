<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4d</title>
</head>
<body>
<?php
// Mengubah array yang ada menjadi array multidimensi
$negara = array(
    array(
        "Negara" => "Indonesia",
        "Ibukota" => "D.K.I.Jakarta",
        "Kode Telepon" => "+62",
    ),
   array(
        "Negara" => "Singapura",
        "Ibukota" => "Singapura",
        "Kode Telepon" => "+65",
    ),
   array(
        "Negara" => "Malaysia",
        "Ibukota" => "Kuala Lumpur",
        "Kode Telepon" => "+60",
    ),
   array(
        "Negara" => "Brunei",
        "Ibukota" => "Bandar Seri Begawan",
        "Kode Telepon" => "+673",
    ),
   array(
        "Negara" => "Thailand",
        "Ibukota" => "Bangkok",
        "Kode Telepon" => "+66",
    ),
   array(
        "Negara" => "Laos",
        "Ibukota" => "Vientiane",
        "Kode Telepon" => "+856",
    ),
   array(
        "Negara" => "Flipina",
        "Ibukota" => "Manila",
        "Kode Telepon" => "+63",
    ),
   array(
        "Negara" => "Myanmar",
        "Ibukota" => "Naypyidaw",
        "Kode Telepon" => "+95",
    ),
);

// membuat tabel
?>

<table border="2" cellpadding="3" cellspacing="0" style=" margin: 0 auto;">
    <tr>
        <th>Negara</th>
        <th>Ibukota</th>
        <th>Kode Telepon</th>
    </tr>

    <?php 
    foreach ($negara as $nama) {
        echo "<tr>";
        echo "<td>" . $nama["Negara"] . "</td>";
        echo "<td>" . $nama["Ibukota"] . "</td>";
        echo "<td>" . $nama["Kode Telepon"] . "</td>";
        echo "</tr>";
    };
    
    ?>
</table>
</body>
</html>