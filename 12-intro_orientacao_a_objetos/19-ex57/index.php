<?php

    /*
        Crie uma classe Cachorro com propriedades;
        Inicie as propriedades via construtor;
        Crie um método para exibir cada uma das propriedades que você criou.
    */

    class Cachorro {

        public $patas;
        public $raca;
        public $cor;
        public $porte;

        function __construct($patas, $raca, $cor, $porte) {

            $this->patas = $patas;
            $this->raca = $raca;
            $this->cor = $cor;
            $this->porte = $porte;

        }

        function caract() {

            print_r($this);

        }

    }

    $boby = new Cachorro(4, "Husk", "branca", "grande");

    $boby->caract();

?>