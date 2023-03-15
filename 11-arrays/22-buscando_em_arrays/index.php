<?php

    $arr = ["Banana", "Maçã", "Pêra", "Uva"];

    if (in_array("Banana", $arr)) {
        echo "Há o item Banana no array <br>";
    } else {
        echo "Não há o item no array <br>";
    }

    $b = "Maçã";

    if (in_array($b, $arr)) {
        echo "Há o item Maçã no array <br>";
    } else {
        echo "Não há o item no array <br>";
    }

    if (in_array("Manga", $arr)) {
        echo "Há o item Manga no array <br>";
    } else {
        echo "Não há o item no array <br>";
    }

?>