<?php

    $a = 10;

    while ($a >= 0) {

        if ($a == 5 || $a == 7) {
            echo "Pulou o loop $a <br>";
            $a --;
            continue;
        }

        if ($a == 2) {
            echo "Parou no $a <br>";
            break;
        }

        echo "Loop $a <br>";

        $a --;
    }

?>