<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Soal 5</title>
</head>
<body>
    <?php
//Soal 5 Perkalian 1 sampai 5
  for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 5; $j++) {
        $hasil = $i * $j;
        echo "<br/>";
        echo "$i x $j = $hasil";
        }
        echo "<br/>";
    }


?>




</body>
</html>