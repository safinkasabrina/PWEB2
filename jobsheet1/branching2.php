<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching2</title>
</head>
<body>
    <form action="post" action="">
        Masukkan nilai x : <input type="number" name="x">
        <input type="submit" name="submit" value="Cek">
    </form>
    
    <?php
    //dinamis
    //'isset()' adalah sebuah fungsi bawaan dalam PHP yang digunakan untuk memeriksa apakah sebuah variabel sudah diatur (ada) atau belum, serta apakah nilainya bukan 'null'.
    if(isset($_POST['submit'])){
        $x = $_POST["x"];

        echo"Nilai x = $x </br></br>=> ";

        if($x > 0){
            echo "$x adalah Bilangan Positif";
        }
        elseif($x < 0){
            echo "$x adalah Bilangan Negatif";
        }
        else{
            echo "$x adalah Bilangan Nol";
        }
    }
    ?>
</body>
</html>