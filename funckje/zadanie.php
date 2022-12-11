<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <form action="" method="POST">
        <input type="submit" name="guzik1" value="Zadanie 1">
        <input type="submit" name="guzik2" value="Zadanie 2">
    </form>
    <?php
        function tekst($tekst, $size, $kol, $grube, $podkresl)
        {
            if($grube && $podkresl) echo "<p style='font-size: ".$size."px; color: ".$kol."; font-weight: bold; text-decoration: underline;'>$tekst</p>";
            else if($grube) echo "<p style='font-size: ".$size."px; color: ".$kol."; font-weight: bold;'>$tekst</p>";
            else if($podkresl) echo "<p style='font-size: ".$size."px; color: ".$kol."; text-decoration: underline;'>$tekst</p>"; 
            else echo "<p style='font-size: ".$size."px; color: ".$kol.";'>$tekst</p>"; 
            
            
            
        }
        function lista($rodzaj,$ile,$domysl, $typ)
        {
            echo "<$rodzaj style='list-style-type:$typ'>";
            
            for($x= 1; $x<=$ile; $x++)
            {
                echo "<li>$domysl</li>";
            }
            echo "</$rodzaj>";
        }
        echo "<div id='lol'>";
        echo "<div id='xd'>";
        if(isset($_POST['guzik1']))
        {
            tekst("To jest tekst o wielkosci 100 i kolorze czerwonym jest pogrubiony i podkresony",100, "red",1, 1);
            tekst("To jest tekst o wielkosci 50 i kolorze niebieskim jest niepogrubiony i podkresony",50, "blue",0, 1);
            tekst("To jest tekst o wielkosci 70 i kolorze zielonym jest pogrubiony i niepodkresony",100, "green",1, 0);
            tekst("To jest tekst o wielkosci 120 i kolorze żółtym jest niepogrubiony i niepodkresony",120, "yellow",0, 0);
            tekst("To jest tekst o wielkosci 20 i kolorze różnowy jest pogrubiony i podkresony",20, "pink",1, 1);
        }
        if(isset($_POST['guzik2']))
        {
            lista("ul", 5,"Przykładowy link", "square");
            lista("ol", 10,"Przykładowy link", "upper-roman");
            lista("ol", 20,"Przykładowy link", "lower-roman");
        }
        echo "</div>";
        echo "</div>";
    ?>
</body>
</html>