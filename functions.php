<?php
$lunghezza = $_GET['lunghezza'];

function generaPassword($lunghezza)
{
    $password = '';
    $caratteriPassword = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!"£$%&/()=?^*[]@#°§';
    $caratteriPasswordLunghezza = strlen($caratteriPassword);

    for ($i = 0; $i < $lunghezza; $i++) {
        $password .= $caratteriPassword[rand(0, $caratteriPasswordLunghezza - 1)];
    }

    return $password;
}
$password = generaPassword($lunghezza);
?>






