<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
        display: block;
        width: 100px;
        height: 100px;
        padding: 100px;
        display:inline-block;
        } 
        p{
            border-radius: 180px;
            background-color: black;
            display: inline;
            width: 100px;
            height: 100px;
            padding: 100px;
            
        }
    </style>
</head>

<body>
    <?php
        for($x = 1; $x <=8; $x++)
        {
            if($x%2==0)
            {
                $y =2;
                $max = 9;
            }
            else
            {
                $y=1;
                $max=8;
            } 
            for($y; $y <=$max; $y++)
            {   
                
                if($y%2 ==0)
                {
                    
                    if($x < 4)
                    {
                        echo "<div id = 'szach' style='background-color:yellow'><p>xd</p> </div>";
                        
                    }
                    else{
                        echo "<div id = 'szach' style='background-color:yellow'> </div>";
                    }
                }
                else echo "<div id = 'szach' style='background-color:brown'> </div>";
                
            }
            echo "<br>";
        }
    ?>
    <p>xd</p>
</body>
</html>