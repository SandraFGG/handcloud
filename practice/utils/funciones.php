<?php
function validaNoPar($numbers)
{
    arsort($numbers);
    foreach ($numbers as $number) {
        if ($number % 2 == 0) {
            echo "$number es par";
        } else {
            echo "$number es impar";
        }
        echo "<br>";
    }
}

function validaPalindromo()
{
        $frase = $_POST['campo'];
        if (strcmp(str_replace(" ", "", $frase),  str_replace(" ", "", strrev($frase))) == 0) {
            echo "$frase es palindromo";
        } else
            echo "$frase no es palindromo";
    unset($_POST['campo']);
}
