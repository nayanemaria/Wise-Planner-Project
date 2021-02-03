<?php
//Conexão Com Banco De Dados Utilizando A Biblioteca PDO
//BIBLIOTECA PDO - PHP DATA OBJECTS

//Criando A Classe
class Conexao{
	private $con;
	public function getCon(){
		return $this->con;
	}
	public function setCon($data){
		$this->con = $data;
	}
	//Criando O Construtor
	public function __construct(){
		//Criando A Estrutura Try Catch
		try {
			//Endereço Da Conexão
			$servidor = "localhost"; //3306 Porta Padrão Do MySQL Do Protocolo TCP
			$usuario = "root";
			$pass = "";
			$bd = "banco";
			//new pdo É A Instância Da Biblioteca PDO
			//new pdo(OndeConectar,QuemConecta,senha);
			$this->setCon(new PDO("mysql:host=$servidor;dbname=$bd",$usuario,$pass)); //A Instância PDO Expecifica O Local Do Servidor,O Banco,O Usuário E A Senha
			$this->setCon(new PDO("mysql:host=$servidor;dbname=$bd",$usuario,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")));
			//Erros Em Cõnexoes
			$this->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //ENCAPSULAMNETO GLOBAL (Trasforma O Atributo ATTR_ERMODE Para Uma Excessão)
			
			 function isLoggedIn(){
                if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){
                    return false;
                }
                return true;
            }
			function encripta($senha,$email){
                $cripto = crypt($senha,$email);
                $senha = base64_encode($cripto);
                return $senha;
            }
        } catch (PDOException $ex) {
            echo "{$ex->getMessage()} <br />"; //Transforma Mensagens Do Console Em Objetos
        }
    }
}
?>