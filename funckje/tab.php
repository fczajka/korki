<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table td{
            border: 1px solid purple;
            background-color: yellow;
            
        }
        table{
            border-collapse :collapse;
            width:30%;
            
        }
        td{
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <input type="submit" value="Uruchom maszyne losującą" name= gen>
    </form>

    <?php
        
        if(isset($_POST["gen"]))
        {
            
            $los = range(1,49);
            shuffle($los);
            $lotto = array_slice($los, 0, 6);
            $los = range(1,49);
            echo "<table>";
            for($x = 0; $x <49; $x++)
            {
                $flag = 0;
                if($x %7==0) echo "<tr>";
                
                if(in_array($los[$x], $lotto)) echo "<td style='background-color:blue; color:white'>$los[$x]</td>";
                else echo "<td>$los[$x]</td>";


                if($x %7 == 6) echo "</tr>";
            }

            echo "</table>";

        } 
        

        

    ?>
</body>
</html>