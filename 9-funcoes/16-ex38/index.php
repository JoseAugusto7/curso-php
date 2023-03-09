<?php

    /*
        Crie uma função que recebe um array de itens de supermercado;
        Retorne esse array em forma de string, separado em vírgulas.
    */

    $arr = ["Batata", "Frango", "Chá", "Café", "Arroz"];

    function supermercado($array) {

        $arrayString = implode(", ", $array);

        return $arrayString;

    }

    echo supermercado($arr);

?>