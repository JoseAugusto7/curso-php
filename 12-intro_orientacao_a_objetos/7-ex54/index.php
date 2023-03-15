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

    $jose -> nome = "José";
    $jose -> idade = 23;

    echo "O nome dele é $jose->nome e tem $jose->idade anos. <br>";

    echo $jose -> andar(10);



?>