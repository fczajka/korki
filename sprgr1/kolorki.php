<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamil Krzyżaniak</title>
    <link rel="stylesheet" href="krzyzaniak.css">
</head>
<body>
    <header class="naglowek">
        <h1>Kamil Krzyżaniak</h1>
    </header>
    <div class="glowny">
        <div class="zawartosc">
            <form action="" method="POST">
                <input type="submit" name="pokolei" value="Po kolei">
                <input type="submit" name="losowy" value="Losowy">
                <input type="submit" name="ostatni" value="Ostatni">
                <input type="submit" name="wszystkielosowo" value="Wszystkie losowo">
            </form>
            <?php
                $tablica = array('orange','yellow','blue','red','#135756', '#895634', 
                '#760935', '#804792');

                if(isset($_POST['pokolei'])) {
                    for($i=0; $i<8; $i++) {
                        echo "<h2 style='color:".$tablica[$i].";'>Kamil Krzyżaniak</h2>";
                    }
                }
                if(isset($_POST['losowy'])) {
                    $losowa = rand(0,7);
                    $kolor = $tablica[$losowa];
                    echo "<h2 style='color:".$kolor.";'>Kamil Krzyżaniak</h2>";
                }
                if(isset($_POST['ostatni'])) {
                    echo "<h2 style='color:".$tablica[7].";'>Kamil Krzyżaniak</h2>";
                }
                if(isset($_POST['wszystkielosowo'])) {
                    shuffle($tablica);
                    for($i=0; $i<8; $i++) {
                        echo "<h2 style='color:".$tablica[$i].";'>Kamil Krzyżaniak</h2>";
                    }

                }



            ?>

        </div>
        <div class="prawy">
            <ol>
                <li><a href="liczby.php">Liczby</a></li>
                <li><a href="trygonometria.php">Trygonometria</a></li>
                <li><a href="kolorki.php">Kolorki</a></li>
            </ol>
        </div>
    </div>
    <div class="dolny">
        
    </div>
    <footer class="stopka">
        kamil.krzyzaniak@gmail.com
    </footer>
    
</body>
</html>