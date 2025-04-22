<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <?php

    //Soal 1 Hitung Umur
    $umur = 2025-2006;
    echo "Umur: $umur";

    echo "<br/>";
    //Soal 2 USD ke IDR
    $usd = 4;
    $idr = $usd * 16800;
    echo "Konversi USD ke IDR = $idr ";

    echo "<br/>";
    //Soal 3 Konversi Celcius ke Farenheit
    $celcius = 37;
    $fahrenheit = ($celcius * 9 / 5 + 32);
    echo "{$celcius}°C adalah {$fahrenheit}°F";

    echo "<br/>";
    //Soal 4 Luas Lingkaran
    $pi = 3.14;
    $r = 3;
    $luas = $pi * $r * $r;
    echo "Luas Lingkaran (jika r = 3) adalah  $luas";


?>
</body>
</html>