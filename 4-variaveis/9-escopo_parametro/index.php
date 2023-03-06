<?php

    function soma($a, $b) { // Este é um escopo de parametros, note que as variáveis são declaradas quando a função é chamada.
        echo $a + $b;
        echo "<br>";
    }

    soma(4, 7);
    soma(10, 15);
    soma(30, 70);

?>