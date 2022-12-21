<?php

function randomChar($passwordLenght)
{

    $chars = "abcdefghiklmnopqrstuvwxyz";
    $charsUp = "ABCDEFGHIKLMNOPQRSTUVWXYZ";
    $symbol = "!@#$%^&*()-_=+[]{};:',./\|";
    $numbers = "0123456789";

    $password = $chars . $numbers . $charsUp . $symbol;

    for ($i = 0; $i < $passwordLenght; $i++) {
        $charIndex = rand(0, strlen($password) - 1);
        echo $password[$charIndex];
    }
}


?>