<?php

session_id('j18qqhuvmk15cefgoi27ho0t2j');

session_start();

echo session_id();

$contador = &$_SESSION['contador'];

//& pra acessar no local da memora

$contador = $contador ? $contador + 1 : 1;
echo '<br>';

echo $contador;

if($_SESSION['contador'] % 5 ==0){
    session_regenerate_id();
}

if($_SESSION['contador'] > 15){
    session_destroy();
}

