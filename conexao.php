<?php 

		try {

			$conn = new PDO("mysql:dbname=biblioteca;host=localhost", "root", "");
			
			
		} catch (Exception $e) {
			echo "Erro na conexão".$e->getMessage();
		}

?>