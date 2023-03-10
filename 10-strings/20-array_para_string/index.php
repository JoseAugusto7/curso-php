<?php

    $frutas = ["Maçã", "Pera", "Limão", "Melância"];

    $arrayStr = implode(", ", $frutas); // É a mesma ideia do explode, porém o primeiro argumento é para saber como vai ser a separação dos itens para uma string.

    echo "$arrayStr <br>";

    $armas = ["Pistola", "Fuzil", "Metralhadora", "Escopeta"];

    $arrayStr2 = implode("<->", $armas);

    echo $arrayStr2;


?>