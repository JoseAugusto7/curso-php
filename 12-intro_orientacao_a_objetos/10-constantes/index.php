<?php

    class Humano {

        public const OLHOS = 2;
        public const BRACOS = 2;
        public const PERNAS = 2;

        function mostrarConstante() {

            echo self::BRACOS . "<br>";

        }

    }

    $jose = new Humano;

    echo $jose::OLHOS . "<br>";

    $jose->mostrarConstante();

    // As constantes como pode notar são definidas de maneira diferente das variáveis, em vez de usar o sinal $ e o nome da variável, nas constantes usamos const e logo depois o nome da constante em maiúsculo. Para chamar uma constante usamos "::" dois sinais de dois pontos juntos, para usarmos constantes em métodos usamos também o "self" em vez do "$this" das variáveis.

?>