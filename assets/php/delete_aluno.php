<?php
    include 'config.php';

    $id_aluno = $_GET["matricula_aluno"];
        
    if(isset($_GET['matricula_aluno'])){
        $sql = mysqli_query($con, "DELETE FROM cadaluno WHERE matricula_aluno = {$id_aluno} ") 
            or die(mysqli_error($con));

        header('location: /onlibrary/gec_aluno.php');
    }

?>