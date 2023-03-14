<?php

    // Como primeiro argumento coloca-se o nome da chave que está procurando, no segundo coloca-se o nome do array. Isso se utilizar a função array_key_exists.

    $arr = [
        "nome" => "José",
        "Idade" => 23
    ];

    if (array_key_exists("nome", $arr)) {
        echo "A chave existe <br>";
    } else {
        echo "A chave não existe <br>";
    }

    if (array_key_exists("profissao", $arr)) {
        echo "A chave existe <br>";
    } else {
        echo "A chave não existe <br>";
    }

    // Agora utilizando isset é diferente, perceba logo abaixo.

    if (isset($arr["nome"])) {
        echo "A chave existe <br>";
    } else {
        echo "A chave não existe <br>";
    }

    if (isset($arr["profissao"])) {
        echo "A chave existe <br>";
    } else {
        echo "A chave não existe <br>";
    }

?>