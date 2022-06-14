<?php 

require_once 'config.php';

if($_POST) {
	
	$titulo_livro = $_POST["titulo_livro"];
    $aluno = $_POST["aluno"];
    $serie = $_POST["serie"];
    $curso = $_POST["curso"];
    $data_emp = $_POST["data_emp"];
    $data_rec = $_POST["data_rec"];
	$id = $_POST["cod_emp"];
	
	
	$sql  = "UPDATE emprestimolivro SET titulo_livro = '$titulo_livro', aluno = '$aluno', curso = '$curso', data_emp = '$data_emp', data_rec = '$data_rec' WHERE cod_emp = {$id}";
	
	if($con->query($sql) === TRUE) {

		
  
		header('location: /onlibrary/gec_emp.php');
		
			
	} else {
		echo "Erro : ". $con->error;
	}

	$con->close();

}

