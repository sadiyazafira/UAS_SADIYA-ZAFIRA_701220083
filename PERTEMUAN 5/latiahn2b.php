<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 - Latihan 2b</title>
    <style>
        .kotak {
            width: 40px;
            height: 40px;
            display: inline-block;
            margin-top: 6px;
            margin-left: 5px;
            text-align: center;
            line-height: 40px;
            border: 2px solid black;
        }
        .clear {
            clear: both;
        }

    </style>
</head>
<body>
    <?php

    $baris = 5;

    for ($i = 1; $i <= $baris; $i++) {
        $class = ($i % 2 == 0 ? 'genap' : 'ganjil');
        for ($j = 1; $j <= $i; $j++) {
            echo '<div class="kotak ' . $class . '">' . $j . '</div>';
        }
        echo '<div class="clear"></div>';
    }

    ?>
</body>
</html>