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
            <?php
                echo "<table class='tablica'>";
                echo"<tr><td>stopnie</td><td>sin</td><td>cos</td><td>tg</td><td>ctg</td></tr>";
                for($i=30; $i<=60; $i++) {
                    echo "<tr>";
                        echo "<td>$i</td>";
                        echo "<td>".sin(deg2rad($i))."</td>";
                        echo "<td>".cos(deg2rad($i))."</td>";
                        echo "<td>".tan(deg2rad($i))."</td>";
                        echo "<td>".(1/(tan(deg2rad($i))))."</td>";
                    echo "</tr>";
                }
                echo "</table>";


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