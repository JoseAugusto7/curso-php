<?php

    $arr = [
        "marca" => "BMW",
        "motor" => "3.0",
        "cor" => "Preto",
        "Portas" => 4
    ];

    $chaves = array_keys($arr);
    $valores = array_values($arr);

    print_r($chaves);
    echo "<br>";
    print_r($valores);

    // Como o exemplo mostra, a função array_keys entrega as chaves do array associativo, já a array_values entrega os valores do mesmo.

?>