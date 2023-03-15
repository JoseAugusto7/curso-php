<?php

    $arr = [1, 2, 5, 8, 50, 70, 700, 45, 3, 7];

    function soma($a, $b) {
        return $a + $b;
    }

    $resultado = array_reduce($arr, "soma");

    echo $resultado;

    /*
        Aqui o que aconteceu foi que a função "soma" que criamos vai funcionar parecido com a sequência fibonacci, 
        $a vai ser o primeiro número e $b o segundo, depois $a vai ser o resultado da soma anterior e $b será o proximo número,
        por exemplo $a = 1, $b = 2; $a = 3, $b = 5; E assim por diante.
        O que a função array_reduce fez foi executar a função soma dentro do array $arr.
    */

?>