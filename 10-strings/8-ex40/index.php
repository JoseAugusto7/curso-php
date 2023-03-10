<?php

    /*
        Percorra a string: o rato roeu a roupa do rei de Roma, a partir de um loop;
        Imprima o número de letras "a" desta string.
    */

    $roer = "O rato roeu a roupa do rei de Roma";

    $b = 0;

    for ($a = 0; $a < strlen($roer); $a ++) {

        if ($roer[$a] === "a") {
            
            global $b;
            $b ++;

        }

    }

    echo $b;

?>