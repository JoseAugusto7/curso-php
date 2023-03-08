<?php

    /* 
        Crie um array com valores inteiros de 10 a 100 com incremento de 10;
        Aplique um loop neste array;
        Quando entrarem os valores 30 ou 40, pule para a próxima execução.
    */

    $arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

    $a = count($arr) * 10;
    $b = 0;

    while ($b <= $a) {

        if ($b == 30 || $b == 40) {
            echo "Pulou <br>";
            $b += 10;
            continue;
        } 

        echo "$b <br>";

        $b += 10;
    }

?>