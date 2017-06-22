<?php 
<<<<<<< HEAD
	session_start();

	/* DATABASE CONFIGURATION */
	define('host', 'localhost');
	define('login', 'root');
	define('senha', '');
	define('db', 'projetodw');
	//define("BASE_URL", "http://localhost/projeto_dw/login/");

	function getDB(){
		$host = host;
		$login = login;
		$db = db;
		$senha = senha;
		
		try{
			//Criar a conexão
			$con = new PDO("mysql:host=$host; dbname=$db",$login, $senha, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
			return $con;
		}
		catch(PDOException $e){
			echo 'Conecção com o Banco de Dados falhou: ' . $e->getMessage();
		}
	}
=======
	$host = 'localhost';
	$login = 'root';
	$db = 'projetofinalweb';
	$senha = '';
			
	//Criar a conexão
	$con = new PDO("mysql:host=$host; dbname=$db",$login, $senha, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
>>>>>>> origin/master
?>