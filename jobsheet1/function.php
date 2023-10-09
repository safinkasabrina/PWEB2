<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <?php
    //statis
    function persegi_panjang($p, $l){
        return $p*$l;
    }
    echo "Luas persegi panjang: " . persegi_panjang(5, 2) . " ";
    
    //dinamis
    function luas_persegi_panjang($p, $l) {
        $luas = $p * $l;
        return $luas;
    }
    
    $p = 5;
    $l = 8;
    
    $luasPersegiPanjang = luas_persegi_panjang($p, $l);
    
    echo "</br></br>Luas persegi panjang dengan panjang $p dan lebar $l adalah: $luasPersegiPanjang </br>";
    
    //statis
    function lingkaran($r){
        return 3.14*$r*$r;
    }
    echo "</br>Luas lingkaran: ". lingkaran(7) . " </br></br>";
    ?>

    <!-- //dinamis -->
    Masukkan Panjang = <input type="text" name="" id="">
    <?php
    echo "Luas lingkaran: " . lingkaran(6) . " ";
    ?>
</body>
</html>