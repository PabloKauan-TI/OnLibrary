<?php 

require_once 'config.php';

if($_POST) {
	$titulo_livro = $_POST['titulo_livro'];
	$autor_livro = $_POST['autor_livro'];
	$qtd_livro = $_POST['qtd_livro'];
	$imagem_livro = $_FILES['imagem_livro'];
	
	$cod_livro = $_POST['cod_livro'];

	$sql  = "UPDATE cadlivro SET titulo_livro = '$titulo_livro', autor_livro = '$autor_livro', qtd_livro = '$qtd_livro', imagem_livro = '$imagem_livro' WHERE cod_livro = {$cod_livro}";
	if($con->query($sql) === TRUE) {
        echo "<script>alert('Dados atualizados com sucesso');location='/onlibrary/gec_livro.php'</script>";
		//header('location: /onlibrary/gec_livro.php');
	} else {
		echo "Erro : ". $con->error;
	}

	$con->close();

}

?>