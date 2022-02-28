<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
<div class="container">
	<?php 
	include_once "conexao.php";

	try {
		$consulta = $conn->query("SELECT * FROM Livro");

		echo "<h1>Livros Cadastrados</h1><br>";
		echo "<table class='table table-striped'>
				<tr style='font-weight: bold;'>
					<td>Titulo</td>
					<td>Autor</td>
					<td>Páginas</td>
					<td>Ações</td>
				</tr>";

		while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
			echo "<tr>
					<td>$linha[titulo]</td>
					<td>$linha[autor]</td>
					<td>$linha[paginas]</td>
					<td><a href='editar.php?idLivro=$linha[idLivro]'>Editar</a>	-
					<a href='excluir.php?idLivro=$linha[idLivro]'>Excluir</a></td>
				  </tr>";
		}

		echo "</table>";
	} 

	catch (PDOException $e) {
	echo $e->getMessage();
	}
?>
</div>