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

    <?php
        function animacja($tekst, $kolor, $wielkosc) {
            echo "<h2 style='font-size:".$wielkosc."; color: #".$kolor.";'>$tekst</h2>";
        }

        animacja("Kamil Krzyżaniak", 195115, '20px');
    ?>

    </div>
    <footer class="stopka">
        kamil.krzyzaniak@gmail.com
    </footer>
    
</body>
</html>