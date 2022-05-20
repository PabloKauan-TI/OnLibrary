<?php 
	include 'assets/php/config.php';
    $id = $_GET['cod_livro'];
    $result = mysqli_query($con, "SELECT FROM cdalivro WHERE cod_livro = $id");
    while($dado = mysqli_fetch_assoc($result)){
?>
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
                            <li><a class="dropdown-item" href="#">Catalago</a></li>
                            <li><a class="dropdown-item" href="#">Emprestados</a></li>
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
                            <li><a class="dropdown-item" href="#">Com Livros</a></li>
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
                            <li><a class="dropdown-item" href="#">Todos</a></li>
                            <li><a class="dropdown-item" href="#">Gerenciar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="form">
        <div class="container">
            <fieldset>
                <legend>Cadastrar Livro</legend>
                <form method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-9">
                            <label for="titulo_livro" class="form-label">Nome</label>
                            <input type="text" name="titulo_livro" class="form-control" value="<?php echo $dado['titulo_livro']; ?>">
                        </div>
                        <div class="col-3">
                            <label for="codigo_livro" class="form-label">Código</label>
                            <input type="text" name="cod_livro" class="form-control" value="<?php echo $dado['cod_livro']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-9">
                            <label for="autor_livro" class="form-label">Autor</label>
                            <input type="text" name="autor_livro" class="form-control" value="<?php echo $dado['autor_livro']; ?>">
                        </div>
                        <div class="col-3">
                            <label for="qtd_livro" class="form-label">Quantidade</label>
                            <input type="text" name="qtd_livro" class="form-control" value="<?php echo $dado['qtd_livro']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="imagem_livro" class="form-label">Capa</label>
                            <input type="file" name="imagem_livro" class="form-control" value="<?php echo $dado['imagem_livro']; ?>">
                        </div>
                    </div>
                    <?php } ?>
                    <button type="post" name="submit">Cadastrar</button>
                </form>
            </fieldset>
        </div>
    </div>
</body>

</html>