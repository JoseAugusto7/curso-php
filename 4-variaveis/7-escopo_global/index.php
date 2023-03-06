<?php

    /* Aqui podemos ver que uma variável global pode ser alterada e usada dentro de um bloco,
    porém não podemos dizer o mesmo dentro de uma função, somente se pegarmos a variável global,
    neste caso antes da variável deve conter a tag "global" para coloca-lá dentro da função,
    a partir dai podemos altera-lá que ela também sera alterada no global. */

    $teste = 15;

    echo $teste;
    echo "<br>";

    if (5 > 2) {
        $teste = 20;
        echo $teste;
        echo "<br>";
    }

    function teste() {
        global $teste;
        echo $teste;
        echo "<br>";
    }

    teste();

    function testando() {
        global $teste;
        $teste = 100;
        echo $teste;
        echo "<br>";
    }

    testando();

    echo $teste;

?>