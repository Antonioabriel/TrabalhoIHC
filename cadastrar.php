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

    $senhaCripto = password_hash($senha, PASSWORD_BCRYPT);

    $sql2 = "SELECT * FROM usuarios2 WHERE email = '$email'";

    $resultado = $conexao->query($sql2);

    if ($resultado->num_rows == 0) {
        $sql = "INSERT INTO usuarios2 (nome, email, senha, telefone, cpf, logradouro, cep, municipio, estado, cnh_numero, cnh_categoria, cnh_validade, data_nascimento)
            VALUES ('$nome', '$email', '$senhaCripto', '$telefone', '$cpf', '$logradouro', '$cep', '$municipio', '$estado', '$cnh_numero', '$cnh_categoria', '$cnh_validade', '$data_nascimento')";

        if ($conexao->query($sql) === TRUE) {
            echo "Cadastro realizado com sucesso!";
        }else {
            echo "Erro no cadastro: " . $conexao->error;
        }
    }else {
        echo "Erro: Este e-mail já está cadastrado!";
    }
    
}
?>
