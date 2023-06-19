<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Página inicial - Fluxo de caixa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="cadastroFluxo.html">Cadastrar fluxo de caixa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="listarFluxo.php">Listar fluxo de caixa</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="consultarFluxo.html">Consultar fluxo de caixa</a>
      </li>
        </ul>
    </div>
    </nav>

    <div class = "Listas">
    <?php
    include('conexao.php');
    $sql = "SELECT * FROM fluxo_caixa";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    ?>
    <table align="center" border="1" width="500" class="table">
        <tr>
            <tH scope="col">Id</tH>
            <th scope="col">Data</th>
            <th scope="col">Tipo</th>
            <th scope="col">Valor</th>
            <th scope="col">Histórico</th>
            <th scope="col">Cheque</th>
            <th scope="col">Alterar</th>
            <th scope="col">Deletar</th>
        </tr>
        <?php
            do{
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['data_fluxo']."</td>";
                echo "<td>".$row['tipo']."</td>";
                echo "<td>".$row['valor']."</td>";
                echo "<td>".$row['historico']."</td>";
                echo "<td>".$row['cheque']."</td>";
                echo "<div class = alterar><td><a href='alterarFluxo.php?id=".$row['id']."'>Alterar</a></td></div>";
                echo "<td><a href='excluirFluxo.php?id=".$row['id']."'>Deletar</a></td>";
                echo "</tr>";
            }while($row = mysqli_fetch_array($result))
        ?>
    </table>
    </div>
</body>
</html>
