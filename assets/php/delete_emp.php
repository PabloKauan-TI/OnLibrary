<?php
    include 'config.php';

    $id_aluno = $_GET["cod_emp"];
        
    if(isset($_GET['cod_emp'])){
        $sql = mysqli_query($con, "DELETE FROM emprestimolivro WHERE cod_emp = {$id_aluno} ") 
            or die(mysqli_error($con));

        header('location: /onlibrary/gec_emp.php');
    }

?>