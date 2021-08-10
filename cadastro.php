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
$produto = mysqli_real_escape_string($conexao,$_POST['nome_produto']);
$sql = "INSERT INTO produtos(nome_produto) values ('$produto')";
$sql_result=mysqli_query($conexao,$sql);

if ($sql_result) {
    echo '<div class="alert alert-success">Dados enviado com Sucesso!</div>';
    header("Refresh: 2; url = telacadastro.php");

} else {
    echo '<div class="alert alert-danger">Erro:', mysqli_error($conexao),'</div>';


}
?>
</body>
</html>