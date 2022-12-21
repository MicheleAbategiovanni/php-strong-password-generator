<?php

function randomChar($passwordLenght)
{

    $chars = "abcdefghiklmnopqrstuvwxyz";
    $charsUp = "ABCDEFGHIKLMNOPQRSTUVWXYZ";
    $symbol = "!@#$%^&*()-_=+[]{};:',./\|";
    $numbers = "0123456789";

    $dictionary = $chars . $numbers . $charsUp . $symbol;
    $password = '';

    for ($i = 0; $i < $passwordLenght; $i++) {
        $charIndex = rand(0, strlen($dictionary) - 1);
        $password = $password . $dictionary[$charIndex];
    }

    return $password;

}
