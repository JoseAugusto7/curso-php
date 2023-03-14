<?php


    // Ao adicionar um valor sem especificar onde a um array já criado, ele automaticamente adicionará o valor ao final, se não tiver nenhum valor, ele será o único.

    $arr = [1, 2, 3];
    $arr2 = [];

    $arr[] = 5;
    $arr2[] = 3;

    print_r($arr);
    echo "<br>";
    print_r($arr2);

?>