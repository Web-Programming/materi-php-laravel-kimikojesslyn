<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
</head>
<body>
    <h1><?php echo "Welcome to PHP -- Selamat Datang di PHP";?></h1>
    <?php
    echo "<br/>";
    //variable
    $jam = 12;
    if ($jam < 12){
        echo "<h3> Selamat Pagi</h3>";
    } else {
        echo "<h3>Selamat Siang</h3>";
    }

    //variable array
    echo "<br/>";
    $hoby = ['Makan', 'Minum', 'Tidur'];
    var_dump(value: $hoby);
    echo "<br/>";
    if(is_array(value: $hoby)){
        echo "Hobi saya ada ".count(value: $hoby);
    }
    echo "<br/>";
    //Tipe Data null
    $nilaiuts = NULL;
    if (is_null(value: $nilaiuts)){ //$nilaiuts == NULL
        echo "Nilai UTS Belum Keluar";
    }

?>


</body>
</html>