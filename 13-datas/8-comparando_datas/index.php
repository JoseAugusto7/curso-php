<?php

    $dataA = new DateTime();
    $dataB = new DateTime();

    $dataB->setDate(2025, 7, 7);

    if ($dataA < $dataB) {
        echo "A data A é menor que a data B <br>";
    }

    if ($dataB > $dataA) {
        echo "A data B é maior que a data A <br>"; 
    }

    // Comparamos as datas de uma forma bem simples utilizando os operadores de comparação.

?>