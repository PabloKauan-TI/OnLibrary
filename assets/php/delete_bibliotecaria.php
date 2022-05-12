<?php
    include 'config.php';

    $id_bibliotecaria = $_GET["id_bibliotecaria"];
        
    if(isset($_GET['id_bibliotecaria'])){
        $sql = mysqli_query($con, "DELETE FROM cadbibliotecaria WHERE id_bibliotecaria = {$id_bibliotecaria} ") 
            or die(mysqli_error($con));

        header('location: /onlibrary/gec_bibliotecaria.php');
    }

?>