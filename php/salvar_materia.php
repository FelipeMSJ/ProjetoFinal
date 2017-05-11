<?php
	include("conectardb.php");
	//Adiciona o matéria escrita pelo usuário
	$nome_materia = $_POST['materia'];

	//Adiciona o valor descrito ao banco de dados
	$con->beginTransaction();
		$result_nome_materia = $con->prepare("INSERT INTO usuarios (materia_nome) VALUES (:materia_nome)");
		$result_nome_materia->bindValue(':materia_nome', $nome_materia, PDO::PARAM_STR);
		$result_nome_materia->execute();
	$con->commit();
	
	$pp = 'pp.php';
	echo("<a href= '$pp'>Matéria adicionada com sucesso, clique para continuar</a>")
?>
