<?php

    $arr = [
        "Maria" => 18,
        "José" => 23,
        "João" => 35,
        "Rafaela" => 25
    ];

    asort($arr); // Para ordenar de forma crescente pelos valores.
    print_r($arr);
    echo "<br>";

    arsort($arr); // Para ordenar de forma decrescente pelos valores.
    print_r($arr);
    echo "<br>";

    ksort($arr); // Para ordenar de forma crescente pelas chaves.
    print_r($arr);
    echo "<br>";

    krsort($arr); // Para ordenar de forma decrescente pelas chaves.
    print_r($arr);
    echo "<br>";

?>