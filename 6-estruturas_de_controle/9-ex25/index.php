<?php

    /*
        Crie variáveis com números e outras com strings;
        Faça um if checando se é um número;
        Caso for, atribua a multiplicação deste número por 2 em outra variável;
        Crie outro if, que checa se o número é maior que 100;
        Se sim, imprima uma mensagem.
    */

    $num1 = 70;
    $num2 = 50;
    $str = "José";

    if (is_int($str)) {

        $res = $str * 2;

        if ($res > 100) {
            echo "O número multiplicado é maior que 100! <br>";
        } else {
            echo "O número multiplicado não é maior que 100! <br>";
        }

    } else {
        echo "Não é um número <br>";
    }

    if (is_int($num1)) {

        $res = $num1 * 2;

        if ($res > 100) {
            echo "O número multiplicado é maior que 100! <br>";
        } else {
            echo "O número multiplicado não é maior que 100! <br>";
        }

    } else {
        echo "Não é um número <br>";
    }

    if (is_int($num2)) {

        $res = $num2 * 2;

        if ($res > 100) {
            echo "O número multiplicado é maior que 100! <br>";
        } else {
            echo "O número multiplicado não é maior que 100! <br>";
        }

    } else {
        echo "Não é um número <br>";
    }

?>