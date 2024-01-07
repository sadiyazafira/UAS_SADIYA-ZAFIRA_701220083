<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modul 2 - Latihan 2a</title>
</head>
<body>
	<table border="1" cellpadding="3" cellspacing="0">
		<tr>
			<th>Kolom 1</th>
			<th>Kolom 2</th>
			<th>Kolom 3</th>
			<th>Kolom 4</th>
			<th>Kolom 5</th>
		</tr>

		<?php 

$rows = 15;
$colom = 5;



for ($i = 1; $i <= $rows; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $colom; $j++) {
        echo "<td>Baris $i Kolom $j</td>";
    }
    echo "</tr>";
}


?>


	

	 </table>

</body>
</html>