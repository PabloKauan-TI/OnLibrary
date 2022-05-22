<?php
include("assets/php/config.php");

if (empty($_POST['pesquisar'])) {
    $sql = "SELECT * FROM cadaluno";
    $result = mysqli_query($con, $sql);
} else if ($_POST['pesquisar']) {
    $nome = $_POST['pesquisar'];
    $sql = "SELECT * FROM cadaluno WHERE nome_aluno LIKE '%$nome%' ";
    $result = mysqli_query($con, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnLibrary</title>
    <link rel="stylesheet" href="assets/css/gec_aluno.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/fuctions.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
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

    <div id="pesq">
        <form action="catalago.php" method="post">
            <div class="col">
                <div class="input-group mb-3">
                    <input type="search" class="form-control" placeholder="Todos os alunos..." name="pesquisar">
                    <button class="btn btn-secondary" type="submit" id="pesquisar"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </form>
    </div>

    <section class="catalog" id="catalog">
        <div class="border">
            <table class="table table-dark">
                <thead>
                    <th scope="col">NOME</th>
                    <th scope="col">SÉRIE</th>
                    <th scope="col">TURMA</th>
                    <th scope="col" id="op">OPÇÕES</th>
                </thead>
                <?php while ($dado = mysqli_fetch_assoc($result)) { ?>
                    <tbody>
                        <th><?php echo $dado['nome_aluno']; ?></th>
                        <th><?php echo $dado['serie_aluno']; ?></th>
                        <th><?php echo $dado['curso_aluno']; ?></th>
                        <th>
                            <button class="btn btn-secondary"><a href="alt_livro.php?matricula_aluno=<?php echo $dado['matricula_aluno']; ?>"><img src="assets/css/escrever.png"></a></button>
                            <button class="btn btn-secondary"><a href="assets/php/delete_livro.php?matricula_aluno=<?php echo $dado['matricula_aluno']; ?>"><img src="assets/css/excluir.png"></a></button>
                        </th>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </section>

</body>

</html>