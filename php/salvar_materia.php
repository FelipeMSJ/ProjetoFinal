<?php
	include("conectardb.php");
	//Adiciona o matéria escrita pelo usuário
	$nome_materia = $_POST['materia_nome'];

	//Adiciona o valor descrito ao banco de dados
	
		$result_nome_materia = $con->prepare("INSERT INTO usuarios (materia_nome) VALUES (:materia_nome)");
		$result_nome_materia->bindValue(':materia_nome', $nome_materia, PDO::PARAM_STR);
		if($result_nome_materia->execute()){
			header('Location: ../pp.php');
		}
		else{
			echo "Erro ao adicionar a matéria";
			print_r($result_nome_materia->errorInfo());
		}

	
?>