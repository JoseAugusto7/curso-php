<?php

    /*
        Crie uma classe pessoa;
        Crie a propriedade nome e idade;
        E também um método andar.
    */

    class Pessoa {

        public $nome;
        public $idade;

        function andar($x) {
            echo "A pessoa andou $x metros... <br>";
        }

    }

    $jose = new Pessoa;

    echo $jose -> andar(10);



?>