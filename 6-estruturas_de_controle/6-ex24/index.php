<?php

    /*
        Crie variáveis com tipos de dados diferentes: string, int e boolean por exemplo;
        Cheque se a variável é um intetiro, caso seja apresente uma mensagem confirmando o dado,
        caso não seja apresente outra mensagem.
    */


    $a = "José";
    $b = 15;
    $c = true;

    $msgIf = "É um inteiro <br>";
    $msgElse = "Não é um inteiro <br>";

    if (is_int($a)) {
        echo $msgIf;
    } else {
        echo $msgElse;
    }

    if (is_int($b)) {
        echo $msgIf;
    } else {
        echo $msgElse;
    }

    if (is_int($c)) {
        echo $msgIf;
    } else {
        echo $msgElse;
    }

?>