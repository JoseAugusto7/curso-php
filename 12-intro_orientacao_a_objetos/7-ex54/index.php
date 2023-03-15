<?php

    /*
        Crie uma classe pessoa;
        Crie a propriedade nome e idade;
        E também um método andar.
    */

    class Pessoa {

        public $nome = "José";
        public $idade = 23;

        function andar($x) {
            echo "A pessoa andou $x metros... <br>";
        }

    }

    $jose = new Pessoa;

    echo $jose -> andar(10);



?>