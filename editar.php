<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Editar</title>
</head>
<body>
	<?php
		include_once "index.php";
		include_once "conexao.php";

		$id = filter_var($_GET['idLivro'], FILTER_SANITIZE_NUMBER_INT);
		$consulta = $conn->query("SELECT * from livro where idLivro= '$id'");
		$linha= $consulta->fetch(PDO::FETCH_ASSOC);
	?>

	<div class="container">
		<div class="row">
			<div class="col">
				<form action="sistema.php" method="post">
					<h1>Editar Livro</h1>

						<input type="hidden" name="tipo" value="editar">
						<input type="hidden" name="id" value="<?php echo $linha['idLivro'] ?>">

		<div class="mb-3">
    		<label for="titulo" class="form-label">Título</label>
    			<input type="text" class="form-control" id="autor" name="titulo" value="<?php echo $linha['titulo'] ?>">
    	<div class="mb-3">
    		<label for="autor" class="form-label">Autor</label>
	    		<input type="text" class="form-control" id="autor" name="autor" value="<?php echo $linha['autor'] ?>">
  		</div>
  		<div class="mb-3">
    		<label for="pagina" class="form-label">Páginas</label>
	    		<input type="number" class="form-control" id="paginas" name="paginas" min="1" value="<?php echo $linha['paginas'] ?>">
  		</div>
  
  		<input type="submit" class="btn btn-primary" value="Atualizar">

				</form>
			</div>
		</div>
	</div>
</body>
</html>