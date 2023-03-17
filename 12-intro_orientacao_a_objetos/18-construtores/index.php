<?php

    class Car {

        public $marca;
        public $modelo;
        public $cor;

        function __construct($marca, $modelo, $cor) {

            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->cor = $cor;

        }

    }

    $toyota = new Car("Toyota", "SW4", "Preta");

    echo "O carro é da marca $toyota->marca, do modelo $toyota->modelo e da cor $toyota->cor."

?>