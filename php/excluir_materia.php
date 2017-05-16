<?php
	//Conectar ao banco de dados
	include("conectardb.php");
	
	//Recebe a matéria escrita pelo usuário
	$id = $_GET['id'];

	//Modifica o valor descrito ao banco de dados
	
	$exc_materia = "DELETE FROM usuarios WHERE usuarios.id = :id";
	$result_exc_materia = $con->prepare($exc_materia);
	$result_exc_materia->bindParam(':id', $id, PDO::PARAM_INT);
	if($result_exc_materia->execute()){
		header('Location: ../pp.php');
	}
	else{
		echo "Erro ao modificar a matéria";
		print_r($result_exc_materia->errorInfo());
	}	
?>