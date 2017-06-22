<?php 
	session_start();

	$host = 'mysql.hostinger.com.br';
	$login = 'u786728055_root';
	$db = 'u786728055_dw';
	$senha = 'projetodw';
	
	define('host', 'mysql.hostinger.com.br');
	define('login', 'u786728055_root');
	define('senha', 'projetodw');
	define('db', 'u786728055_dw');

	//Criar a conexão
	$con = new PDO("mysql:host=$host; dbname=$db",$login, $senha, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

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
?>
