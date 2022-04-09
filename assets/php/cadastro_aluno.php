<?php
    
    header('Acess-Control-Allow-Origin: *')
    
    require_once('config.php');
    session_start();

    $nome=$_POST['nome'];
    $curso=$_POST['curso'];
    $serie=$_POST['serie'];
    $matricula=$_POST['matricula'];
    $telefone=$_POST['telefone'];
    $endereco=$_POST['endereco'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];

    $sql="INSERT INTO cadaluno(nome_aluno, curso_aluno, serie_aluno, matricula_aluno, telefone_aluno, endereco_aluno, email_aluno, senha_aluno) VALUES('".$nome."','".$curso."','".$serie."','".$matricula."','".$telefone."','".$endereco."','".$email."','".$senha."',)";

    $result = $con->query($sql);

    if(!$result){
        http_response_code(500);
        echo json_encode("error", "Error ao inserir no banco de dados.");
    }else{
        http_response_code(200);
        echo json_encode("sucess", "Inserido com sucesso!");
    }

?>