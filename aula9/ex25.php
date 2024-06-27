<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //Radio Button
        echo"<br> Seu sistea operacinal é: <br/>" . $_POST["sistema"] ."<br><br>";

        //checkbox
        if (isset($_POST["numeros"])) {
            echo "<br>Os numeros de sua preferencia são: </br><BR>";
            
            //faz loop pelo array dos numeros
            foreach ($_POST["numeros"] as $numero) {
                echo "- " . $numero . "<BR><br>";
            }           
        } else{
            echo "<br>Você não escolheu um numero preferido!</br><br><br>";
        }

        echo "<br>Seu processador é: </br>" . $_POST["processador"] ."<BR>";
    ?>
</body>
</html>