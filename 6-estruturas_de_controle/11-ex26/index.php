<?php

    /*
        Crie uma variável que recebe a velocidade de um carro;
        Depois crie uma estrutura if que verifica essa velocidade;
        Se a velocidade for menor que 40, imprima que o motorista está na velocidade correta;
        Se igual a 40 imprima uma msg para que ele tome cuidado;
        Se for maior a 40 imprima uma mensagem de ulta.
    */

    $carro1 = 35;
    $carro2 = 40;
    $carro3 = 45;

    $velMax = 40;

    if ($carro1 < $velMax) {
        echo "Você está dirigindo com segurança na velocidade correta. <br>";
    } else if ($carro1 == $velMax) {
        echo "Você está rápido demais, tome cuidado! <br>";
    } else {
        echo "Você foi multado por estar acima do limite de velocidade da via! <br>";
    }

    if ($carro2 < $velMax) {
        echo "Você está dirigindo com segurança, na velocidade correta. <br>";
    } else if ($carro2 == $velMax) {
        echo "Você está rápido demais, tome cuidado! <br>";
    } else {
        echo "Você foi multado por estar acima do limite de velocidade da via! <br>";
    }

    if ($carro3 < $velMax) {
        echo "Você está dirigindo com segurança, na velocidade correta. <br>";
    } else if ($carro3 == $velMax) {
        echo "Você está rápido demais, tome cuidado! <br>";
    } else {
        echo "Você foi multado por estar acima do limite de velocidade da via! <br>";
    }

?>