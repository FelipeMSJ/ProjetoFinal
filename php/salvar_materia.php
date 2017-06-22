<?php
<<<<<<< HEAD
	include("conectardb.php");
	include('session.php');

	$con = getDB();
=======
	include('config.php');
	include('session.php');
	
	$db = getDB();
	
>>>>>>> origin/master
	//Adiciona o matéria escrita pelo usuário
	$nome_materia = $_POST['materia_nome'];

	//Adiciona o valor descrito ao banco de dados
	
<<<<<<< HEAD
		$result_nome_materia = $con->prepare("INSERT INTO materias (materia_nome) VALUES (:materia_nome)");
=======
		$result_nome_materia = $db->prepare("INSERT INTO materias (materia_nome) VALUES (:materia_nome)");
>>>>>>> origin/master
		$result_nome_materia->bindValue(':materia_nome', $nome_materia, PDO::PARAM_STR);
		if($result_nome_materia->execute()){
			header('Location: ../pp.php');
		}
		else{
			echo "Erro ao adicionar a matéria";
			print_r($result_nome_materia->errorInfo());
		}

	
?>