<?php 

require_once 'config.php';

if($_POST) {
	$titulo_livro = $_POST['titulo_livro'];
	$autor_livro = $_POST['autor_livro'];
	$qtd_livro = $_POST['qtd_livro'];
	$imagem_livro = $_POST['imagem_livro'];
	$cod_livro = $_POST['cod_livro'];

	$sql  = "UPDATE cadlivro SET titulo_livro = '$titulo_livro', autor_livro = '$autor_livro', qtd_livro = '$qtd_livro', imagem_livro = '$imagem_livro' WHERE cod_livro = {$cod_livro}";
	if($connect->query($sql) === TRUE) {
		//echo "<a href='../edit.php?cod_livro=".$cod_livro."'><button type='button'>Voltar</button></a>";	
       	
	} else {
		echo "Erro : ". $connect->error;
	}

	$connect->close();

}

?>