<?php

    $velo = 100;

    function velocidade($vel) {

        echo "A velocidade do veículo é de $vel km/h <br>";

    }


    // Se a função foi criada com um parâmetro, ele é obrigatóriamente requerido.
    velocidade($velo);
    velocidade(200);
    velocidade(500);

    function animal($raca, $nome) {

        echo "O cachorro é da raça $raca e tem o nome de $nome <br>";

    }

    animal("Pastor Alemão", "Boby");



?>