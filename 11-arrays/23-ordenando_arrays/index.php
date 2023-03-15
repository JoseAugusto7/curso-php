<?php

    $arr = [1, 10, 5, 88, 70, 96, 170];
    $nomes = ["Augusto", "Bruna", "Natasha", "Daniel", "Pedro"];


    sort($arr);
    print_r($arr);
    echo "<br>";

    rsort($arr);
    print_r($arr);
    echo "<br>";

    sort($nomes);
    print_r($nomes);
    echo "<br>";

    rsort($nomes);
    print_r($nomes);

    // Note que "sort" coloca os números de maneira crescente e as letras na ordem alfabética começando no A.
    // Já o "rsorte" faz o mesmo porém de maneira contrária.

?>