<?php
$host = "localhost"; // Servidor do banco de dados
$user = "root"; // Usuário do banco (no XAMPP geralmente é "root")
$password = ""; // Senha (vazia no XAMPP)
$database = "banco_de_usuarios"; // Nome do seu banco de dados

// Criar a conexão
$conexao = new mysqli($host, $user, $password, $database);

// Verificar se a conexão falhou
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
?>