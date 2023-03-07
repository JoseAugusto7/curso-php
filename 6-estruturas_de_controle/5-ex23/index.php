<?php

    /*
        Complemente o exercício 22;
        Insira uma mensagem para as pessoas que são menores de idade;
    */

    $menor = 15;
    $igual = 18;
    $maior = 35;
    $maioridade = 18;

    $msgMaior = "Você é maior de idade";
    $msgMenor = "Você é menor de idade";

    if ($menor >= $maioridade) {
        echo $msgMaior . "<br>";
    } else {
        echo $msgMenor . "<br>";
    }

    if ($igual >= $maioridade) {
        echo $msgMaior . "<br>";
    } else {
        echo $msgMenor . "<br>";
    }

    if ($maior >= $maioridade) {
        echo $msgMaior . "<br>";
    } else {
        echo $msgMenor . "<br>";
    }

?>