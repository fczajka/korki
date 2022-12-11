<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            text-align: center;
            background-color: black;
            color:orange;
            padding-bottom: 20px;
        }
        
        .xd{
            border: 2px solid orange;
        }
        #lol{
            background-color: white;
            color:black;
            font-size: x-large;
            padding-bottom: 0px;
        }
        #d2{
            padding-top:20px;
        }
        
    </style>
</head>
<body>

    <form action="" method="post">
        <div class="xd">
        <h3>Podaj liczbe do zmiany</h3>
        <input type="number" name="liczba" id="lol">   <br>
        </div><br><br>
        <div class="xd" id="d2">
        Wybierz system liczbowy  <br>
        <label>System dwójkowy<input type="radio" name = "wybor" value ="1"></label><br>
        <label>System trójkowy<input type="radio" name = "wybor" value ="2"></label><br>
        <label>System piątkowy<input type="radio" name = "wybor" value ="3"></label><br>
        <label>System ósemkowy<input type="radio" name = "wybor" value ="4"></label><br>
        <label>System dwunastkowy<input type="radio" name = "wybor" value ="5"></label><br>
        <label>System szesnastkowy<input type="radio" name = "wybor" value ="6"></label><br>
        </div><br><br>
        <div class="xd">
        <input type="submit" value="Submit" name="przycisk" id="przyc"/>
        </div>
    
        
    </form>
    <?php
        if(isset($_POST['przycisk']))
        {
            if (isset($_POST['wybor']))
            {
                $licz = $_POST['liczba'];
                if($licz == "")
                {
                    echo "Nie podałeś liczby!!!!!!";
                }
                else {
                    $wybor = $_POST['wybor'];
                    if($wybor==1)
                    {
                        $wynik = decbin($licz);
                    }
                    else if($wybor == 2)
                    {
                        $wynik = base_convert($licz, 10, 3);
                    }
                    else if($wybor == 3)
                    {
                        $wynik = base_convert($licz, 10, 5);
                    }
                    else if($wybor == 4)
                    {
                        $wynik = base_convert($licz, 10, 8);
                    }
                    else if($wybor == 5)
                    {
                        $wynik = base_convert($licz, 10, 12);
                    }
                    else if($wybor == 6)
                    {
                        $wynik = base_convert($licz, 10, 16);
                    }
                    echo "<div class='xd'>wynik = $wynik <div>";
                }
                
            }
            else{
                echo "<h1>Nie wybrałeś konwersji śmiertelniku!</h1>";
            }
        }
            

    ?>
</body>
</html>