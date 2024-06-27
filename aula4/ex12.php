<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nome = "Till lindemann";

        if ($nome == "Richard kruspe") {
            echo"E ae Richard kruspe!";
        }
        elseif ($nome == "Oliver riedel") {
            echo "E ae Oliver Riedel";
        } 
        elseif ($nome == "Till Lindemann") {
            echo "E ae Till lindemann!";
        }  
        else {
            echo "E ae $nome!";
        }
    ?>
</body>
</html>