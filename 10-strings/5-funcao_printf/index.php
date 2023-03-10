<?php

    $nome = "José";

    // %s para strings

    printf("O nome dele é %s", $nome);

    echo "<br>";

    // %d para int

    $n = 10;

    printf("O primeiro número é %d e o segundo é %d", $n, 150);

    echo "<br>";

    // %f para float, podemos também limitar o número de casas após a vírgula acrescentando um ponto e o número de casas antes do f

    $temperatura = 17.57;

    printf("A temperatura é %.1f °C", $temperatura); // Veja que ele arredonda para 17,6 porque coloquei para ter apenas 1 casa depois da  vírgula.

    echo "<br>";

?>