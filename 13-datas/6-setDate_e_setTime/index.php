<?php

    $date = new DateTime;

    print_r($date);
    echo "<br>";

    $date->setDate(1999, 12, 25);

    print_r($date);
    echo "<br>";

    $date->setTime(22, 30, 15);

    print_r($date);
    echo "<br>";

    // Podemos basicamente criar outra data para o objeto, podemos também usar o format e o modify também depois de alter a data.

?>