<?php

    if (is_int(5)) { // true
        echo "É um inteiro <br>";
    }

    if (is_int("Não é um inteiro")) { //false
        echo "É um inteiro 2 <br>";
    }

    $i = 50;

    if (is_int($i)) { //true
        echo "É um inteiro 3 <br>";
    } else {
        echo "Não é um inteiro <br>"; //false
    }
?>