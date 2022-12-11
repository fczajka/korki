<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="liczba"><br>
        <input type="submit" name="s" value="Oblicz silnię!!!">
    </form>

    <?php
    function silniai($n){
        $silnia=1;
        for($i=2;$i<=$n;$i++){
            $silnia*=$i;
        }
        return $silnia;
    }
    function silniar($n){
        if($n==1) return 1;
        else return silniar($n-1)*$n;
    }
    if(isset($_POST['s'])){
        echo"<h2>Wersja iteracyjna</h2>";
        echo silniai($_POST['liczba']);
        echo"<h2>Wersja rekurencyjna</h2>";
        echo silniar($_POST['liczba']);
    }
    
    ?>
</body>
</html>