<?php

    /*
        Crie um array com a função range de 10 a 45;
        Imprima todos os números com uma soma de 6;
        Se passar de 30 a soma imprima também que o número é muito alto.
    */

    $arr = range(10, 45);

    for ($s = 0; $s < count($arr); $s ++) {

        if ($arr[$s] + 6 <= 30) {
            echo $arr[$s] + 6 . "<br>";
        } else {
            echo $arr[$s] + 6 . " O número é muito alto <br>";
        }

    }

?>