<?php

    include("conexao.php");

    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];

    echo "<h1>Dados do Fluxo</h1><br>";
    echo "<h3>Data: $data</h3><br>";
    echo "<h3>Tipo: $tipo</h3><br>";
    echo "<h3>Valor: $valor</h3><br>";
    echo "<h3>Historico: $historico</h3><br>";
    echo "<h3>Cheque: $cheque</h3><br>";
    
    $sql = "insert into fluxo_caixa (data_fluxo, tipo, valor, historico, cheque)";
    $sql .= "values ('$data','$tipo', '$valor','$historico', '$cheque')";

    $result = mysqli_query($con, $sql);
    if($result)
        echo"Dados cadastrados com sucesso!";
    else
        echo "Erro ao tentar cadastrar!" . mysqli_error($con);

?>

<h5><a href = "index.php">Voltar</a></h3>