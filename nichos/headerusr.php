<?php
session_start();
require_once("crud/Conexao.php");
$conexao = new Conexao();
if (!isLoggedIn()){ header('Location: index.php');}
$id = $_SESSION['id'];
$nome = $_SESSION['nome'];
?>
<div class='menu-container clearfix'>
    <button class='nav_menu_toggler_icon'><span class='fa fa-bars'></span></button>
    <nav class='manu clearfix'>
        <ul>
            <li><a href='indexusr.php'>Início</a></li>
            <li><a href='carteira.php'>Carteira</a></li>
            <li><a href='bancos.php'>Bancos</a></li>
            <li><a href='cartoescredito.php'>Cartões de Crédito</a></li>
            <li><a href='balancos.php'>Balanços</a></li>
            <li><a href='crud/sair.php'>Sair</a></li>
        </ul>
    </nav>
</div>