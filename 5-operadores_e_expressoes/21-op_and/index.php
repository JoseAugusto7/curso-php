<?php

    // O operador && só vai retornar true se todas as informações forem verdadeiras.

    if (50 < 10 && 100 > 50) { // false true
        echo "Verdadeiro! <br>";
    }

    if (50 > 10 && 100 > 50) { //true true
        echo "É verdadeiro! <br>";
    }

    $a = 50;
    $b = 70;
    $c = 100;

    if ($a >= $b && $b > $c) {
        echo "É verdadeiro! <br>";
    }

    if ($b >= $a && $a < $c) {
        echo "É verdadeiro! <br>";
    }

    if ($b >= $a && $a < $c && $c < 50) { //true true false
        echo "É verdadeiro! <br>";
    }

    if (($b >= $a && $a < $c && $c > 50) && $a < $b) { // true em todas
        echo "É verdadeiro! <br>";
    }

?>