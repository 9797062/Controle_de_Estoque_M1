<?php
include './includes/Global.php';
include './includes/Estoque.php';
$title = 'controle de estoque';
include './template/header.php';
?>
<?php salvar(); ?>
<form method="post">
    <div class="center">
        <h2 style="text-align: center;">Cadastro de Produtos</h2>
        Nome: <input type="text" name="nome"/>
        Valor: <input type="text" name="valor"/>
        Quantidade: <input type="text" name="Quantidade"/>
        Data de validade: <input type="text" name="DataDeValidade"/>
        <input type="submit" value="Enviar"/>
    </div>
<?php

include './template/footer.php';
?>