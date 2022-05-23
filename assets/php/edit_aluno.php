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

        $sql = "UPDATE cadaluno SET nome_aluno='$nome', email_aluno = '$email', senha_aluno='$senha', telefone_aluno='$telefone', endereco_aluno='$endereco', curso_aluno='$curso', serie_aluno='$serie' WHERE matricula_aluno={$matricula}";
        $result = mysqli_query($con, $sql);

        if ($result === TRUE) {
            echo "Novo cadastro realizado com sucesso! <br>"; 
            header("location: /onlibrary/gec_aluno.php");
        } else {
            echo "Erro" . $sql . ' ' . $con->connect_error;
        }

        $con->close();
    }

?>