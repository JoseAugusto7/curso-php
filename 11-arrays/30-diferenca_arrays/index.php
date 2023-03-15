<?php

    $arr1 = [1, 2, 3];
    $arr2 = [2, 4, 6];

    $diff = array_diff($arr1, $arr2);

    print_r($diff);
    echo "<br>";

    $diff2 = array_diff($arr2, $arr1);
    print_r($diff2);

    // Note que o primeiro argumento é o array que será analizado primeiro, depois os outros vão tirando os números que são iguais os números do primeiro array colocado como argumento, no final ele mostra todos os itens do primeiro array colocado, que são diferentes dos demais arrays.

?>