<?php
session_start();

$_SESSION['erros'] = []; // Inicializa a variável $_SESSION['erros'] como um array vazio

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuarios = [
        [
            'nome' => 'joaoo',
            'email' => 'joaozinho123@gmail.com',
            'senha' => '12345',
        ],
        [
            'nome' => 'yann',
            'email' => 'yann@gmail.com',
            'senha' => '12345',
        ],
    ];

    foreach ($usuarios as $usuario) {
        $emailcerto = $email === $usuario['email'];
        $senhacerta = $senha === $usuario['senha'];
        if ($emailcerto && $senhacerta) {
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome']; // Atribui o nome do usuário à sessão
            $exp = time() + 60 *  60 *24 * 30;
            setcookie('usuario', $usuario['nome'], $exp);//nome aparecer nome e tempo //setcookie
            
            header('Location: basico.php');
            exit;
        }
    }

    if (!isset($_SESSION['usuario'])) {
        $_SESSION['erros'] = ['Senha incorreta'];
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Identifique-se</h2>
    <?php if ($_SESSION['erros']) { ?>
        <div class="erros">
            <?php foreach ($_SESSION['erros'] as $error) { ?>
                <p><?= $error ?></p>
            <?php } ?>
        </div>
    <?php } ?>

    <form action="#" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
