<?php

    $validacoes = [];

    if (count($_POST) > 0) {

        if ($_POST["nome"] === "") {
            $validacoes[] = "Por favor, preencha o nome do usuário.";
        }

        if ($_POST["email"] === "") {
            $validacoes[] = "Por favor, preencha seu email.";
        }

        if ($_POST["senha"] === "" || $_POST["confSenha"] === "") {
            $validacoes[] = "Por favor, preencha sua senha.";
        }

        if ($_POST["senha"] != $_POST["confSenha"])
        $validacoes[] = "A senha e sua confirmação devem ser iguais.";

    } 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de usuário</title>
</head>
<body>
    <?php if (count($validacoes)): ?>
        <ul>
            <?php foreach($validacoes as $validacao): ?>
                <li><?= $validacao ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form action="index.php" method="POST">
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome">
        </div>
        <div>
            <input type="text" name="email" placeholder="Digite seu e-mail">
        </div>
        <div>
            <input type="password" name="senha" placeholder="Digite sua senha">
        </div>
        <div>   
            <input type="password" name="confSenha" placeholder="Confirme sua senha">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>