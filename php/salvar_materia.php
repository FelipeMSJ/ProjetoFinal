<?php
	include('config.php');
	include('session.php');
	
	$db = getDB();
	
	//Adiciona o matéria escrita pelo usuário
	$nome_materia = $_POST['materia_nome'];

	//Adiciona o valor descrito ao banco de dados
	
		$result_nome_materia = $db->prepare("INSERT INTO materias (materia_nome) VALUES (:materia_nome)");
		$result_nome_materia->bindValue(':materia_nome', $nome_materia, PDO::PARAM_STR);
		if($result_nome_materia->execute()){
			header('Location: ../pp.php');
		}
		else{
			echo "Erro ao adicionar a matéria";
			print_r($result_nome_materia->errorInfo());
		}

	
?>