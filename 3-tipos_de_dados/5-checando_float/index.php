<?php

    $a = "Não é float";
    $b = 5.63;

    if (is_float($a)) {
        echo "É float <br>";
    }

    if (is_float($b)) {
        echo "É float 2!<br>";
    }

    if (is_float(5.954)) {
        echo"É float 3!<br>";
    }

?>