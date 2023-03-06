<?php

    // Teste a expressão "5" * 12.
    // Utilize a função gettype() com o resultado como parâmetro para checar o tipo resultante da operação.

    $a = "5";
    $b = 12;
    $c = $a * $b;

    echo gettype($c); // Note que uma string multiplicada por um inteiro se transformou em um inteiro.
    echo "<br>";

    if (is_int($c)) {
        echo "É um inteiro <br>";
    }

?>