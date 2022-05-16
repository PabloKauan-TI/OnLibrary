<?php
    include 'config.php';
    
    
    $pesquisar = $_POST['pesquisar'];
    $result_livros = "SELECT * FROM cadlivro WHERE titulo_livro LIKE '%$pesquisar%' LIMIT 5";
    $resultado_livros = mysqli_query($con, $result_livros);
    
    while($dado = mysqli_fetch_array($resultado_livros)){
        echo  $dado["titulo_livro"];
    }
?>