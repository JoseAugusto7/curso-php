<?php

    /*
        Crie uma array associativo com chaves com valor de nomes, e valores com uma pontuação;
        Ordene os dados do maior para o menor;
        Exiba uma lista simulando um ranking em HTML.
    */

    $ranking = [
        "Maria" => 30,
        "João" => 15,
        "Pedro" => 70,
        "Fernanda" => 90,
        "Gabriela" => 87
    ];

    arsort($ranking);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking</title>
</head>
<body>
    <section>
        <h3>Ranking de pontos</h3>
        <ol>
            <?php foreach ($ranking as $nome => $pontos):?>

                <li><?= $nome ?> - <?= $pontos ?> </li>

            <?php endforeach; ?>
        </ol>
    </section>
</body>
</html>