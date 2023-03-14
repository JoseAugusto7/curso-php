<?php

    // A função "array_chunk" é usada para dividir um array em alguns arrays iguais.
    // O primeiro argumento é o array que deseja dividir, a segunda é quantos itens cada array vai ter depois de dividir.

    $arr = range(0, 10);

    print_r($arr);

    echo "<br>";

    print_r(array_chunk($arr, 2));
    echo "<br>";

    $arr2 = range(1, 20);

    $arrays = array_chunk($arr2, 10);

    print_r($arrays);
    echo "<br>";

    print_r($arrays[1]);

?>