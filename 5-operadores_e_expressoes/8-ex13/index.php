<?php

    // Teste o operador de resto (modulo - %) em duas divisões, uma exata e uma não exata.

    $a = 10;
    $b = 20;
    $c = 15;

    $exata = $b % $a; // O resto de 20 dividido por 10 é 0 porque 20 / 10 é 2.
    echo $exata . "<br>";

    $nExata = $b % $c; // O resto de 20 / 15 é 5 porque 20 / 15 é 1 e sobra 5.
    echo $nExata . "<br>";

?>