<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <input type="submit" name='guzik'>
    </form>

    <?php
        if(isset($_POST['guzik']))
        {
            $suma = 0;
            $n = 1;
            $los = 0;
            while($los!=1)
            {
                echo "<p>rzut nr $n</p>";
                $los = rand(1,6);
                echo "<h3>los = $los</h3>";
                echo "<img src='zd".$los.".png' alt='xd'>";
                $suma+=$los;
                $n++;
            }
            echo "Średnia = ".round(($suma/$n), 2)." ";

            echo "<h1>DZIAllllllllllllllllaaaaaaa</h1>";
            for($x = 1;;$x++)
            {
                echo "<p>rzut nr $n</p>";
                $los = rand(1,6);
                echo "<h3>los = $los</h3>";
                echo "<img src='zd".$los.".png' alt='xd'>";
                $suma+=$los;
                if($los == 1) break;
            }
        }
    ?>
</body>
</html>