<?php

    $doisDias = strtotime("2 days");
    $quatroMeses = strtotime("4 months");
    $oitoAnos = strtotime("8 years");

    echo $doisDias . "<br>";
    echo $quatroMeses . "<br>";
    echo $oitoAnos . "<br>";

    $dataAtual = date("d/m/y");

    echo $dataAtual . "<br>";

    $dataAtual2 = date("d/m/y", strtotime("5 days"));

    echo $dataAtual2 . "<br>";

    $dataAtual3 = date("d/m/y", $doisDias);

    echo $dataAtual3 . "<br>";

    $dataAtual4 = date("d/m/y", $quatroMeses);

    echo $dataAtual4 . "<br>";

    $dataAtual5 = date("d/m/y", $oitoAnos);

    echo $dataAtual5 . "<br>";

    

?>