<?php

    $url = "https://www.google.com";

    $arrayUrl = parse_url($url);

    print_r($arrayUrl); // Perceba que essa função transforma a url em um array com as informações.

    echo $arrayUrl["host"];

?>