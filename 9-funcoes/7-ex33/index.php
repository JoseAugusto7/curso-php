<?php

    /*
        Crie uma função;
        Ela deve receber um parâmetro de nome e idade;
        Imprima "Olá eu sou o NOME e tenho X anos.
    */

    $name = "Maria";
    $anos = 25;

    function pessoa($nome, $idade) {

        echo "Olá meu nome é $nome e tenho $idade anos. <br>";

    }

    pessoa($name, $anos);

?>