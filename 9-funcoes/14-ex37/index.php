<?php

    /*
        Crie uma função chamada defineCorCarro;
        Onde há um padrão chamado cor, com valor default de vermelha;
        Retorne a cor do carro;
        Imprima o retorno tanto com o parâmetro default, quanto definindo uma cor.
    */

    function defineCorCarro($cor = "vermelha") {

        return $cor;

    }

    $corDefault = defineCorCarro();
    $corDefinida = defineCorCarro("Azul Piscina");

    echo "$corDefault <br>";
    echo "$corDefinida <br>";

?>