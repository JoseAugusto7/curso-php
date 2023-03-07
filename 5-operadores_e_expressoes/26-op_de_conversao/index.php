<?php

    $a = (int) "12"; // Transformamos uma string em um inteiro e um inteiro em uma string.
    $b = (string) 12;

    echo $a . "<br>";
    echo $b . "<br>";

    echo gettype($a);
    echo "<br>";
    echo gettype($b);
    echo "<br>";

    if ($a === 12 && $b === "12") {
        echo "A conversão foi feita com sucesso.";
    }

?>