<?php 

require_once 'config.php';

if($_POST) {
	$titulo_livro = $_POST['titulo_livro'];
	$autor_livro = $_POST['autor_livro'];
	$qtd_livro = $_POST['qtd_livro'];
	$arquivo = $_FILES['imagem_livro']['name'];
	$extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));

	$novo_nome = md5(time()).".".$extensao;
	$diretorio = "./imagens"; 

	$cod_livro = $_POST['cod_livro'];



	$sql  = "UPDATE cadlivro SET titulo_livro = '$titulo_livro', autor_livro = '$autor_livro', qtd_livro = '$qtd_livro', imagem_livro = '$novo_nome' WHERE cod_livro = {$cod_livro}";
	if($con->query($sql) === TRUE) {

		if (move_uploaded_file($_FILES["imagem_livro"]["tmp_name"], $diretorio . $novo_nome)) {
			if(unlink("./imagens$novo_nome")){
        echo "<script>alert('Dados atualizados com sucesso');location='/onlibrary/gec_livro.php'</script>";
		//header('location: /onlibrary/gec_livro.php');
		
			}
	} else {
		echo "Erro : ". $con->error;
	}

	$con->close();

}
}
