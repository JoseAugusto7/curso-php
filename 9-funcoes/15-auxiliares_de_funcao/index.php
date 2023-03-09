<?php

    function soma($a, $b, $c) {

        print_r (func_get_arg(2)); // Esta função era pra pegar o número de parâmetros da função, porém na minha versão 8.2 ela precisa de um parâmetro para pegar um certo parâmetro da função.

        echo "<br>";

        echo func_num_args();

        return $a + $b + $c;

    }

    soma(2, 4, 4);

?>