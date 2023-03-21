<?php

    $dataA = new DateTime();
    $dataB = new DateTime();

    $dataB->setDate(2000, 03, 21);

    print_r($dataA);
    echo "<br>";
    print_r($dataB);
    echo "<br>";

    $diferenca = $dataA->diff($dataB);

    print_r($diferenca);
    echo "<br>";

    echo $diferenca->format("%a days");

    // Com o método diff nós comparamos as datas de A e B, usamos o format para mostrar em dias como pode observar.


?>