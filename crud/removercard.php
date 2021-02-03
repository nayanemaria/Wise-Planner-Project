<?php
	if($_GET['ncart'] != null){
			require_once("Conexao.php");   
			$conexao = new Conexao();
			$consulta = "SELECT * FROM cardcreds WHERE ncart=:ncart;";
			$comando = $conexao->getCon()->prepare($consulta);
			$comando->bindParam("ncart", $_GET['ncart']);
			$comando->execute();
			$objeto = $comando->fetch(PDO::FETCH_OBJ);
			$conexao->getCon()->exec("DELETE FROM cardcreds WHERE ncart={$objeto->ncart}");
			header("Location: ../cartoescredito.php");
			
		}else{
			header("Location: index.php");
		}
?>