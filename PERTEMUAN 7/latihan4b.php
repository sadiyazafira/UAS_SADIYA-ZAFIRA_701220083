<?php

$negara_ASEAN = [
		"Indonesia",
		"Singapura",
		"Malaysia",
		"Brunei",
		"Thailand"];


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan 4b</title>
</head>
<body>
<?php
		echo "Daftar Negara ASEAN awal : </br> </br>";

 		foreach ($negara_ASEAN as $nama) {


 			echo "<li>$nama</li>";
 		}

 		echo "</br></br>";

 		echo "Daftar Negara Asean baru : </br> </br>";

		$negara_baru = array_push($negara_ASEAN, "Laos", "Flipina", "Myanmar");

		foreach($negara_ASEAN as $baru) {

			echo "<li> $baru </li>";
	}


       
?>



</body>
</html>