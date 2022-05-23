<?php

    require_once 'config.php';
    if ($_POST) {
        $nome = $_POST["nome_aluno"];
        $curso = $_POST["curso_aluno"];
        $serie = $_POST["serie_aluno"];
        $matricula = $_POST["matricula_aluno"];
        $telefone = $_POST["telefone_aluno"];
        $endereco = $_POST["endereco_aluno"];
        $email = $_POST["email_aluno"];
        $senha = $_POST["senha_aluno"];

        $sql = "UPDATE INTO cadaluno SET nome_aluno='$nome', ";

        if ($con->query($sql) === TRUE) {
            echo "Novo cadastro realizado com sucesso! <br>"; 
            header("location: ../gec_aluno.php");
        } else {
            echo "Erro" . $sql . ' ' . $con->connect_error;
        }

        $con->close();
    }

?>