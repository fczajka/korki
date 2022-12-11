<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #guzik{
            background-color: red;
            color:bisque;
            margin: 20px;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        <h1>Twoja ulubiona potrawa (możesz wybrać kilka) </h3>
        <label><input type="checkbox" name="schabowy">schabowy</label><br>
        <label><input type="checkbox" name="pomidorowa">pomidorowa</label><br>
        <label><input type="checkbox" name="Goloneczka">Goloneczka</label><br>
        <label><input type="checkbox" name="Spagetti">Spagetti</label><br>
        <input type="number" name="xd" value="<?php if(isset($_POST['guzik'])) echo $_POST['xd']; else echo '';?>">
        <input type="submit" value="Pokaż" name="guzik" id="guzik">
    </form>

    <?php
        
        if(isset($_POST['guzik']))
        {
            if(isset($_POST['schabowy'])) echo "<h1>Lubisz schabowy</h1>";
            else echo "<h1>Nie wolno nie lubic schabowego</h1>";
            if(isset($_POST['pomidorowa'])) echo "<h1>Lubisz pomidorowa</h1>";
            else echo "<h1>Nie wolno nie lubic pomidorowa</h1>";
            if(isset($_POST['Goloneczka'])) echo "<h1>Lubisz Goloneczka</h1>";
            else echo "<h1>Nie wolno nie lubic Goloneczka</h1>";
            if(isset($_POST['Spagetti'])) echo "<h1>Lubisz Spagetti</h1>";
            else echo "<h1>Nie wolno nie lubic Spagetti</h1>";

            $liczba = $_POST['xd'];
            if ($liczba % 400 == 0 || $liczba % 4 == 0 && $liczba % 100 != 0)
            {
                echo "<h1>Jest przestepny</h1>";
            }
            else {
                echo "<h1>Nie jest przestepny</h1>";
            }
        }
        $wiek = 18;
        $info =($wiek++>18)?"dorosly":"mlokos";
        echo "$info";

        
    ?>
</body>
</html>