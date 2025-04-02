<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Buscar usuário no banco
    $sql = "SELECT * FROM usuarios2 WHERE email = '$email'";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();

        // Verificar senha (Se estiver criptografada no banco, use password_verify)
        if ($senha === $usuario['senha']) {
            echo "Login bem-sucedido!";
            // Redirecionar para a home ou página do usuário
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Usuário não encontrado!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <label for="email">Email:</label>
            <input type="text" name="email" placeholder="Digite seu email">

            <label for="senha">Senha:</label>
            <input type="password" name="senha" placeholder="Digite sua senha">

            <button type="submit">Entrar</button>
        </form>

        <div class="nav-buttons">
            <a href="index.html"><button>Voltar à Home</button></a>
            <a href="cadastrar.php"><button>Cadastrar-se</button></a>
        </div>
    </div>
</body>
</html>