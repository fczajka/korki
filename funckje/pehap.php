<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<title>Równanie kwadratowe</title>
	
</head>
<!--Zadnie 2. Użytkownik podaje liczbę całkowitą.
    Wypisz informacje: kwadrat, pierwiastek, 8 potęga, liczba w postaci binarnej i szestnastkowej, połowa odwrotności liczby, pierwiastek 3 stopnia.
    Zabezpiecz.-->
<body>
		<form action="" method="post">
            <h2>Podaj współczynnik a:</h2>
            <input type="number" name="a"/>
            <h2>Podaj współczynnik b:</h2>
            <input type="number" name="b"/>
            <h2>Podaj współczynnik c:</h2>
            <input type="number" name="c"/>
            <p><input type="submit" value="Submit" name="przycisk"/></p>

        </form>

	<?php
        if (isset($_POST['przycisk'])){
            $a=$_POST['a'];
            $b=$_POST['b'];
            $c=$_POST['c'];
            
            $delta=$b*$b-4*$a*$c;
            if($a == 0)
            {
                if($b == 0 && $c== 0)
                {
                    echo "Same zera! Nie ma rozwiazan";
                }
                else if($b == 0)
                {
                    echo "nie mozna!";
                }
                else if($c == 0)
                {
                    echo "Równanie ma nieskonczenie rozwiazan";
                }
                
                else
                {
                    echo "a nie moze byc 0 <br>";
                    $y = -($c/$b);
                    echo "Rozwiazanie liniowe x = $y";
                    
                }
            }
            else{
            echo"<h2>Postać równania: ".$a."x<sup>2</sup>+".$b."x+$c=0</h2>";
            echo"<h2> Delta = $delta</h2>";
            if($delta>0){
                $x1=(-$b-sqrt($delta))/2/$a;
                $x2=(-$b+sqrt($delta))/2/$a;
                echo"<h2>Równanie ma dwa pierwiastki</h2>";
                echo"x1=$x1"."<br>";
                echo"x2=$x2"."<br>";
            }
            else{
                if($delta==0){
                    $x=-$b/(2*$a);
                    echo"<h2>Równanie ma jeden pierwiastek</h2><br>";
                    echo"<h2>x12=$x</h2><br>";
                }
                else{
                    echo"<h2>Równanie nie ma pierwiastków rzeczywistych</h2><br>";
                }
            
            }
        }
        }

       
       //echo"<center><font color='red'><marquee behavior='alternate' width='50px' scrollamount='10'>ŹLE!!!</marquee></font></center>";
    ?>
	
</body>
</html>


















