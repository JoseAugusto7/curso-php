<?php

    $a = 10;
    $b =& $a;

    echo $a;
    echo "<br>";
    echo $b;
    echo "<br>";

    $b = 15;

    echo 'Mudando valor de $b';
    echo "<br>";
    echo $a;
    echo "<br>";
    echo $b;
    echo "<br>";
    
    $a = 20;

    echo 'Mudando o valor de $a';
    echo "<br>";
    echo $a;
    echo "<br>";
    echo $b;
    echo "<br>";

?>