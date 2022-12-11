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
        }
        body{
            background-color: black;
            color: orange;
        }
        label{
            border: 2px solid;
        }
        #xd{
            
            
            
        }
        #img{
            border: 5px solid #555;
            width:150px;
        }
    </style>
    <script>
        function handleChange(src) {
            document.getElementById("wynik").innerHTML=src.value;
        }
    </script>
</head>
<body>
    <form action="" method="POST" >
        <div id="xd">
        <h2>Wybierz wielkosc obrazka</h2>
            <label>mały <input type="radio" name= "wybor" value="0.5"></label><br>
            <label>oryginalny <input type="radio" name= "wybor" value="1" checked></label><br>
            <label>duzy <input type="radio" name= "wybor" value="2"></label><br>
        </div>

        <select name="lista">
            <option value="nic">Wybierz rodzaj obramowani</option>
            <option value="solid">ciągłe</option>
            <option value="dotted">kropkowane</option>
            <option value="dashed">przerywany</option>
            <option value="ridge">grzbietowy</option>
            <option value="hidden">ukryte</option>
        </select>

        <h2>Wybierz kolor obramowania</h2>
        <label>czerwony <input type="radio" name= "wybor2" value="red" checked onchange="handleChange(this)"></label><br>
        <label>zielony <input type="radio" name= "wybor2" value="green" onchange="handleChange(this)"></label><br>
        <label>niebieski <input type="radio" name= "wybor2" value="blue" onchange="handleChange(this)"></label><br>
        <label>żółty <input type="radio" name= "wybor2" value="yellow" onchange="handleChange(this)"></label><br>
        <label>fioletowy <input type="radio" name= "wybor2" value="purple" onchange="handleChange(this)"></label><br>
        <label>losowy <input type="radio" name= "wybor2" value="losowe" onchange="handleChange(this)"></label><br>
        <h2 id="wynik"></h2>

        <h2>Wybierz grubość obramowania</h2>
        <input type="range" name="zakres" min="5" max="25"><br>

        Sepia <input type="checkbox" name = "sepia"><br>
        Odbicie lustrzane <input type="checkbox" name="lustro"><br>
        <input type="submit" name="submit">
        

    </form> 

    <?php
        if(isset($_POST['submit']))
        {
            $wielkosc = $_POST['wybor'];
            $wymiar = 100 * $wielkosc /5;
            $kolor = $_POST['wybor2'];
            $grubosc = $_POST['zakres'];
            $obram = $_POST['lista'];
            $sepia = "filter:sepia(0%)";
            $lustro = 1;
            if($_POST['lista']=='nic')
            {
                echo "WYBIERZ OPBRAMOWANIE";
                
            }
            else{
                if(isset($_POST['sepia']))
                {
                    $sepia = "filter: sepia(100%)";
                }
                if(isset($_POST['lustro']))
                {
                    $lustro = -1;
                }
                if($kolor =='los')
                {

                    $r = random_int(0,255);
                    $g = random_int(0, 255);
                    $b = random_int(0, 255);
                    echo "<img style='border:".$grubosc."px $obram; color:rgb($r,$g,$b); $sepia; transform: scaleX($lustro);' src='xd.jpeg width='$wymiar%' height='$wymiar%' id='xd'>";

                }
                else{
                    echo "<img style='border:".$grubosc."px $obram; border-color: $kolor; $sepia; transform: scaleX($lustro);' src='xd.jpeg' width='$wymiar%' height='$wymiar%' id='xd'>";
                }
                
                
            }
        }
    ?>
</body>
</html>