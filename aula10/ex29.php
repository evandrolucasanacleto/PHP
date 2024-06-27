<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro cliente</title>
</head>
<body>
    <h1>Cadastro de Cliente:</h1>
    <form action="precessar_clientes.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required> <br> <br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required> <br> <br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" required> <br> <br>

        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco" required> <br> <br>

        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" id="cidade" required> <br> <br>

        <label for="Estado">Estado:</label>
        <input type="text" name="estado" id="estado" required> <br> <br>

        <label for="cep">Cep:</label>
        <input type="text" name="cep" id="cep" required> <br> <br>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="text" name="data_nascimento" id="data_nascimento" required> <br> <br>

        <input type="submit" value="Cadastrar">]
    </form>

    <?php 
        $servername ="localhost";
        $username = "root";
        $password = "";
        $dbname = "loja";

        //conectar ao banco de dados

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Conexão Falhou: q tistreza". $conn->connect_error);
        }

        //verificar se a requisição foi feita via método POST

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nome = $_POST['nome'] ??'';
            $email = $_POST['email'] ??'';
            $telefone = $_POST['telefone'] ??'';
            $endereco = $_POST['endereco'] ??'';
            $cidade = $_POST['cidade'] ??'';
            $estado= $_POST['estado'] ??'';
            $cep = $_POST['cep'] ??'';
            $data_nascimento = $_POST['data_nascimento'] ??'';
        }

        //executar a declaração

        if ($stmt->execute()) {
            echo "Cliente cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar cliente:". $stmt->error;
        }
        
        //preparar a decçaração SQL para inserção
        
        $stmt = $conn->prepare('INSERT INTO clientes(nome, email, telefone, endereço, cidade, estado, cep, data_nascimento) VALUES(?,?,?,?,?,?,?,?)');

        $stmt->bind_param('ssssssss', $nome, $email, $telefone, $endereco, $cidade, $estado, $cep, $data_nascimento);

        //fechar a declaração  e a conexão

        $stmt->close();

        $conn->close();  
            
            header("Location: formulario.html");    
            
            exit;        
    ?>
</body>
</html>