<?php

    print_r($_SERVER);
    echo "<br>";

    print_r($_SERVER["MYSQL_HOME"]);
    echo "<br>";

    if ($_SERVER["SERVER_NAME"] == "localhost") {
        echo "Está´entrando no localhost <br>";
    }

?>