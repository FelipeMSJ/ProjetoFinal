<?php 
	include("php/conectardb.php");

	$materias = "SELECT id, materia_nome FROM usuarios ORDER BY id ASC";
	$result_materias = $con->prepare($materias);
	$result_materias->execute();
		
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Página Principal</title>
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
		<link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
		
		<script type="text/javascript" src="js/javascript.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/npm.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
</head>

<body>
	<nav class="menu">
		<div align="center">
			<br>
			<h1 align="center">Página Principal</h1>
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
									
						<div class="well form-horizontal" id="contact_form">
							<fieldset>
							<label class="col-md-4 control-label"></label>
								<div class="col-md-4">
								
								<?php
										
									while($materias_aluno = $result_materias->fetch(PDO::FETCH_ASSOC)): ?>
										
										<a href="chat.php">
											<button type="submit" class="btn btn-warning"><?php echo $materias_aluno['materia_nome'] ?></button>
										</a>

										<a href="mod_dp.php?id=<?php echo $materias_aluno['id']; ?>">
											<button type="submit" class="btn btn-warning">Modificar</button>
										</a>
										
										<a href="php/excluir_materia.php?id=<?php echo $materias_aluno['id']; ?>">
											<button type="submit" class="btn btn-warning">Excluir</button>
										</a>
										<br>
										
								<?php endwhile;?>						
										
									
									<br>
									<a href="add_dp.php">
										<button type="submit" class="btn btn-warning">Adicionar</button>
									</a>
									<!--<a href="mod_dp.php?nome_materia">
										<button type="submit" class="btn btn-warning">Modificar</button>
									</a>-->
									
									
								</div>
							
						</div>
						</fieldset>
					</div>
				</div>
				<!-- /#page-content-wrapper -->

	</div>
	<!-- /#wrapper -->
</body>
</html>