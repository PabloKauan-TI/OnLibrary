<?php 
    include("assets/php/config.php"); 
    $sql = "SELECT * FROM cadlivro";
    $result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnLibrary</title>
    <link rel="stylesheet" href="assets/css/catalogo.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt="" id="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Livros
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="catalogo.php">Catalago</a></li>
                            <li><a class="dropdown-item" href="cad_livro.php">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="#">Gerenciar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Emprestimos
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="cad_emprestimolivro.php">Realizar</a></li>
                            <li><a class="dropdown-item" href="#">Gerenciar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Alunos
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="cad_aluno.php">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="#">Gerenciar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admins
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="cad_bibliotecaria.php">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="#">Gerenciar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="catalog" id="catalog">
        <div class="content">
            <div class="card-wrapper">
                <?php while($dado = $result->fetch_array()){ ?>
                <div class="card-item">
                    <?php echo '<img src="'.$dado['imagem_livro'].'">'; ?>
                    <div class="card-content">
                        <h3><?php echo $dado["titulo_livro"]; ?></h3>
                        <p>
                            Autor: <?php echo $dado["autor_livro"]; ?><br>
                            Quantidade: <?php echo $dado["qtd_livro"]; ?>
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

</body>

</html>