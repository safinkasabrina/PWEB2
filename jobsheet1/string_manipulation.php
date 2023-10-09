<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>
<body>
    <?php
    $x = "Selamat belajar PHP!";
    echo "$x </br>";
    //untuk membuat huruf kapital menggunakan strtoupper()
    echo strtoupper("$x </br>");
    //untuk membuat huruf kecil semua menggunakan strtolower()
    echo strtolower("$x </br>");
    //untuk memotong string menggunakan substr()
    echo substr($x,0,7);
    ?>
</body>
</html>