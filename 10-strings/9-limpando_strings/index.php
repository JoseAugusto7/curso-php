<?php

    $str = "    José     ";

    echo "O nome dele é $str."; // Note que mesmo o php ignorando os espaços em branco ainda há um depois do ".", esses espaços são ignorados porém ainda vão para o banco de dados, é uma boa limpa-los antes.

    echo "<br>";

    $limpStr = trim($str);

    echo "O nome dele é $limpStr."; // Depois da limpeza, note que não tem mais espaco entre a string e o ponto.

?>