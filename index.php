<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LivrariaCultura</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">				
					<img src="imagens/topo.jpg" class="img-fluid">
			</div>
    </div>
		
		<hr>
		<div class="row">
			<div class="col-sm-12">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="cadastrar.php">Cadastrar Livro</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cadastrarAutor.php">Cadastrar Autor</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Consultar.php">Consultar Livro</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="ConsultarAutor.php">Consultar Autor</a>
                </li>
              </ul>

      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
</nav>
</div>
			<?php
						if(isset($_GET["msg"])){
							echo "<h3><i>".$_GET["msg"]."</i></h3>";
							include_once "exibe.php";
						}
					?>
		</div>
	</div>
</body>
</html>