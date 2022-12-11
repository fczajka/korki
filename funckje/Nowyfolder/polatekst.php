<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: chocolate;
        color: white;
    }
    input[type=number] {
        width: 100%;
        background-color: black;
        color:white;
        box-sizing: border-box;
        border-radius:20px;
        border: 2px solid red;
    }
    #xd{
        border: 2px dotted blue;
        display:inline;
    }
    #lol{
        border: 2px dotted blue;
    }
    #lol:hover{
        border: 5px ridge red;
    }
</style>
<body>
    <form method="post" action="">
        Podaj ilość ocen<input type="number" name="ile"><br>

        <input type="submit" name="guzik">
    </form>
    <?php
        $suma = 0;
        $min = 9;
        $max= 0;
        if(isset($_POST['guzik']))
        {
            $n = $_POST['ile'];
            
            echo $n;
            
            for($x = 1; $x <= $n; $x++)
            {
                
                $los = rand(1, 6);
                $suma += $los;
                echo "Liczba $x <input type='number' value=$los><br>";
                if($los > $max) $max = $los;
                if($los < $min) $min = $los;
            }
            $srednia = $suma/$n;
            echo "Średnia = ".round(($srednia), 2)." <br>";
            echo "Minimum = $min<br>";
            echo "Maximum = $max<br>";

            if($srednia < 1.8) $zd = 1;
            else if($srednia < 2.6) $zd = 2;
            else if($srednia < 3.6) $zd = 3;
            else if($srednia < 4.5) $zd = 4;
            else if($srednia < 5.5) $zd = 5;
            else $zd = 6;
            echo "<h1 id='xd'>Twoja ocena to $zd</h1><br><br>";
            echo "<img src='zd".$zd.".jpg' height=200px id='lol'> ";
        }
        
    ?>
</body>
</html>