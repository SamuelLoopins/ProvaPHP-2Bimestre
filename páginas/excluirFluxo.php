<?php
    include('conexao.php');
    $id = $_GET['id'];  

    $sql = "delete from fluxo_caixa where id = '$id'";
    $result = mysqli_query($con, $sql);
    if($result){
        echo "<h1>Dados deletados com sucesso! </h1><br>";
    }else{
        echo "<h1>Erro ao deletar os dados:  </h1>".mysqli_error($con)."<h1>!</h1>";
    }
?>
<a href="index.php">Voltar</a>