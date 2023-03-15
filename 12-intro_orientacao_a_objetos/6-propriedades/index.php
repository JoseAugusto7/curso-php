<?php

    class Car {

        public $rodas = 4;
        public $aro = 20;
        public $cor = "Preto";

    }

    $mobi = new Car;

    echo $mobi -> rodas . "<br>";
    echo $mobi -> aro . "<br>";

    $mobi -> cor = "Azul";
    echo $mobi -> cor . "<br>";

    // Propriedades públicas podem ser modificadas fora do escopo do objeto como pode perceber em $cor.

?>