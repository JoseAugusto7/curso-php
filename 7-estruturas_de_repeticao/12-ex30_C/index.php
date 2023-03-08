<?php

    /*
        Crie um array de 10 a 20 com for;
        Faça um loop em cima do array criado dinamicamente;
        Imprima somente os números ímpares.
    */

    $arr = [];

    for ($a = 10; $a <= 20; $a ++) {

        array_push($arr, $a);

    }

    for ($b = 10; $b < $arr[10]; $b++) {

        if ($b % 2 == 1) {
            echo "$b <br>";
        }

    }


?>