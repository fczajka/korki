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
        <input type='number' name='xd'>
        <input type='number' name='xd2'>
        <input type="submit" name="guzik">
    </form>
    
    <?php
        function spr($wartosc)
        {
            if($wartosc== " " || !is_numeric($wartosc) || $wartosc<=0) return false;
            else return true;
        }

        function gendiv($x, $y)
        {
            echo "<div style='width:".$x."; height:".$y."'></div>";
        }

        
        

        while(1)
        {
            if(isset($_POST["guzik"]))
            {
                gendiv($_POST['xd'], $_POST['xd2']);
            }
        }
    ?>
</body>
</html>