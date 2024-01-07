<?php 

function pemangkatan($angka,$pangkat)
{
	$a = $angka;
	$b = $pangkat;
	return pow($angka, $pangkat);
}

//pemanggilan fungsi
$hasil = pemangkatan(5, 4);
echo "5pangkat4 = $hasil";
echo "<br/>";



 ?>

