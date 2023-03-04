<?php

    /* Crie um array associativo com características de um carro;
        Imprima duas dessas características. */

        $carro = [
            'cor' => 'prata',
            'portas' => 4, 
            'modelo' => 'SUV', 
            'marca' => 'toyota'
        ];
        
        print_r($carro);
        echo "<br>";

        echo $carro['modelo'];
        echo "<br>";
        echo $carro['cor'];

?>