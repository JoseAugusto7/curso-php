<?php

    /*
        Crie uma função que verifica se o número é par ou ímpar;
        Se for par imprima uma mensagem;
        Se for ímpar imprima outra mensagem.
    */

    $par = 4;
    $impar = 7;

    function numero($num) {

        if ($num % 2 === 0) {
            echo "$num é um número par <br>";
        } else {
            echo "$num é um número ímpar <br>";
        }


    }

    numero($par);
    numero($impar);
    numero(10);

?>