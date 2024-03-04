<?php session_start();

print_r($_SESSION);

?>

<p>
    <b>Nome: <?= $_SESSION['nome'] ?></b>
</p>

<p>
    <b>Email: <?= $_SESSION['email'] ?></b>
</p>

<?php
$_SESSION['nome'] = 'gabriel';
$_SESSION['email'] = 'yadmakdmamkdm@gmail.com';
?>

<p>
    <a href="basico.php">voltar</a>
</p>

<p>
    <a href="sessao_limpar.php">Limpar</a>
</p>