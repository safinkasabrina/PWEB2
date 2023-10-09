<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
    echo "Perulangan FOR bilangan genap dari 1 hingga 10 </br>";
    for($x=2;$x<=10;$x+=2)
    echo "$x </br>";
    echo "</br>Perulangan WHILE bilangan ganjil dari 1 hingga 10 </br>";
    $y=1;
    while($y<=10){
        echo "$y </br>";
        $y+=2;
    }
    echo "</br>Pengulangan DO WHILE bilangan prima kurang dari 20 </br>";
    function isPrime($number) {
        if ($number <= 1) {
            return false;
        }
        for ($i = 2; $i < $number; $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }
    //fungsi isPrime adalah untuk memeriksa apakah sebuah bilangan adalah bilangan prima
    $number = 2;
    do {
        if (isPrime($number)) {
            echo $number . " </br>";
        }
        $number++;
    } while ($number < 20);
    ?>
</body>
</html>