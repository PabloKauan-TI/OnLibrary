<?php
    include 'config.php';

    $cod_livro = $_GET["cod_livro"];
        
    if(isset($_GET['cod_livro'])){
        $sql = mysqli_query($con, "DELETE FROM cadlivro WHERE cod_livro = {$cod_livro} ") 
            or die(mysqli_error($con));

        header('location: /onlibrary/gec_livro.php');
    }

?>