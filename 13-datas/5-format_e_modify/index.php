<?php

    $date = new DateTime;

    echo $date->format("d/m/y") . "<br>";

    echo $date->format("D - M / y") . "<br>";

    $date->modify(" +5 days");

    echo $date->format("d - m / y");

    // O format serve para mostrar a data do objeto, sem o format não tem como mostrar o objeto da classe DateTime;
    // O modify serve para modificar a data da ta atual

?>