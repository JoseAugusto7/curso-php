<?php

    /*
     Converta a seguinte array para uma string;
     ["O", "PHP", "é", "muito", "legal"].
    */

    $arr = ["O", "PHP", "é", "muito", "legal"];

    $frase = implode(" ", $arr);

    echo $frase;

?>