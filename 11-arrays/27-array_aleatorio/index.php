<?php

    $arr = range(1, 20);

    shuffle($arr);
    print_r($arr);

    // Perceba que ele estava organizado de 1 a 20 nesta ordem, o "shuffle" embaralhou todos os itens em uma ordem aleatória.

?>