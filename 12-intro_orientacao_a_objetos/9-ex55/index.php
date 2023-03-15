<?php

    /*
        Crie uma classe Carro;
        Crie algumas propriedades e também a propriedade velocidade_maxima;
        Crie o método setVelocidadeMaxima, onde é possível alterar a velocidade máxima do carro;
        Crie o método getVelocidadeMaxima onde é possível imprimir a velocidade máxima do carro.
    */

    class Carro {

        public $cor;
        public $modelo;
        public $placa;
        public $velocidadeMaxima;

        function setVelocidadeMaxima($v) {
            $this->velocidadeMaxima = $v;
        }

        function getVelocidadeMaxima() {
            echo "A velocidade deste carro é: $this->velocidadeMaxima Km/H <br>";
        }

    }

    $corolla = new Carro;

    $corolla->setVelocidadeMaxima(100);

    echo $corolla->getVelocidadeMaxima();

?>