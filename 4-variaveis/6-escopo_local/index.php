<?php

    $a = 10;

    echo "$a Global <br>";

    function teste () {
        $a = 15;
        echo "$a Local <br>";
    }

    teste();

    echo "$a Global <br>";
    teste();

    function testando() {
        $a = 20;
        echo "$a Local <br>";
    }

    $a = 100;

    echo "$a Global <br>";
    teste();
    testando();

?>