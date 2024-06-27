<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $a = 1;
        $a += 2;
        echo $a;
    ?>
    <?php 
        $a -= 2;
        $a *= 2;
        $a /= 2;
    ?>
    <?php 
        $a = 1;
        echo ++$a; //incrementa 1 e retoma ao valor
        echo $a++; // retornamos ao valor e incrementamos 1
        echo --$a; // decrementamos 1 e retornamos ao valor
        echo $a--; // retornamos ao valor e decrementamos 1
    ?>
</body>
</html>