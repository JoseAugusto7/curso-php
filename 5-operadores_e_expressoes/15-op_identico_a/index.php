<?php

    if (4 === "4") { // Não é idêntico
        echo "Não é igual <br>";
    }

    if (4 === 4) { // É idêntico
        echo "É igual <br>";
    }

    $a = 4;
    $b = 4;
    $c = "4";

    if ($a === $b) {
        echo "É igual <br>";
    }

    if ($a === $c) {
        echo "Não é igual <br>";
    }

?>