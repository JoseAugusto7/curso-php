<?php

    /*
        Crie um array com números de 1 a 20;
        Crie um loop for para este array;
        Imprima apenas os pares;
    */

    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
    $contagem = count($arr);


    for ($a = 0; $a <= $contagem; $a++) {

        if ($a % 2 != 1) {

            echo "Número $a! <br>";

        }

    }

?>