<?php

    /*
        Crie uma classe Cachorro;
        Crie o método latir e andar;
        Execute o método em novas instâncias da classe.
    */

    class Cachorro {

        function latir() {
            echo "AU AU! <br>";
        }

        function andar() {
            echo "O cachorro andou 1m... <br>";
        }

    }

    $caramelo = new Cachorro;
    $husk = new Cachorro;

    $caramelo -> latir();
    $husk -> andar();


?>