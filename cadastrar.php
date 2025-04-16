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
