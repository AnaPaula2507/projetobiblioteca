<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastrar</title>
</head>
<body>
	<?php 
		include_once "index.php";
	?>
	<div class="container">
		<div class="row">
			<div class="col">
				<form action="sistema.php" method="post">
					<h1>Cadastro de Livros</h1>

						<input type="hidden" name="tipo" value="incluir">

		<div class="mb-3">
    		<label for="titulo" class="form-label">Título</label>
    			<input type="text" class="form-control" id="autor" name="titulo">
    	<div class="mb-3">
    		<label for="autor" class="form-label">Autor</label>
	    		<input type="text" class="form-control" id="autor" name="autor">
  		</div>
  		<div class="mb-3">
    		<label for="pagina" class="form-label">Páginas</label>
	    		<input type="number" class="form-control" id="paginas" name="paginas" min="1">
  		</div>
  
  		<input type="submit" class="btn btn-primary" value="Cadastrar">

				</form>
			</div>
		</div>
	</div>
</body>
</html>