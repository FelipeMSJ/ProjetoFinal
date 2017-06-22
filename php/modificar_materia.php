<?php
	//Conectar ao banco de dados
<<<<<<< HEAD
	include("conectardb.php");
	include('session.php');

	$con = getDB();
=======
	include('config.php');
	include('session.php');
	
	$db = getDB();
	
>>>>>>> origin/master
	//Recebe a matéria escrita pelo usuário
	$nome_materia = $_POST['materia_nome'];
	$id = $_POST['id'];

	if(empty($nome_materia)){
		echo("Campo vazio, volte e preencha para poder modificar");
		exit();
	}

	//Modifica o valor descrito ao banco de dados
	$mod_materia = "UPDATE materias SET materia_nome = :materia_nome WHERE materias.id = :id";
<<<<<<< HEAD
	$result_mod_materia = $con->prepare($mod_materia);
=======
	$result_mod_materia = $db->prepare($mod_materia);
>>>>>>> origin/master
	$result_mod_materia->bindParam(':materia_nome', $nome_materia, PDO::PARAM_STR);
	$result_mod_materia->bindParam(':id', $id, PDO::PARAM_INT);
	if($result_mod_materia->execute()){
		header('Location: ../pp.php');
	}
	else{
		echo "Erro ao modificar a matéria";
		print_r($result_mod_materia->errorInfo());
	}	
?>