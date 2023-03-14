<?php

    $arr = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];

    $slice1 = array_slice($arr, 3, 6); // Aqui estou dizendo para pegar do quarto item ate o sétimo. No caso 8 e 14.
    $slice2 = array_slice($arr, 7); // Quando não colocamos o terceiro argumento ele pega do primeiro até o final do array, neste caso ele vai pegar do 16 em diante.

    print_r($slice1);
    echo"<br>";
    print_r($slice2);

?>