<?php

    interface Caracteristicas {

        const nome = "José";

        function falar();

    }

    class Humano implements Caracteristicas {

        function falar() {
            echo "Meu nome é " . self::nome . "<br>";
        }

    }

    $jose = new Humano;

    $jose -> falar();

?>