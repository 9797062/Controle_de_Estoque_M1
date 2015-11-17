<?php
if(file_exists("Global.php")){
include_once './Global.php';
}else if(file_exists("includes/Global.php")){
   include_once './includes/Global.php'; 
}
function salvar(){
    if(
            isset($_POST['nome'])and
            isset($_POST['valor'])and 
            isset($_POST['qtd'])
            )
    {
                $nome = $POST['nome'];
                $valor = $POST['valor'];
                $qtd = $POST['qtd'];
                
                $SQL = "";
                $preparo = conexao()-> prepare($SQL);
                $preparo->bindValue("", $nome);
                $preparo->bindValue("", $valor);
                $preparo->bindValue("", $qtd);
                $preparo->execute();
                if($preparo->rowCount()== 1){
                    echo"Sucesso!";
                }  else {
                echo"Erro!";
                }
                
    }
}

