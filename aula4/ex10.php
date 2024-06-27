<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $idade = 17;

        if($idade < 18) {
            echo"Você não pode entrar aqui";
        } else { 
            echo "Seja Bem - vindo";
        }
    ?>
    <?php 
        $idade = 21;
        $identidade = true;

        if($idade > 18 && $identidade == true ) {
            echo "Seja bem - vindo!";
        }
    ?>
</body>
</html>