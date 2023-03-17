<?php

    /*
        Crie uma classe Humano com algumas propriedades e o método falar();
        Crie outra classe Professor que herda de humano, crie também as propriedades e métodos particulares dessa classe;
        Exiba os valores das propriedades da classe pai e também utilize os métodos.
    */

    class Humano {

        public $olhos = 2;
        public $orelhas = 2;
        public $bracos = 2;

        function falar() {

            echo "Olá eu sou um ser humano,";

        }

    }

    class Professor extends Humano {

        public $tarefa = "Ensinar";
        public $caract = "Paciência";

        function darAula() {

            echo " ensinando outros humanos.";

        }

    }

    $sophia = new Professor;

    echo $sophia->olhos . "<br>";
    echo $sophia->orelhas . "<br>";
    echo $sophia->bracos . "<br>";
    echo $sophia->tarefa . "<br>";
    echo $sophia->caract . "<br>";


    $sophia->falar();
    $sophia->darAula();

?>