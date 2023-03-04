<?php

    // Imprima textos com aspas duplas e também com aspas simples.

    echo "Texto com aspas duplas <br>";
    echo 'Texto com aspas simples <br>';

    $d = "Texto com aspas duplas";
    $s = 'Texto com aspas simples';

    if (is_string($d)) {
        echo "$d é uma string! <br>";
    }

    echo "$s não é usado em variáveis"

?>