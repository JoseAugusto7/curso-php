<?php

    // Criando um array automaticamente usando a função "range", essa função tem 3 argumentos, sendo o primeiro o valor inicial do array, o segundo o valor final e o terceiro argumento é de quanto em quanto adicionar até chegar o número final, se nao for preenchida ele vai de 1 em 1.

    $arr = range(0, 10); // Aqui ele vai adicionar de 0 a 10 no array de 1 em 1 porque eu não preenchi o terceiro argumento.
    $arr2 = range(1, 100); // Aqui será de 1 a 100 da mesma forma que o primeiro.
    $arr3 = range(0, 1000, 100); // Aqui eu ja coloquei pra adicionar de 0 a 1000 porém de 100 em 100.
    $arr4 = range(2, 20, 2);

    print_r($arr);
    echo "<br>";

    print_r($arr2);
    echo "<br>";

    print_r($arr3);
    echo "<br>";

    print_r($arr4);
    echo "<br>";

?>