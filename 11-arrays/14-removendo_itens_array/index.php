<?php

    $arr = [1, 2, 3, 4, 5];

    $removidos = array_splice($arr, 1, 3); // Aqui estou dizendo pra remover do índice 1, 3 numeros, isso conta também com o índice 1 no caso o número 2.

    print_r($arr);
    echo "<br>";
    print_r($removidos);
    echo "<br>";

    $arr2 = [1, 2, 3, 4, 5];
    $removidos2 = array_splice($arr2, 2); // Aqui ele vai remover no item 3 em diante porque não coloquei um fim.

    print_r($arr2);
    echo "<br>";
    print_r($removidos2);
    echo "<br>";

    $arr3 = [1, 2, 3, 4, 5];
    $removidos3 = array_splice($arr3, 1, -1); // Neste caso ele vai remover do item 1 em diante e deixar o último número.

    print_r($arr3);
    echo "<br>";
    print_r($removidos3);

?>