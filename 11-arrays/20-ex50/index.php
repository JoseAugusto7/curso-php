<?php

    /*
        Crie um array associativo com nomes e idades;
        Imprima estes dados em uma tabela de HTML;
        Dica: Utilize as tags de elemento table.
    */

    $arr = [
        "Maria" => 18,
        "Ana" => 25,
        "José" => 20,
        "João" => 10,
        "Fernanda" => 28
    ];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Tabela</title>
</head>
<body>
    <section class="col-3 container">
        <table class="mt-5 table table-bordered border-3 text-center">
            <tr>
                <th>Nome</th>
                <th>Idade</th>
            </tr>
            <?php foreach ($arr as $nome => $idade): ?>
                <tr>
                    <td><?= $nome ?></td>
                    <td><?= $idade ?></td>
                </tr>
            <?php endforeach; ?>
            
        </table>
    </section>
</body>
</html>