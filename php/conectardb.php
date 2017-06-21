<?php 
	$host = 'localhost';
	$login = 'root';
	$db = 'projetofinalweb';
	$senha = '';
			
	//Criar a conexão
	$con = new PDO("mysql:host=$host; dbname=$db",$login, $senha, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
?>