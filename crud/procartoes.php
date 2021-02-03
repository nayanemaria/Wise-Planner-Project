<?php 
require_once("Conexao.php");   
 $conexao = new Conexao();
	$sql = "INSERT INTO cardcreds(idusr,nomecart,ncart,datavenc,limitetotal,limitedispo) VALUES(?,?,?,?,?,?);";
	$comando = $conexao->getCon()->prepare($sql);
	$comando->bindParam(1,$_POST['idusr']);
	$comando->bindParam(2,$_POST['nomecart']); //Delimita O Campo Da String E O Valor Dela
	$comando->bindParam(3,$_POST['ncart']);
	$comando->bindParam(4,$_POST['datavenc']);
	$comando->bindParam(5,$_POST['limitetotal']);
	$comando->bindParam(6,$_POST['limitetotal']);
	$comando->execute(); //Exeuta Uma String Pré-Formatada
	header("Location: ../cartoescredito.php");
?>