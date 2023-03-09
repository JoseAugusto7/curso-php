<?php

    include_once "backend.php";

?>

<h1>Seja bem-vindo ao nosso site!</h1>
<p><?= $nome; ?> veja alguns dos nossos produtos.</p>

<h2>Principais produtos:</h2>
<ul>
    <?php foreach ($produtos as $produto): ?>
        <li> <?= $produto; ?> </li>
    <?php endforeach; ?>
</ul>