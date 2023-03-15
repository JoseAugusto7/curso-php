<?php

    $arr = [
        "cor" => "azul",
        "material" => "ferro",
        "quantidade" => 5
    ];

    extract($arr); // Veja que essa função transforma as chaves do array em variáveis, ela sobrepoe outra variável com o mesmo nome se existir.

    echo "$cor <br>";
    echo "$material <br>";
    echo "$quantidade <br>";

?>