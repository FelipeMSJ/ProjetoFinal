<?php
	$pp = 'pp.php';

	include("conectardb.php");
	//Adiciona o matéria escrita pelo usuário
	$nome_materia = $_POST['materia'];

	//Modifica o valor descrito ao banco de dados
	if(!empty($nome_materia)){
		$con->beginTransaction();
			$result_nome_materia = $con->prepare("UPDATE usuarios SET materia_nome = 'Desenvolvimento Web' WHERE id = 2");
			$result_nome_materia->bindValue(':materia_nome', $nome_materia, PDO::PARAM_STR);
			$result_nome_materia->execute();
		$con->commit();
		echo("<a href= '$pp'>Matéria modificada com sucesso, clique para continuar</a>");
	}
	else {
		echo("<a href= '$pp'>Campo vazio, não foi possível atualizar</a>");
	}
		
?>