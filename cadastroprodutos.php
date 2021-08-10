<html>
<head>
    <meta charset="UTF-8">
    <title>Sistema de cadastro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
session_start();
include("conexao.php");
$produtos = mysqli_real_escape_string($conexao,$_POST['name_produto']);
$quantidadeproduto = mysqli_real_escape_string($conexao,$_POST['quantidade_produto']);
$valorproduto = mysqli_real_escape_string($conexao,$_POST['valor_produto']);
$sql = "INSERT INTO compraprodutos(name_produto,quantidade_produto,valor_produto) values ('$produtos','$quantidadeproduto','$valorproduto')";
$sql_result=mysqli_query($conexao,$sql);

if ($sql_result) {
    echo '<div class="alert alert-success">Dados enviados com Sucesso!</div>';
    header("Refresh: 2; url = compraprodutos.php");

} else {
    echo '<div class="alert alert-danger">Erro:', mysqli_error($conexao),'</div>';


}


/*if($conexao->query($sql) === TRUE){
$_SESSION['status_cadastro'] == true;
} */
/*
$conexao->close();
header('Location:index.php');
exit;
?>*/

?>
</body>
</html>