<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $logradouro = $_POST['logradouro'];
    $cep = $_POST['cep'];
    $municipio = $_POST['municipio'];
    $estado = $_POST['estado'];
    $cnh_numero = $_POST['cnh_numero'];
    $cnh_categoria = $_POST['cnh_categoria'];
    $cnh_validade = $_POST['cnh_validade'];
    $data_nascimento = $_POST['data_nascimento'];

    $sql = "INSERT INTO usuarios2 (nome, email, senha, telefone, cpf, logradouro, cep, municipio, estado, cnh_numero, cnh_categoria, cnh_validade, data_nascimento)
            VALUES ('$nome', '$email', '$senha', '$telefone', '$cpf', '$logradouro', '$cep', '$municipio', '$estado', '$cnh_numero', '$cnh_categoria', '$cnh_validade', '$data_nascimento')";

    if ($conexao->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro no cadastro: " . $conexao->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Cadastro</h2>
        <form action="cadastrar.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" placeholder="Nome" required>

            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Email" required>

            <label for="senha">Senha:</label>
            <input type="password" name="senha" placeholder="Senha" required>

            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" placeholder="Telefone">

            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" placeholder="CPF (apenas números)" pattern="\d{11}" required>

            <label for="logradouro">Logradouro:</label>
            <input type="text" name="logradouro" placeholder="Rua, Avenida, etc." required>

            <label for="cep">CEP:</label>
            <input type="text" name="cep" placeholder="CEP (apenas números)" pattern="\d{8}" required>

            <label for="municipio">Município:</label>
            <input type="text" name="municipio" placeholder="Município" required>

            <label for="estado">Estado:</label>
            <input type="text" name="estado" placeholder="UF" maxlength="2" required>

            <label for="cnh_numero">Número da CNH:</label>
            <input type="text" name="cnh_numero" placeholder="Número da CNH" required>

            <label for="cnh_categoria">CNH Categoria:</label>
            <input type="text" name="cnh_categoria" placeholder="Categoria CNH" required>

            <label for="cnh_validade">CNH Validade:</label>
            <input type="date" name="cnh_validade" required>

            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" name="data_nascimento" required>

            <button type="submit">Cadastrar</button>
        </form>

        <div class="nav-buttons">
            <a href="index.html"><button>Voltar à Home</button></a>
            <a href="login.php"><button>Acessar Login</button></a>
        </div>
    </div>
</body>
</html>