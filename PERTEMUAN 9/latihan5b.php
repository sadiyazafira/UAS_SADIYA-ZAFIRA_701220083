<?php

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
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Perusahaan Teknologi</title>
 	<style>
 		img{
 			display: block;
 			margin-left: auto;
 			margin-right: auto;
 		}
 		*{
 			margin: 0;
 			padding: 0;
 		}

 		body{
 			background: white;
 			text-align: center;
 		}

 		section{
 			margin: 100px auto;
 		}

 		

 	</style>
 </head>
 <body>
 	<h1>Perusahaan Teknologi</h1>
 	

 <ul>
 	<?php foreach ($PerusahaanTeknologi as $kantor): ?>

    	<br>
 		<section><img src="img/<?= $kantor["Gambar"]; ?>">
 		</section></br>
 		<br>
 		<a href="latihan5c.php?nama=<?= $kantor["Nama Perusahaan"]; ?>&asal negara=<?= $kantor["Asal Negara"]; ?>&didirikan=<?= $kantor["Didirikan"]; ?>&no=<?= $kantor["ID"]; ?>&gambar=<?= $kantor["Gambar"]; ?>"> Detail</br></a>
 		
	
<?php endforeach; ?>


 </ul>

 
 </body>
 </html>