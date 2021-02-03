<?php
	require_once("Conexao.php");
	$conexao = new Conexao();
	$comando = $conexao->getCon()->prepare("UPDATE cardcreds SET limitetotal=:limitetotal WHERE ncart=:ncart AND idusr=:idusr;");
	$comando->bindParam("limitetotal", $_POST['limitetotal']);
	$comando->bindParam("idusr", $_POST['idusr']);
	$comando->bindParam("ncart", $_POST['ncart']);
	$comando->execute();

	header('Location: ../cartoescredito.php');
?>