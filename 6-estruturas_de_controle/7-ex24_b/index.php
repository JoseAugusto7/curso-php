<?php

    /*
        Crie uma variável que recebe um peso;
        Caso seja maior que 80, imprima que está pesado demais,
        caso contrário imprima que está com o peso dentro do limite.
    */

    $pesado = 90;
    $leve = 70;

    $limite = 80;

    $msgAcima = "Está acima do peso <br>";
    $msgLimite = "Está dentro do limite de peso <br>";

    if ($pesado > $limite) {
        echo $msgAcima;
    } else {
        echo $msgLimite;
    }

    if ($leve > $limite) {
        echo $msgAcima;
    } else {
        echo $msgLimite;
    }

?>