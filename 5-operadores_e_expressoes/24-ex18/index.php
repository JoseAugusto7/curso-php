<?php

    /* Verifique as seguinter operações com OR:
       12 < 5 OR "João" === "João"
       1 > 5 OR 1
       20 === "20" OR 51 >= 31 
    */

    if (12 > 5 || "João" === "João") {
        echo "1 É verdadeiro <br>";
    }

    if (1 > 5 || 1) {
        echo "2 É verdadeiro <br>";
    }

    if (20 === "20" || 51 >= 31) {
        echo "3 É verdadeiro <br>";
    }

?>