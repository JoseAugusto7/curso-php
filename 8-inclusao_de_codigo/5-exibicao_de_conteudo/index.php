<?php

    $nome = "José";
    $sobrenome = "Morado";

// Neste caso é mais interessante usar <?= do que <?php echo "texto" fica menos poluído e mais facil de entender.

?>

<form action="">
    <label for="nome">Nome</label>
    <input type="text" id="nome" placeholder="<?= $nome ?>">
    <label for="sobrenome">Sobrenome</label>
    <input type="text" id="sobrenome" placeholder="<?= $sobrenome ?>">
    <input type="submit" value="Enviar">
</form>