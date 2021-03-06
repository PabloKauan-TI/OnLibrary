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
                            <li><a class="dropdown-item" href="catalago.php">Catálogo</a></li>
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
                            <li><a class="dropdown-item" href="gec_emp.php">Gerenciar</a></li>
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
                <legend>Cadastrar Bibliotecária</legend>

                <?php
                require_once 'assets/php/config.php';
                if ($_POST) {
                    $nome = $_POST["nome_bibliotecaria"];
                    $telefone = $_POST["telefone_bibliotecaria"];
                    $endereco = $_POST["endereco_bibliotecaria"];
                    $email = $_POST["email_bibliotecaria"];
                    $senha = $_POST["senha_bibliotecaria"];

                    $sql = "INSERT INTO cadbibliotecaria (nome_bibliotecaria,telefone_bibliotecaria, endereco_bibliotecaria, email_bibliotecaria, senha_bibliotecaria) VALUES('$nome', '$telefone', '$endereco', '$email', '$senha')";

                    if ($con->query($sql) === TRUE) {
                        echo "Novo cadastro realizado com sucesso! <br>";
                    } else {
                        echo "Erro" . $sql . ' ' . $con->connect_error;
                    }

                    $con->close();
                }
                ?>
                <form action="cad_bibliotecaria.php" method="post">

                    <div class="row">
                        <div class="col">
                            <label for="nome_bibliotecaria" class="form-label">Nome</label>
                            <input type="text" name="nome_bibliotecaria" class="form-control" placeholder="">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="telefone_bibliotecaria" class="form-label">Telefone</label>
                            <input type="text" name="telefone_bibliotecaria" class="form-control" placeholder="">
                        </div>
                        <div class="col">
                            <label for="endereco_bibliotecaria" class="form-label">Endereço</label>
                            <input type="text" name="endereco_bibliotecaria" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="email_bibliotecaria" class="form-label">E-mail</label>
                            <input type="email" name="email_bibliotecaria" class="form-control" placeholder="">
                        </div>
                        <div class="col">
                            <label for="senha_bibliotecaria" class="form-label">Senha</label>
                            <input type="password" name="senha_bibliotecaria" class="form-control" placeholder="">
                        </div>
                    </div>
                    <button type="submit">Cadastrar</button>
                </form>
            </fieldset>
        </div>
    </div>


</body>

</html>