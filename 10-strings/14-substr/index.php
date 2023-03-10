<?php

    $str1 = "Testando esta string";
    $str2 = "Testando esta string";
    $str3 = "Testando esta string";

    echo $str1;

    echo "<br>";

    echo substr($str1, 9, 4); // Pegando apenas a palavra "esta"

    echo "<br>";

    echo substr($str2, 9); // Quando omite o terceiro valor ele pega do segundo valor em diante.

    echo "<br>";

    echo substr($str3, 9, -2); // Quando colocar o terceiro valor negativo ele pega até o final menos dois.


?>