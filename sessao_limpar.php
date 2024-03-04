<?php
session_start();
session_destroy();
header('Location:basico.php');

//para apagar tudo usa o session destroy
//e o header é pra direcionar na hora que o programa ler a linha de cod