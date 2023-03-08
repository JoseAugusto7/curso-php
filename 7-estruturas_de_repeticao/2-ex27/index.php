<?php

    /*
        Crie um array com alguns valores (pelo menos 10) de tipos de dados diferentes;
        Faça um loop while para exibir apenas os dados que são strings.
    */

    $arr = ["José", 2, 70, "Olá", true, false, [], 80, "tchau", 95.7, 42];

    $x = count($arr); // A função count serve para contar quantos itens o array tem.
    $y = 0;

    while ($y < $x) {

        if (is_string($arr[$y])) {
            echo $arr[$y] . "<br>";
        }

        $y ++;

    }

?>