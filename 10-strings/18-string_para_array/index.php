<?php

    $str = "Testando o explode";

    $strArray = explode(" ", $str);

    print_r($strArray);

    echo "<br>";

    // A primeira condição é como ele vai saber a separação dos itens, nesse caso coloquei um espaço. Se eu colocasse vírgula seria um array de um item só porque esse string não tem vírgula, olhe o exemplo abaixo.

    $str2 = "Teste, Avião, Carro, Moto";

    $strArray2 = explode(",", $str2);

    print_r($strArray2);
     // Neste caso coloquei vírgula.

?>