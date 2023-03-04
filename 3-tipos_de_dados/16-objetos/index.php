<?php

    class Pessoa {


        function falar() {
            echo "Olá pessoal!";
        }
    }

    $jose = new Pessoa();

    $jose->nome = "José";

    echo $jose->nome;

    echo "<br>";

    $jose->falar();

?>