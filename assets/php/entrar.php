<?php

    require_once 'config.php';

    $user = $_POST['user'];
    $senha = $_POST['senha'];

    $sql1="SELECT * FROM cadbibliotecaria WHERE email_bibliotecaria = '{$user}' AND senha_bibliotecaria = '{$senha}'";
    $sql2="SELECT * FROM cadaluno WHERE email_aluno = '{$user}' AND senha_aluno = '{$senha}'";
    
    $result1=mysqli_query($con,$sql1);
    $result2=mysqli_query($con,$sql2);

    if(mysqli_num_rows($result1)>=1){
        header('location: /onlibrary/catalago.php');
    }elseif (mysqli_num_rows($result2)>=1) {
        header('location: /onlibrary/catalago_user.php');
    }else {
        
    }
?>