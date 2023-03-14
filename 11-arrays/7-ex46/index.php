<?php

    /*
        Crie um array multidimensional com 3 arrays com 4 elementos cada;
        Imprima todos os elementos de cada um dos arrays;
        Imprima também quando estiver trocando de array.
    */

    $arr = [
        [2, 4, 8, 16],
        [1 , 2, 4, 8],
        [5, 10, 20, 40]
    ];

    function mostrarArray() {

        global $arr;

        $y = 0;

        for ($x = 0; $x < 4; $x ++) {
            
            if ($y == 0 & $x == 0) {
                echo "Este é o primeiro array <br>";
            }

            echo $arr[$y][$x];
            echo "<br>";

        }

        $y ++;

        for ($x = 0; $x < 4; $x ++) {

            if ($y == 1 & $x == 0) {
                echo "Este é o segundo array <br>";
            }

            echo $arr[$y][$x];
            echo "<br>";

        }

        $y ++;

        for ($x = 0; $x < 4; $x ++) {

            if ($y == 2 & $x == 0) {
                echo "Este é o terceiro array <br>";
            }

            echo $arr[$y][$x];
            echo "<br>";

        }

    }

    mostrarArray();


?>