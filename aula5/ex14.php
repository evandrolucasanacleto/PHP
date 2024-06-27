<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=,initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $nome = "Fulano";
    switch ($nome) {
        case 'Fulano':
            echo "E ae Fulano!";
        break;

        case 'Sicrano':
            echo 'E ai sicrano!';
        break;

        case 'Beltrano':
            echo 'E ae Beltrano!';
        break;   

        default:
            echo 'Qual é o seu nome?';
        break;
    }
?>
</body>
</html>