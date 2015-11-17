<?php
include './includes/Global.php';
$title = 'controle de estoque';
include './template/header.php';
?>
<form method="post">
    <div class="center">
        Nome: <input type="text" name="nome"/>
        Valor: <input type="text" name="valor"/>
        Quantidade: <input type="text" name="Quantidade"/>
        Data de validade: <input type="text" name="DataDeValidade"/>
        <input type="submit" value="Enviar"/>
    </div>
<?php

include './template/footer.php';
?>