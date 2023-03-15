<?php

    $arr1 = [1, 5, 7, 9, 10];
    $arr2 = ["Maria", "João", "Pedro", "Sarah"];
    $arr3 = [true, "Manga", true, true];
    $arr4 = [12.5, 15.7, 20.6, 70.5];

    $arrUnidos = array_merge($arr1, $arr2, $arr3, $arr4);

    print_r($arrUnidos);

    // Note que a função aceita qualquer tipo de dados dentro dos arrays e une todos em apenas um.


?>