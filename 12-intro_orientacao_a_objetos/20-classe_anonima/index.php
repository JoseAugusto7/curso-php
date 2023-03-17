<?php

    $pessoa = new class() {

        public $nome = "José";

        public function dizerNome() {
            echo "Meu nome é $this->nome <br>";
        }

    };

    echo $pessoa->nome . "<br>";

    $pessoa->dizerNome();

?>