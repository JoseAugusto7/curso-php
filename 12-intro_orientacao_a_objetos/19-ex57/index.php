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
        public $nome;

        function __construct($patas, $raca, $cor, $porte, $nome) {

            $this->patas = $patas;
            $this->raca = $raca;
            $this->cor = $cor;
            $this->porte = $porte;
            $this->nome = $nome;

        }

        public function caract() {

            echo "O nome do cachorro é $this->nome, ele tem $this->patas patas, é da raça $this->raca, tem a pelagem $this->cor e é $this->porte.";

        }

    }

    $boby = new Cachorro(4, "Husk", "branca", "grande", "Boby");

    $boby->caract();

?>