<?php

    $jose = [
        "Nome" => "José",
        "Idade" => 23,
        "Profissão" => "Programador"
    ];

    $ana = [
        "Nome" => "Ana",
        "Idade" => 20,
        "Profissão" => "Arquiteta"
    ];

    foreach ($jose as $carac => $value) {
        echo "$carac => $value <br>";
    }

    foreach ($ana as $carac => $value) {
        echo "$carac => $value <br>";
    }

?>