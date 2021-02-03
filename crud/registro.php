<?php
if($_POST){
	$senha = $_POST['senha'];
	$csenha = $_POST['csenha'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];

	require_once("Conexao.php");
	$conexao = new Conexao();

	// Verifica se o email já está cadastrado
	$dados = $conexao->getCon()->prepare('SELECT email FROM usuarios WHERE email = ?');
	$dados->bindParam(1, $email);
	$dados->execute();
	if ($dados->rowCount() > 0) {
		echo "<script type='text/javascript'>alert('email já cadastrado');</script>";
	}else{

		$sql = "INSERT INTO usuarios(nome, email) VALUES(?,?);";
		$cmd = $conexao->getCon()->prepare($sql);
		$cmd->bindParam(1,$nome);
		$cmd->bindParam(2,$email);
		$cmd->execute();

		$senha = encripta($senha,$email);
		$sql2 = "INSERT INTO senhas(idusr, senha) VALUES(LAST_INSERT_ID(),?);";
		$cmd2 = $conexao->getCon()->prepare($sql2);
		$cmd2->bindParam(1,$senha);
		$cmd2->execute();

		echo "<script type='text/javascript'>alert('Cadastro feito com sucesso!')</script>";
	}
}else{
	echo 'Erro no processo';
}
?>