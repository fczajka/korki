<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="Wszelaki.css">
</head>
<body>
    <div id="nag">
        <h2>Cezary Wszelaki</h2>
    </div>
    <div id="lewy">
        <ul>
            <li> <a href="wlasnosci.php">Własności</a></li>
            <li> <a href="wlasnosci.php">Potegi</a></li>
            <li>Kolorki</li>
        </ul>
    </div>
    <div id="prawy"  href="wlasnosci.php">
    <form action="" method="post">
<input type="number" name="liczba">
<p><input type="submit" name="dziel" value="Dzielniki"></p>
<p><input type="submit" name="silnia" value="Silnia"></p>
<p><input type="submit" name="suma" value="Suma cyfr"></p>
</form>
<?php
if(isset($_POST['dziel'])){
    $liczba=$_POST['liczba'];
    if($liczba=="") echo "<h4>Nic nie podano</h4>";
    else if($liczba<0) echo "<h4>Musi być dodatnia</h4>";
    else{
    echo "<h4>Dzielniki liczby:</h4>";
    for($i=1;$i<=$liczba;$i++){
        if($liczba%$i==0) echo "$i ";
    }
    }
}


if(isset($_POST['silnia'])){
    $test1=$_POST['liczba'];
    if($test1=="") echo "<h4>Nic nie podano</h4>";
    else if($test1<0) echo "<h4>Musi być dodatnia</h4>";
    else{
    function silnia($n){
        $silnia=1;
        for($i=2;$i<=$n;$i++){
            $silnia*=$i;
        }
        return $silnia;
    }
    $dd=$_POST['liczba'];
           echo "<h4>Silnia wynosi: ".$dd."!=".silnia($_POST['liczba'])."</h4>";
}
}

if(isset($_POST['suma'])){
    $test2=$_POST['liczba'];
    if($test2=="") echo "<h4>Nic nie podano</h4>";
    else if($test2<0) echo "<h4>Musi być dodatnia</h4>";
    else{
    function suma($sum){
        $suma=0;
        for($i=1;$i<=$sum;$i++){
            $suma+=$i;
        }
        return $suma;
    }
    echo "<h4>Suma cyfr wynosi: ".suma($_POST['liczba'])."</h4>";
}
}
?>

    </div>
    <div id="dolny">
    <?php
    function ramka($grub,$kol,$rama){
        echo "<p style='border:$grub"."px $rama $kol;'>Cezary Wszelaki</p>";
    }
    ramka(3,'red','dashed');
    ?>
    </div>
    <div id="stopka">
    cezarywszelaki@gmail.com
    </div>
    
</body>
</html>
