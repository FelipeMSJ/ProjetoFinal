<?php
<<<<<<< HEAD
	include("php/conectardb.php");
	include('php/session.php');
=======
	include('php/config.php');
	include('php/session.php');
	
	$db = getDB();
>>>>>>> origin/master

	$con = getDB();
	// pega o ID da URL
	$id = isset($_GET['id']) ? (int) $_GET['id'] : null;

	//Valida a variavel da URL
	if (empty($id)){
		echo "ID para alteração não definido";
		exit;
	}

	$sql_msg_contato = "SELECT id, materia_nome FROM materias WHERE id='$id'";
<<<<<<< HEAD
	$result_msg_contato = $con->prepare($sql_msg_contato);
=======
	$result_msg_contato = $db->prepare($sql_msg_contato);
>>>>>>> origin/master
	$result_msg_contato->bindParam(':id', $id, PDO::PARAM_INT);
	$result_msg_contato->execute();

	$resultado_msg_contato = $result_msg_contato->fetch(PDO::FETCH_ASSOC);
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modificar Disciplina</title>
	
	<!--Sidebar-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
	
	<link rel="stylesheet" href="css/style.css">
	
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

	<script src="js/sidebar.js"></script>
	<!--Sidebar-->

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
		<div align="center">
			<br>
			<h1 align="center"><?php echo $resultado_msg_contato['materia_nome'] ?></h1>
		</div>
	</nav>
		<div id="wrapper">
			<div class="overlay"></div>
				<?php
					include('php/sidebar.php');
				?>
					
				<!-- Page Content -->
				<div id="page-content-wrapper">
					<button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
						<span class="hamb-top"></span>
						<span class="hamb-middle"></span>
						<span class="hamb-bottom"></span>
					</button>
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
						
						<input type="hidden" name="id" value="<?php echo $resultado_msg_contato['id']; ?>">
						
					</fieldset>
					</form>
				</div>
				</div>
			<!-- /#page-content-wrapper -->

		</div>
		<!-- /#wrapper -->
</body>
</html>