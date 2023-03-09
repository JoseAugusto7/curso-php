<?php

    // Note que com o include ou o require, o arquivo se repete mais de uma vez se for pedido.
    include "teste1.php";
    include "teste1.php";

    // Ao contrário do include o include_once não repete o código mesmo se for pedido.
    include_once "teste2.php";
    include_once "teste2.php";

    require "teste3.php";
    require "teste3.php";

    // A mesma situação com o require_once.
    require_once "teste4.php";
    require_once "teste4.php";

?>