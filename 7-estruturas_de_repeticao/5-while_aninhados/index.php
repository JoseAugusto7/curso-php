<?php

    $a = 0;

    while ($a <= 10) {

        echo "Loop externo $a! <br>";

        $j = 0;

        while ($j < 5) {

            echo "Loop interno $j! <br>";

            $j ++;
        }

        $a ++;
        
    }

?>