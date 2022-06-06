<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnLibrary</title>
    <link rel="stylesheet" href="assets/css/cadastros.css">
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
                            <li><a class="dropdown-item" href="catalago.php">Catalago</a></li>
                            <li><a class="dropdown-item" href="cad_livro.php">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="gec_livro.php">Gerenciar</a></li>
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
                            <li><a class="dropdown-item" href="gec_emprestimolivro.php">Gerenciar</a></li>
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
                            <li><a class="dropdown-item" href="gec_aluno.php">Gerenciar</a></li>
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
                            <li><a class="dropdown-item" href="gec_bibliotecaria.php">Gerenciar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="form">
        <div class="container">
            <fieldset>
                <legend>Editar Livro</legend>
                <?php

                require_once 'assets/php/config.php';

                if ($_GET['cod_livro']) {
                    $cod_livro = $_GET['cod_livro'];

                    $sql = "SELECT * FROM cadlivro WHERE cod_livro = {$cod_livro}";
                    $result = $con->query($sql);

                    $dado = $result->fetch_assoc();

                    $con->close();

                ?>
                    <form action="assets/php/edit_livro.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col">
                                <input type="hidden" name="cod_livro" value="<?php echo $dado['cod_livro'] ?>" />

                                <label for="titulo_livro" class="form-label">Nome</label>
                                <input type="text" name="titulo_livro" class="form-control" placeholder="" value="<?php echo $dado['titulo_livro'] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <label for="autor_livro" class="form-label">Autor</label>
                                <input type="text" name="autor_livro" class="form-control" placeholder="" value="<?php echo $dado['autor_livro'] ?>">
                            </div>
                            <div class="col-3">
                                <label for="qtd_livro" class="form-label">Quantidade</label>
                                <input type="text" name="qtd_livro" class="form-control" placeholder="" value="<?php echo $dado['qtd_livro'] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="imagem_livro" class="form-label" >Capa</label><br>
                                <img src="./imagens/<?php echo $dado['imagem_livro'];?>" style="width:150px;">
                                <input type="file" name="imagem_livro" class="form-control" >
                            </div>
                        </div>
                        <button type="submit" name="submit">Editar</button>
                    </form>
            </fieldset>
        </div>
    </div>
</body>

</html>

<?php
                }
?>