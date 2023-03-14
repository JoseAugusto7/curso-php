<?php

    /*
        Crie um array com os valores: batata, maçã, pêra, feijão e arroz;
        Remova pêra e feijão.
    */

    $compras = ["batata", "maçã", "pêra", "feijão", "arroz"];

    $comprados = array_splice($compras, 2, 2);

    print_r($compras);

    echo "<br>";

    // print_r($comprados);

?>