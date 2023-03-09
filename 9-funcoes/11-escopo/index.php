<?php

    $a = 10;

    function escopo() {

        $a = 5;

        echo "A é igual a $a no escopo local. <br>";

        static $b = 15;

        $b ++;

        echo "O escopo static B é igual a $b <br>";

    }

    echo "A é igual a $a no escopo global. <br>";

    escopo();

    escopo();

    escopo();

?>