<?php

    function teste() { // Aqui temos um escopo local, como vimos anteriormente, a variável é resetada fora da função.
        $a = 0;
        $a++;
        echo "$a <br>";
    }

    teste();
    teste();
    teste();

    function testeStatic() { /* Aqui temos um escopo static, com a tag "static" antes de criar a variável, definimos a mesma 
        com um escopo static, o que significa que ela será alterada fora do escopo local. */
        static $a = 0;
        $a++;
        echo "$a <br>";
    }

    testeStatic();
    testeStatic();
    testeStatic();

?>