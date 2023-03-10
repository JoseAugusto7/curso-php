<?php

    $str1 = "Esta string é maior que a segunda";
    $str2 = "Esta é menor";

    echo strlen($str1) . "<br>";
    echo strlen($str2) . "<br>";

    $len1 = strlen($str1);
    $len2 = strlen($str2);

    if ($len1 > $len2) {
        echo "A primeira é maior que a segunda";
    } else {
        echo "A segunda é maior que a primeira";
    }

?>