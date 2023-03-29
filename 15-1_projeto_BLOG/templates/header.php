<?php

    include_once("helpers/url.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">

    <title>Blog Codar</title>
</head>
<body>
    <header>
        <a href="<?php $BASE_URL ?>index.php" id="logo">
            <img src="<?php $BASE_URL ?>img/logo.svg" alt="Blog Codar">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<?php $BASE_URL ?>index.php">Home</a></li>
                <li><a href="#">Categorias</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="<?php $BASE_URL ?>contato.php">Contatos</a></li>
            </ul>
        </nav>
    </header>