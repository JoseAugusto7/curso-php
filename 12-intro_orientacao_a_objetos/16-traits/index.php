<?php

    trait Objeto {

        function teste() {
            echo "Testando trait <br>";
        }

    }

    trait Testando {

        function testando() {
            echo "Este teste é da trait testando <br>";
        }

    }

    class Central {

        use Objeto;
        use Testando;

    }

    $jonas = new Central;

    $jonas->teste();
    $jonas->testando();

?>