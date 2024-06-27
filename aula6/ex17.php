<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        
        $temp = array("outubro" => 27, "novembro" => 28, "dezembro" => 19,);

        foreach ($temp as $key => $value) {
            echo "A temperatura media de $key foi de $value graus <br/>";
        }

    ?>
</body>
</html>