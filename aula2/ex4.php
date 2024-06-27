<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //array com chave => Valor
        $ListaAlunoIdade = array(
            "Leonardo" => 31,
            "Bia" => 21,
            "Gabriella" => 17,

        );
        //array apenas com valor
        $Listacores = array(
            "vermelho",
            "branco",
            "verde",
            "laranja",
        );
        //acesso aos itens do array $ListaAlunoidade[CHAVE]

        echo $ListaAlunoidade ["Leonardo"];
        echo "<br />";

        echo $Listacores[2];
        echo "<br />";

        // Exibir em uma tela todo o conteudo (chave e valor) de um array var_dump(array);
        var_dump($ListaAlunoidade);
        echo "<br />";

        var_dump($Listacores);
    ?>
</body>
</html>