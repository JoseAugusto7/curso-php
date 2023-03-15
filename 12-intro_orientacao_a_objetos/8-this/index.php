<?php

    class Animal {

        public $nome;

        function escolherNome($nome) {
            $this->nome = $nome;
        }

        function latir() {
            return "au au <br>";
        }

        function latirForte() {
            return strtoupper($this->latir());
        }

    }

    $boby = new Animal;

    echo "O nome do animal é: $boby->nome <br>";
    $boby -> escolherNome("boby");
    echo "O nome do animal é: $boby->nome <br>";

    echo $boby->latir();
    echo $boby->latirForte();

    // O "this" serve tanto para declarar uma propriedade quanto para usar uma função dentro de outra.

?>