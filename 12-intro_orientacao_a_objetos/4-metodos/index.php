<?php

    class Pessoa {

        function falar() {

            echo "Olá, eu sou um objeto! <br>";

        }

        function somar($x, $y) {

            echo $x + $y . "<br>";

        }

    }

    $jose = new Pessoa;
    $barbara = new Pessoa;

    $jose -> falar();
    $barbara -> falar();

    $jose -> somar(2, 2);
    $barbara -> somar(70, 100);

?>