<?php

    /*
        Crie um loop que vai até o número 30;
        O contador deve iniciar com o 4;
        Faça incrementos de 2 em 2 no contador;
        Utilize o break para parar o loop no número 24;
    */

    $a = 30;
    $b = 4;

    while ($a >= $b) {
        echo $b . "<br>";

        if ($b == 24) {
            echo "Finalizando loop! <br>";
            break;
        }

        $b += 2;
    }

?>