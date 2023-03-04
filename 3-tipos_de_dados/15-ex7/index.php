<?php

    /* Crie um array associativo com características de uma pessoa;
        Faça um if checando se ela é maior de idade e imprima uma mensagem, caso seja. */

    $pessoa = [
        'nome' => 'Maria',
        'altura' => 1.70,
        'idade' => 25,
        'cabelo' => 'comprido'
    ];
    print_r($pessoa);
    echo "<br>";

    $nome = $pessoa['nome'];

    if ($pessoa['idade'] >= 18) {
        echo "$nome é maior de idade";
    }

?>