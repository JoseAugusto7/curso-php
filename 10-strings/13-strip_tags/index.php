<?php

    $textoHtml = "<div><p>Parágrafo em HTML</p></div><div><p>Outro parágrafo</p></div>";

    echo $textoHtml; // Neste caso temos um texto com html normal.

    echo strip_tags($textoHtml); // Aqui tiramos as tags HTML da variável e se transformou em um texto limpo.

?>