<?php

    $nome = "Joaquim"; // Variável
    $$nome = "Joaquim Pereira dos Santos"; // Criando outra variável do conteúdo da variável nome.

    echo $nome;
    echo "<br>";
    echo $$nome;  // Posso me referir a variável do conteúdo da $nome dessas duas formas.
    echo "<br>";
    echo $Joaquim; // Posso me referir a variável do conteúdo da $nome dessas duas formas.

?>