!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #button{
            background-color: blue;
            color: orange;
            margin-top: 20px;
            width: 100px;
            height: 50px;
        }
    </style>
    
</head>
<body>
    <form method="POST" action="">
        <h2>Jakie jet dzis twoje samopoczucie(1->10)</h2>
        <input type="range" id="obecne"name="zakres" min="1" max="10" onchange="pokaz()"><span id="rozw"></span>
        <script>
        function pokaz(){
            document.getElementById("rozw").innerHTML = "Samopoczucie: "+ document.getElementById("obecne").value;
            
        }
        </script>
        <h2>Wubierz kolorek</h2>
        <input type="color" name="Kolorek"><br>
        <h2>Wybierz ulubiony miesiac</h2>
        <input type="month" name="miesiac"><br>
        <input type="submit" name="guzik" value="Wyświetl" id="button">
        
    </form>
    
    <?php
        if(isset($_POST['guzik']))
        {
            $kolor = $_POST['Kolorek'];
            $samopo = $_POST['zakres'];
            
            echo "<h2 style='color:$kolor;'> Twoje dzisiejsze samopoczucie to $samopo";

            $mies = $_POST['miesiac'];
            $mies = substr($mies, 5, 2);
            
            $miesiace = ["styczen", "luty", "marzec", "kwiecien", "maj", "czerwiec", "lipiec", "sierpien"
            ,"wrzesien","pazdziernik", "listopad", "grudzien"];
            $mies -=1;
            echo "<h2> Mieisac $miesiace[$mies]</h2>";
        }
    ?>
</body>
</html>