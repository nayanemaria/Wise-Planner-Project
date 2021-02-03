<?php
    require_once("Conexao.php");
    $conexao = new Conexao();
    
    $email = isset($_POST['emaillogin']) ? $_POST['emaillogin'] : '';
    $senha = isset($_POST['senhalogin']) ? $_POST['senhalogin'] : '';
    $senha = encripta($senha,$email);

    $sql = "SELECT idusr, nome, email, senha FROM usuarios, senhas WHERE email = :email AND senha = :senha";
    $comando = $conexao->getCon()->prepare($sql);    
    $comando->bindParam(':email', $email);
    $comando->bindParam(':senha', $senha);   
    $comando->execute();     
    $usuarios = $comando->fetchAll(PDO::FETCH_ASSOC);    
    if (count($usuarios) <= 0){
        echo "<script type='text/javascript'>alert('email ou senha incorreta');
            location.href='../index.php';</script>";
            exit;
    }    
    // pega o primeiro usuário
    $user = $usuarios[0];
     
    session_start();
    $_SESSION['logged_in'] = true;
    $_SESSION['id'] = $user['idusr'];
    $_SESSION['nome'] = $user['nome'];

    header('Location: ../indexusr.php');
?>