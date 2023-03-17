<?php

    class Humano {

        public $idade;
        public $altura;
        public $nome;

        function falar() {}

        function andar() {}

        function comer() {}

    }

    if (class_exists("Humano")) {
        echo "A classe existe <br>";
    } else  {
        echo "A classe não existe <br>";
    }

    if (class_exists("Animal")) {
        echo "A classe existe <br>";
    } else  {
        echo "A classe não existe <br>";
    }

    print_r(get_class_methods("Humano"));
    echo "<br>";
    print_r(get_class_vars("Humano"));

?>