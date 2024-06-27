<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="FormCadastro" name="formCadastro" method="POST" action="receberForm.php">
    <!--Radio Button-->
    <B>Qual seu sitema operacional?</B><br>
    <input type="radio" name="sistema" value="Windows 8.1"> Win 98 <br>
    <input type="radio" name="sistema" value="Windows 10"> Win XP <br>
    <input type="radio" name="sistema" value="Linux"> Linux <br>
    <input type="radio" name="sistema" value="Mac"> Mac <br> <br>

    <!--Checkbox -->
    <B>Escolha os numeros de sua preferencia</B> <br>
    <input type="checkbox" name="numeros[]" value="10"> 10 <br>
    <input type="checkbox" name="numeros[]" value="100"> 100 <br>
    <input type="checkbox" name="numeros[]" value="1000"> 1000 <br> <br>

    <!-- Dropdown list -->
     <B>Qual o seu processador?</B> <br>
     <select name="precessador">
     <option value="Pentiun">Pentiun</option>
     <option value="AMD">AMD</option>
     <option value="Celeron">Celeron</option>

     </select> <br> <br>
     <input id="botaoEnviar" type="submit" value="Enviar">

    </form>
</body>
</html>