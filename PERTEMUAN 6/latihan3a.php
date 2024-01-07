<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latiahan 3a</title>
	<style>
        .ganti-style {
            font-size: 28px;
            font-family: sans-serif;
            color: #1A0547;
            font-style: italic;
            font-weight: bolder;
        }
	</style>
</head>
<body>
	<?php

function tukar_style($tulisan, $kelas) {
    return "<span class='$kelas'>$tulisan</span>";
}

	$tulisan = "Hello World! Here I Come!";
	$kelas = "ganti-style";

	echo tukar_style($tulisan,$kelas); 

	 ?>

</body>
</html>