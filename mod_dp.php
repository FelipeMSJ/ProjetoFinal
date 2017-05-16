<?php
	include("php/conectardb.php");

	// pega o ID da URL
	$id = isset($_GET['id']) ? (int) $_GET['id'] : null;

	//Valida a variavel da URL
	if (empty($id)){
		echo "ID para alteração não definido";
		exit;
	}

	$sql_msg_contato = "SELECT id, materia_nome FROM usuarios WHERE id='$id'";
	$result_msg_contato = $con->prepare($sql_msg_contato);
	$result_msg_contato->bindParam(':id', $id, PDO::PARAM_INT);
	$result_msg_contato->execute();

	$resultado_msg_contato = $result_msg_contato->fetch(PDO::FETCH_ASSOC);
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modificar Disciplina</title>
	<link href="css/estilo.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/javascript.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/npm.js"></script>
</head>

<body> 
	<nav class="menu">
		
	</nav>
	
	<div class="container">
					
		<form class="well form-horizontal" action="php/modificar_materia.php" method="POST" id="contact_form">
		<fieldset>
			
			<!-- Text input-->
			<div class="form-group">
				<label class="col-md-4 control-label">Nome da Disciplina</label>  
					
				<div class="col-md-4 inputGroupContainer">
				
					<div class="input-group">
						<input id="materia_nome" name="materia_nome" placeholder="<?php echo $resultado_msg_contato['materia_nome'] ?>" class="form-control"  type="text">
					</div>
					
				</div>
				
			</div>

			<!-- Button -->
			<div class="form-group">
			
				<label class="col-md-4 control-label"></label>
				<div class="col-md-4">
				
					<button type="submit" class="btn btn-warning">Modificar</button>
					
				</div>
				
			</div>
			
			
			
		</fieldset>
		</form>
	</div>
</body>
</html>