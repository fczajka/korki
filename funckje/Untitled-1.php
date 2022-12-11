<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="number" name="silnia" id="">
        <input type="submit" name="guzik">
    </form>
    <?php
        function iter($n)
        {
            $suma = 1;
            for($x = 2; $x <= $n; $x++)
            {
                $suma *= $x;
            }
            return $suma;
        }
        function rek($n)
        {
            if($n == 1) return 1;
            else return $n * rek($n - 1);
        }

        if(isset($_POST["guzik"]))
        {
            $iter = $_POST['silnia'];
            echo "Silnia iteracyjnie: ".iter($iter)."<br>";
            echo "Silnia rekurencyjnie: ".rek($iter);
        }

    ?>
</body>
</html>