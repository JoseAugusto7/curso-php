<?php

    /*
        Crie variáveis com características de algum objeto ou animal;
        Depois crie um array com compact com essas mesmas variáveis;
        Faça um loop no array e imprima os valores.
    */

    $cor = "Branco";
    $patas = 4;
    $estilo = "Felino";
    $sexo = "Fêmea";

    $gato = compact("cor", "patas", "estilo", "sexo");

    foreach ($gato as $caract) {

        echo "$caract <br>";

    }

?>