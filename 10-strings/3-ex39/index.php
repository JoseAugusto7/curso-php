<?php

    /*
        Crie uma função que recebe características de algum objeto como argumento 
        (carro, sofá, cafeteira), em um array associativo;
        O array deve conter nome => preço;
        Retorne apenas os itens que custam mais de 10R$;
        Imprima o retorno;
    */

    $cozinha = [
        'Faca' => 5 ,
        'Garfo' => 3 ,
        'Peixeira' => 15 ,
        'Concha' => 15 
    ];

    function preco($arr) {

        $itensCaros = [];

        foreach ($arr as $item => $preco) {

            if ($preco > 10) {

                array_push($itensCaros, $item);

            }

        }

        return $itensCaros;

    }

    $caros = preco($cozinha);

    print_r($caros);

?>