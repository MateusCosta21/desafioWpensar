<?php
session_start();
include("conexao.php");
$consulta =  "SELECT nome_produto, SUM(quantidade_produto) quantidadeproduto, valor_produto , SUM((valor_produto)*(quantidade_produto))/SUM(quantidade_produto) mediacompra FROM produtos, compraprodutos WHERE produtos.idprodutos = compraprodutos.name_produto GROUP BY nome_produto";
$con = $conexao->query($consulta) or die ($conexao->error);
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sistema de cadastro</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{
            background-color:darkslategrey;
        }
        table{
            color:#fff;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a href="#" class="navbar-brand"> Sistema Cadastro </a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-target">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav-target">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="telacadastro.php" class="nav-link">Cadastro  </a></li>
            <li class="nav-item"><a href="compraprodutos.php" class="nav-link">Compra Produtos </a></li>
            <li class="nav-item"><a href="estoque.php" class="nav-link">Estoque </a></li>
        </ul>
    </div>
</nav>
<table border="2" class="col-sm-12 mt-5">
    <tr>
        <td class="text-center">Produto</td>
        <td class="text-center">Quantidade</td>
        <td class="text-center">Preço de compra</td>
        <td class="text-center">Preço Médio</td>
    </tr>
    <?php while($dado = $con->fetch_array()){ ?>
        <tr>
            <td class="text-center"><?php echo $dado["nome_produto"]; ?></td>
            <td class="text-center"><?php echo $dado["quantidadeproduto"]; ?></td>
            <td class="text-center">R$<?php echo $dado["valor_produto"]; ?></td>
            <td class="text-center">R$<?php echo $dado["mediacompra"]; ?></td>
        </tr>
    <?php } ?>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>







