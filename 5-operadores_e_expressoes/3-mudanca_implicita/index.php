<?php

    echo 5 / 2; // São dois inteiros que o resultado será um float (2.5).
    echo "<br>";

    $a = 5;
    $b = 2;
    $c = $a / $b;

    echo $a;
    echo "<br>";

    if (is_int($a)) {
        echo "É inteiro <br>";
    }

    echo $c;
    echo "<br>";

    if (is_float($c)) {
        echo "É um float <br>";
    }

    $nome = "Adão";
    $sobrenome = "Santos";

    $nomeCompleto = $nome . " " . $sobrenome;

    echo $nomeCompleto;
    echo "<br>";

    if (is_string($nomeCompleto)) {
        echo "Concatenamos com o . duas variáveis e um espaço em branco <br>";
    }

    $d = $a . $b;

    echo $d; // A variável $d é a concatenação das variáveis $a e $b, as duas são inteiras, porém com a concatenação se transformaram em duas strings implicitamente.
    echo "<br>";

    if (is_string($d)) {
        echo "Vemos que se transformaram em uma string.";
    }

?>