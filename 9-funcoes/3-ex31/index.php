<?php

    /*
        Crie um array com strings;
        Utilize a função implode no array;
        Primeiro argumento: ",";
        Segundo argumento: o seu array;
        Atribua a invocação da função a uma variável;
        Exiba o resultado;
    */

    $arr = ["José", "Estudar", "Melhorar", "Aprender", "Água"];

    $funcao = implode(", ", $arr); // Esta "implode()" função transforma um array em uma string só.

    echo $funcao;



?>