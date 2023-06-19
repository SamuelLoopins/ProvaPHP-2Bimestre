<?php

    include('conexao.php');

    $id = $_POST['id'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];

    echo "<h1>Alteração de Fluxo de Caixa </h1>";
    echo "<p>Data: $data</p>";
    $sql = "UPDATE fluxo_caixa SET
        data_fluxo = '$data',
        tipo = '$tipo',
        valor = '$valor',
        historico = '$historico',
        cheque = '$cheque'
        where id = $id";

    echo $sql."<br>";
    $result = mysqli_query($con, $sql);
    if($result)
        echo"Dados alterados com sucesso!";
    else
        echo "Erro ao tentar alterar os dados: " . mysqli_error($con)."!";

?>

<a href="index.php">Voltar</a>