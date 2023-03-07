<?php

    /* Verifique as seguinte operações com AND:
       15 > 5 AND "João" === "João
       "teste" > 5 AND 1
       2 == 3 AND 5 >= 3   
    */

    $a = "teste";
    $b = 100;

    if (15 > 5 && "João" === "João") {
        echo "É verdadeiro 1 <br>";
    }

    if ($a > $b) {
        echo "É verdadeiro 2 <br>";
    }

    if (2 == 3 && 5 >= 3) {
        echo "É verdadeiro 3 <br>";
    }

    echo gettype($a);
    echo "<br>";
    echo gettype($b);

?>