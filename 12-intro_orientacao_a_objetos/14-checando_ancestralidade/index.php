<?php

    class Humano {

    }

    class Animal {

    }

    class Professor extends Humano {

    }

    $pedro = new Humano;
    $boby = new Animal;
    $sarah = new Professor;

    if ($pedro instanceof Humano) {
        echo "Pedro é um humano <br>";
    } else {
        echo "Pedro não é um humano <br>";
    }

    if( $boby instanceof Humano) {
        echo "Boby é um humano <br>";
    } else {
        echo "Boby não é um humano <br>";
    }

    if ($sarah instanceof Professor) {
        echo "Sarah é uma professora <br>";
    } else {
        echo "Sarah não é uma professora <br>";
    }

    if ($sarah instanceof Humano) {
        echo "Sarah é um humano <br>";
    } else {
        echo "Sarah não é um humano <br>";
    }

    // Perceba que a classe professsora herdando a herança de humano ela também é vista como um humano.

?>