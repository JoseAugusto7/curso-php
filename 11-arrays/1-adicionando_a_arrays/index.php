<?php

    // Criando arrays

    $arr = [];

    $arr[0] = 15;
    $arr[1] = 30;
    $arr[2] = 100;
    $arr[5] = 200;

    print_r($arr);
    echo "<br>";

    // Modificando arrays

    $arr[0] += 15;
    $arr[5] += 200;

    print_r($arr);
    echo "<br>";

    // Arrays associativos

    $arrAss = ["Carro" => "BMW", "Avião" => "Azul"];

    print_r($arrAss);
    echo "<br>";

    // Modificando arrays associativos

    $arrAss["Carro"] = "Toyota";

    print_r($arrAss);

?>