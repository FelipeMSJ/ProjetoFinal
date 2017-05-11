<?php
	$host = 'localhost';
	$login = 'root';
	$db = 'adicionar_dp';
	$senha = '';
			
	//Criar a conexão
	$con = new PDO("mysql:host=$host; dbname=$db; port=3306",$login, $senha, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

	//Adiciona o matéria escrita pelo usuário
	$nome_materia = $_POST['materia'];
	
	//Adiciona o valor descrito ao banco de dados
	$con->beginTransaction();
		$result_nome_materia = $con->prepare("INSERT INTO usuarios (materia_nome) VALUES (:materia_nome)");
		$result_nome_materia->bindValue(':materia_nome', $nome_materia, PDO::PARAM_STR);
		$result_nome_materia->execute();
	$con->commit();

	echo("Matéria adicionada com sucesso")
?>