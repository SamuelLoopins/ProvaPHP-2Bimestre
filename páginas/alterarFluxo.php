<?php

    include('conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM fluxo_caixa WHERE id = $id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Altera Fluxo de Caixa - IFSP</h1>
    <form action="alterarFluxo_exe.php" method="post" enctype="multipart/form-data">
        <input name="id" type="hidden" value="<?php echo $row['id']?>">
        <div>
            <label for="data">Data cadastro</label>
            <input type="date" name="data" id="data" value="<?php echo $row['data_fluxo']?>">
        </div>
        <div>
            <p>Tipo:</p>
	        <input type="radio" id="tipo" name="tipo" value="saida" <?php if($row['tipo']=='saida')echo"checked";?>>
	        <label for="tipo-S"></label>Saída<br>
	        <input type="radio" id="tipo" name="tipo" value="entrada" <?php if($row['tipo']=='entrada')echo"checked";?>>
	        <label for="tipo-E">Entrada</label>
        </div>
        <div>
            <label for="valor">Valor</label>
            <input type="text" name="valor" id="valor" placeholder="Valor" value="<?php echo $row['valor']?>">
        </div>
        <div>
            <label for="historico">Historico</label>
            <input type="text" name="historico" id="historico" placeholder="Historico" value="<?php echo $row['historico']?>">
        </div>
        <div>
            <label for="cheque">Cheque</label>
	        <select id="cheque" name="cheque">
		    <option value="sim" <?php if($row['cheque']=='sim')echo"selected";?>>Sim</option>
		    <option value="nao" <?php if($row['cheque']=='nao')echo"selected";?>>Não</option>
	        </select>
        </div>
        <button type="submit" value ="salvar" class="btn btn-success">Enviar</button>
    </form>

    <a href="index.php">Voltar</a>
    
</body>
</html>