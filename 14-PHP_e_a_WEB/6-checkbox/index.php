<?php

    if (isset($_POST["ingredientes"])) {

        $ingredientes = $_POST["ingredientes"];

        print_r($ingredientes);

    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div>
            <input type="checkbox" name="ingredientes[]" value="cebola"> cebola
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="tomate"> tomate
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="sal"> sal
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="pimenta"> pimenta
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="macarrao"> macarrao
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="carne"> carne
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>