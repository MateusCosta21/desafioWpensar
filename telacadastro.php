<html>
<head>
    <meta charset="UTF-8">
    <title>Sistema de cadastro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{
            background-color:darkslategrey;
        }
        label{
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
<div class="container">
<div class="row justify-content-center">
    <form action="cadastro.php" method="POST">
        <label for="" class="mt-5" >Nome do produto</label>
    <input class="form-control mt-1 col-x"type="text" name="nome_produto" placeholder="Digite nome do produto">
        <button class="btn btn-primary mt-3"  align="center" value="Cadastrar"> Cadastrar </button>
    </form>
</div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>