<?php
include("assets/php/config.php");
if(empty($_POST['pesquisar'])){
    $sql= "SELECT * FROM cadlivro";
    $result= mysqli_query($con,$sql);
}else if($_POST['pesquisar']){
    $nome = $_POST['pesquisar'];
    $sql= "SELECT * FROM cadlivro WHERE titulo_livro LIKE '%$nome%' ";
    $result= mysqli_query($con,$sql);
}
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt="" id="logo"></a>
        </div>
    </nav>
    <div id="pesq">
        <form action="catalago.php" method="post">
            <div class="col">
                <div class="input-group mb-3">
                    <input type="search" class="form-control" placeholder="Todos os livros..." name="pesquisar">
                    <button class="btn btn-secondary" type="submit" id="pesquisar"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </form>
    </div>


    <section class="catalog" id="catalog">
        <div class="content">
            <div class="card-wrapper">
                <?php while ($dado = mysqli_fetch_assoc($result)) { ?>
                    <div class="card-item">
                        <img src="./imagens/<?php echo $dado['imagem_livro']; ?>">
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