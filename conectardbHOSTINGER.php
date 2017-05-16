<?php 
	$host = 'mysql.hostinger.com.br';
	$login = 'u786728055_root';
	$db = 'u786728055_dw';
	$senha = 'projetodw';
			
	//Criar a conexão
	$con = new PDO("mysql:host=$host; dbname=$db",$login, $senha, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
?>