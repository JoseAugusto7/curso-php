<?php

    class Humano {

        function falar() {}

    }

    $jose = new Humano;

    $numero = 10;

    if (is_object($jose)) {
        echo "É um objeto <br>";
    } else {
        echo "Não é um objeto <br>";
    }

    if (is_object($numero)) {
        echo "É um objeto <br>";
    } else {
        echo "Não é um objeto <br>";
    }

    if (method_exists($jose, "falar")) {
        echo "O método existe <br>";
    } else {
        echo "O método não existe  <br>";
    }

    if (method_exists($jose, "andar")) {
        echo "O método existe <br>";
    } else {
        echo "O método não existe  <br>";
    }

    echo get_class($jose) . "<br>";

?>