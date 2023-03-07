<?php

    /* 
        Converta os seguintes dados para int com o operador de cast:
        "testando"; 12.9; true; [1, 2, 3]. Depois veja os resultados.
    */

    $a = (int) "testando";
    $b = (int) 12.9;
    $c = (int) true;
    $d = (int) [1, 2, 3];

    echo gettype($a);
    echo "<br>";
    echo gettype($b);
    echo "<br>";
    echo gettype($c);
    echo "<br>";
    echo gettype($d);
    echo "<br>";

?>