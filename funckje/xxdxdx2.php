<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .klaska{
            width: 100px;
            height: 100px;
            float:left;
        }
    </style>
</head>
<body>
    <?php
    function czesc($imie)
    {
        echo "<h1>Czesc $imie</h1>";
    }
    function polekw($a, $b)
    {
        return $a * $b;
    }
    function br($a)
    {
        for( $x = 1; $x <= $a; $x++)
        {
            echo "<br>";
        }
    }
    function fotka($nazwa, $grubosc, $kolor)
    //czerwone
    {
        echo "<img src='$nazwa' style='border:".$grubosc."px solid $kolor' width=400px>";
    }
    function los()
    {
        $r = rand(0,255);
        $g = rand(0,255);
        $b = rand(0, 255);

        return "rgb($r, $g, $b)";
    }
    function divek($n)
    {
        for($x = 1; $x <$n; $x++)
        {
            echo "<div class='klaska' style='background-color:".los().";'></div>";
        }
    }
    //
    
    divek(100);
    ?>
</body>
</html>