<?php

    // Este método é basicamente igual ao outro, porém ele pega a última ocorrência que procuramos.

    $teste = "Estamos procurando a palavra teste dentro da variável teste";

    $primeira = strpos($teste, "teste");
    $ultima = strrpos($teste, "teste");

    echo $primeira;
    echo "<br>";
    echo $ultima;

    // Perceba que com o método da primera ocorrência pega o primeiro "teste" e com o ultimo pega o último "teste".

?>