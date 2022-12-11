<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

    <form action="" method="post">
        
        <select name="wybor">
            <option value="nic">wybierz klub</option>
            <option value="zd1.jfif">Manchester united</option>
            <option value="zd2.jfif">Real Madrid</option>
            <option value="zd3.jpg">Leggia Warszawa</option>
            <option value="zd4.jpeg">Kp gdynia</option>
            <option value="zd5.png">Ks turosnianka</option>
            <option value="zd6.jpg">Deutschland</option><br>
        <input type="submit" value="Submit" name="przycisk" id="przyc"/>
    </select>
        
    </form>
    <?php
        if(isset($_POST['przycisk'])){
            $wybor = $_POST['wybor'];
            if ($wybor == 'nic') echo "Miałeś wybrać klub!";
            else {
                echo "<img src='$wybor'>";
            }

        }
        

    ?>
</body>
</html>