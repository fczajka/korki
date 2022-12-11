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
        /*define("PRZEL", 1.6);
        echo PRZEL;
        echo "Twoja przelac".PRZEL."<br>";
        $mile = 100 * PRZEL;
        echo $mile;
        echo gettype($mile);
        echo "<br>";
        var_dump($mile);
        $zmienna = 4<2;
        echo gettype($zmienna);
        echo "<br>";
        var_dump($zmienna);
        $zm = 0x4B;
        echo gettype($zm);
        echo "<br>";
        var_dump($zm);
        $zm2 = 042;
        echo gettype($zm2);
        echo "<br>";
        var_dump($zm2);*/
        $zm = 2.42424;
        echo "<h2>Warotsc zmiennej: $zm, typ zmiennej: ".gettype($zm)."</h2>";
        var_dump($zm);
        $zm = 2.67e7;
        echo "<h2>Warotsc zmiennej: $zm, typ zmiennej: ".gettype($zm)."</h2>";
        var_dump($zm);
        $zm = "2 male kotki 2";
        echo "<h2>PRzed rzyutowaniem $zm</h2>";
        $zm = (int)$zm;
        echo "<h2>Po $zm</h2>";
        
        $napis =<<< END
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque fugit amet placeat earum dolorem rerum sed facilis, quod vel, totam perspiciatis dicta soluta. Ducimus rerum magnam repellendus deleniti numquam rem!
        Facere, rerum. Asperiores voluptas harum perspiciatis doloremque blanditiis! Quod facilis sed aliquid numquam doloremque neque sequi, quisquam perspiciatis ab laborum dolore natus dolorem vel consequatur ducimus accusantium possimus excepturi exercitationem.
        END;
        echo $napis;

        echo "<h2>Wejrsja systemuy operacyjnego ".PHP_OS."</h2>";
        echo "<h2>Nazwa pliku skryptu ze scierka".__FILE__."</h2>";
        echo "<h2>Numer linii".__LINE__."</h2>";
        echo "<h2>Adres serwera".$_SERVER['REMOTE_ADDR']."</h2>";
        echo "<h2>Nazwa serwera".$_SERVER['SERVER_NAME']."</h2>";
        echo "<h2>folder glowny".$_SERVER['DOCUMENT_ROOT']."</h2>";
        ?>
</body>
</html>