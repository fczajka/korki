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