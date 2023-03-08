<?php

    $j = 0;
    $nome = "José";


    // CONTADOR, CONDIÇÃO, INCREMENTO/DECREMENTO.
    for ($i = 0; $i <= 10; $i++) {

        if ($i == 7) {
            echo "$nome <br>";
        }

        if ($i == 8) {
            break;
        }

        echo "Testando for $i <br>";

    }

?>