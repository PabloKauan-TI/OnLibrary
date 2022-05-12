<?php
    include 'config.php';

    $id_aluno = $_GET["id_aluno"];
        
    if(isset($_GET['id_aluno'])){
        $sql = mysqli_query($con, "DELETE FROM cadaluno WHERE id_aluno = {$id_aluno} ") 
            or die(mysqli_error($con));

        header('location: /onlibrary/gec_aluno.php');
    }

?>