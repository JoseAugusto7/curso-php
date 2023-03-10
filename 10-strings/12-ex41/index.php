<?php

    /*
        Transforme a string "este item está em promoção;
        Em "Este item esta em PROMOÇÃO";
        Obs: Você pode separar as strings mas não pode usar uppercase ou lowcase manualmente
        somente em forma das funções aprendidas.
    */

    $palavra = "promoção";

    $palavras = "este item está em ";

    $frase = ucfirst($palavras) . strtoupper($palavra);

    echo $frase;

?>