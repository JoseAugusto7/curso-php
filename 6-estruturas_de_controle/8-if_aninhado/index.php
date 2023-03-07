<?php

    if (5 > 2) {
        echo "Entrou no primeiro if 1 <br>";

        if (10 < 20) {
            echo "Entrou no segundo if 1 <br>";
        }
    }

    if (5 > 2) {
        echo "Entrou no primeiro if 2 <br>";

        if (10 > 20) {
            echo "Entrou no segundo if 2 <br>";
        } else {
            echo "Entrou no segundo else 2 <br>";
        }
    } else {
        echo "Entrou no primeiro else 2 <br>";
    }

    if (5 === 2) {
        echo "Entrou no primeiro if 3 <br>";

        if (10 > 20) {
            echo "Entrou no segundo if 3 <br>";
        } else {
            echo "Entrou no segundo else 3 <br>";
        }
    } else {
        echo "Entrou no primeiro else 3 <br>";
    }

?>