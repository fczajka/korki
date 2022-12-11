<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Sposob I - elementy daty w tablicy </h1>";
        $tab_data = getdate();
        echo "<h1>Elementy tablicy: </h1>";
        
        print_r($tab_data);
        echo "<h2> Aktualny rok".$tab_data['year']."</h2>";
        echo "<h2> numer miesiac".$tab_data['mon']."</h2>";
        echo "<h2> slownie miesiac".$tab_data['month']."</h2>";
        echo "<h2> dzien w miesiac".$tab_data['mday']."</h2>";

        
        
        echo "<h2> sekundy".$tab_data['seconds']."</h2>";
        $g = $tab_data['hours'];
        $m = $tab_data['minutes'];
        $s = $tab_data['seconds'];
        if($g < 10) $g='0'.$g;
        if($m < 10) $m='0'.$m;
        if($s < 10) $s='0'.$s;
        
        echo "<h2>Czas: ".$g.":".$m.":".$s."</h2>";
        echo "<h2>Nazwa dnia tygodnia:".$tab_data['weekday']."</h2>";
        echo "<h2>numer dnia tygodnia:".$tab_data['wday']."</h2>";
        echo "<h2>Data:".date('d/m/Y')."</h2>";
        echo "<h2>Data:".date('H:i:s')."</h2>";
        $dni = ['niedziela', 'poniedzialek', 'wtorek', 'sroda', 'czwartek', 'piatek', 'soboty'];
        echo "<h2>Dzien po polsku ".$dni[$tab_data['wday']]." </h2>";

        $urodz = date_create('2003-04-01');
        $dzis = date_create('2022-10-07');
        $roznica = date_diff($urodz, $dzis);
        echo "Żyjesz juz ".$roznica->format('%R%adni')
    ?>
</body>
</html>