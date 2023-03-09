<?php

    /*
        Crie uma função que recebe um array de números;
        Crie um novo array apenas com números maiores que 7;
        Retorne esse novo array na tela;
    */

    $arr = [];

    for ($i = 0; $i <= 30; $i ++) {

        array_push($arr, $i);

    }

    function numeros($array) {

        $arrayRetorno = [];

        for ($j = 0; $j < count($array); $j ++) {

            if ($array[$j] > 7) {

                array_push($arrayRetorno, $array[$j]);

            }

        }

        return $arrayRetorno;

    }

    $novoArray = numeros($arr);

    print_r($novoArray);

?>