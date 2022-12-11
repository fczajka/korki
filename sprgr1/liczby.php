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
                <p>Wprowadź początek zakresu: <input type="number" name="pocz" placeholder="początek"></p>
                <p>Wprowadź koniec zakresu: <input type="number" name="kon" placeholder="koniec"></p>
                <input type="submit" name="parzyste" value="Parzyste">
                <input type="submit" name="nieparzyste" value="Nieparzyste">
                <input type="submit" name="srednia" value="Średnia">
                <input type="submit" name="pierwsze" value="Pierwsze">
            </form>

            <?php
                if(isset($_POST['parzyste'])) {
                    $pocz = $_POST['pocz'];
                    $kon = $_POST['kon'];
                    if($pocz=='' || $kon=='') {
                        echo "<h2>Wypełnij wszystkie pola!</h2>";
                    } elseif ($pocz%1!=0 || $kon%1!=0) {
                        echo "<h2>Podaj liczbę całkowitą!</h2>";
                    } elseif($pocz<0 || $kon<0) {
                        echo "<h2>Liczby muszą być dodatnie!</h2>";
                    } elseif ($kon<$pocz || $kon==$pocz) {
                        echo "<h2>Podaj prawidłowy zakres!</h2>";
                    } else {
                        $wynik='';
                        echo "<h2>";
                        for($i=$pocz; $i<=$kon; $i++) {
                            if($i%2==0) {
                                $wynik=" $i";
                                echo $wynik;
                            }
                        }
                        echo "</h2>";
                    }
                }
                if(isset($_POST['nieparzyste'])) {
                    $pocz = $_POST['pocz'];
                    $kon = $_POST['kon'];
                    if($pocz=='' || $kon=='') {
                        echo "<h2>Wypełnij wszystkie pola!</h2>";
                    } 
                    elseif ($pocz%1!=0 || $kon%1!=0) {
                        echo "<h2>Podaj liczbę całkowitą!</h2>";
                    } elseif($pocz<0 || $kon<0) {
                        echo "<h2>Liczby muszą być dodatnie!</h2>";
                    } elseif ($kon<$pocz || $kon==$pocz) {
                        echo "<h2>Podaj prawidłowy zakres!</h2>";
                    } else {
                        $wynik='';
                        echo "<h2>";
                        for($i=$pocz; $i<=$kon; $i++) {
                            if($i%2==1) {
                                $wynik=" $i";
                                echo $wynik;
                            }
                        }
                        echo "</h2>";
                    }
                }

                if(isset($_POST['srednia'])) {
                    $pocz = $_POST['pocz'];
                    $kon = $_POST['kon'];
                    if($pocz=='' || $kon=='') {
                        echo "<h2>Wypełnij wszystkie pola!</h2>";
                    } 
                    elseif ($pocz%1!=0 || $kon%1!=0) {
                        echo "<h2>Podaj liczbę całkowitą!</h2>";
                    } elseif($pocz<0 || $kon<0) {
                        echo "<h2>Liczby muszą być dodatnie!</h2>";
                    } elseif ($kon<$pocz || $kon==$pocz) {
                        echo "<h2>Podaj prawidłowy zakres!</h2>";
                    } else {
                        $suma = 0;
                        $ilosc = 0;
                        for($i=$pocz; $i<=$kon; $i++) {
                            $suma += $i;
                            $ilosc++;
                        }
                        $srednia = $suma/$ilosc;
                        echo "<h2>Średnia wynosi: $srednia</h2>";
                    }
                }

                if(isset($_POST['pierwsze'])) {
                    $pocz = $_POST['pocz'];
                    $kon = $_POST['kon'];
                    if($pocz=='' || $kon=='') {
                        echo "<h2>Wypełnij wszystkie pola!</h2>";
                    } 
                    elseif ($pocz%1!=0 || $kon%1!=0) {
                        echo "<h2>Podaj liczbę całkowitą!</h2>";
                    } elseif($pocz<0 || $kon<0) {
                        echo "<h2>Liczby muszą być dodatnie!</h2>";
                    } elseif ($kon<$pocz || $kon==$pocz) {
                        echo "<h2>Podaj prawidłowy zakres!</h2>";
                    } else {
                        echo "<h2>";
                        for($i=$pocz; $i<=$kon; $i++) {
                            if(pierwsze($i)==true) {
                                echo " $i";
                            }
                        }
                        echo "</h2>";
                    }
                }

                function pierwsze($pierwsza) {
                    $dzielniki=0;
                    for ($i=1; $i<=$pierwsza; $i++) {
                        if($pierwsza%$i==0) {
                            $dzielniki++;
                        }   
                    }
                    if($dzielniki!=2) {
                        return false;
                    }
                    return true;
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