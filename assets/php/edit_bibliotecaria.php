<?php

    require_once 'config.php';
    if ($_POST) {
        $nome = $_POST["nome_bibliotecaria"];
        $id = $_POST["id_bibliotecaria"];
        $telefone = $_POST["telefone_bibliotecaria"];
        $endereco = $_POST["endereco_bibliotecaria"];
        $email = $_POST["email_bibliotecaria"];
        $senha = $_POST["senha_bibliotecaria"];

        $sql = "UPDATE cadbibliotecaria SET nome_bibliotecaria='$nome', email_bibliotecaria = '$email', senha_bibliotecaria='$senha', telefone_bibliotecaria='$telefone', endereco_bibliotecaria='$endereco' WHERE id_bibliotecaria={$id}";
        $result = mysqli_query($con, $sql);

        if ($result === TRUE) { 
            header("location: /onlibrary/gec_bibliotecaria.php");
        } else {
            echo "Erro" . $sql . ' ' . $con->connect_error;
        }

        $con->close();
    }

?>