<?php

    /*
        Crie um array de 1 a 10;
        Utilize um for para criar esse array;
        Dica: Você pode utilizar o método array_push(arr,elemento) para inserir um elemento em um array;
        Imprima o array criado com print_r;
    */

    $arr = [];

    for ($a = 1; $a <= 10; $a ++) {
        
        if ($a <= 10) {
            array_push($arr, $a);
        }

        if ($a == 10) {
            print_r($arr);
        }

    }

?>