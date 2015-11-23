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
            isset($_POST['Quantidade'])
            )
    {
                $nome = $_POST['nome'];
                $valor = $_POST['valor'];
                $Quantidade = $_POST['Quantidade'];
                $DataDeValidade = (isset($_POST['DataDeValidade']) ? $_POST['DataDeValidade'] :"" );
                
                $SQL = "INSERT INTO produto(nome,valor,Quantidade,DataDeValidade)values(:nome, :valor, :Quantidade, :DataDeValidade)";
                $preparo = conexao()-> prepare($SQL);
                $preparo->bindValue("nome", $nome);
                $preparo->bindValue("valor", $valor);
                $preparo->bindValue("Quantidade", $Quantidade);
                $preparo->bindValue("DataDeValidade", $DataDeValidade);
                $preparo->execute();
                if($preparo->rowCount()== 1){
                    echo"Sucesso!";
                }  else {
                echo"Erro!";
                }
                
    }
}

