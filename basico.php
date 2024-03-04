<?php session_start();

if($_COOKIE['usuario']){
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}
//ja ficar logado

if(!$_SESSION['usuario']){
    header('Location: login.php');
}
//vai olhar se tem usuario na sessao, caso naoa tiver, o cara é redirecionado para login.php
print_r($_SESSION);

echo '<br>';

if(!$_SESSION['nome']){
    $_SESSION['nome'] = 'gabriel';
}

//nao mantem ao fechar o browser

if(!$_SESSION['email']){
    $_SESSION['email'] = 'joao@gmail.com';
}

print_r($_SESSION);

?>

<p>
    <a href="basico_alterar_sessao.php">alterar_sessao</a>
</p>

<p>
    <a href="../logout.php">sair</a>
</p>