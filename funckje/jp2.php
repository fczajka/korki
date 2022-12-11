<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        Podaj liczbe:
        <input type="number" name="liczba">

        <input type="submit" name="guzik">
        <br>

        Podaj poczatek zakresu:
        <input type="number" name="begin"><br>
        Podaj koniec zakresu:
        <input type="number" name="end"><br>
        <input type="submit" name="guzik2"><br>
    </form>
    
    <?php
    if(isset($_POST["guzik"]))
    {
        for($xd = 1; $xd <= $_POST['liczba']; $xd++)
        {
            echo "<img src='jp2.jpg' width='1%'>";
            if($xd%3==0)
            {
                echo "<br>";
            }
        }
    }
    
    if(isset($_POST["guzik2"]))
    {
        $pocz = $_POST['begin'];
        $koniec = $_POST['end'];
        echo '<h1>ROzsnoce</h1>';
        for($x = $pocz;$x <=$koniec; $x++)
        {
            echo "$x ";
        }
        echo '<h1>malejace</h1>';
        echo '<br>';
        for($y = $koniec;$y >=$pocz; $y--)
        {
            echo "$y ";
        }
    }
    ?>
</body>
</html>