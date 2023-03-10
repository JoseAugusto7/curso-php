<?php

    /*
        Na frase: "Cade o meu queijo? Ele estava aqui em cima";
        Resgate apenas a palavra "queijo".
    */

    $frase = "Cade o meu queijo? Ele estava aqui em cima";

    $queijo = substr($frase, 11, 6);
    $estava = substr($frase, 23, 6);

    echo $queijo . " " . $estava;

?>