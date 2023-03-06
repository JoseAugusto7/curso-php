<?php

    echo "Testando a concatenação";
    echo "<br>";
    echo "Testando" . " a " . "concatenação" . "<br>";

    $a = "Testando";
    $b = "concatenação";

    $c = $a . " a " . $b;
    echo $c . "<br>";

    $marca = "toyota";
    $modelo = "SUV";
    $velocidade = 200;

    echo "O carro da " . $marca . " do modelo " . $modelo . " chega a uma velocidade máxima de " . $velocidade . " km/h.";
    echo "<br>";
    // Poderia fazer sem concatenização, porém para o exemplo fiz com.

    // Sem concatenização
    echo "O carro da $marca do modelo $modelo chega a uma velocidade máxima de $velocidade km/h.";

?>