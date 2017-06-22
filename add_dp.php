<?php
<<<<<<< HEAD
	include('php/conectardb.php');
=======
	include('php/config.php');
>>>>>>> origin/master
	include('php/session.php');
?>

<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Adicionar Disciplina</title>
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
				<h1 align="center">Adicionar Disciplina</h1>
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

					<form class="well form-horizontal" action="php/salvar_materia.php" method="POST" id="contact_form">
						<fieldset>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label">Nome da Disciplina</label>

								<div class="col-md-4 inputGroupContainer">

									<div class="input-group">
										<input id="materia_nome" name="materia_nome" placeholder="Nome da Matéria" class="form-control" type="text">
									</div>

								</div>

						</div>

						<!-- Button -->
						<div class="form-group">

							<label class="col-md-4 control-label"></label>
							<div class="col-md-4">
								<button type="submit" class="btn btn-warning">Adicionar </button>
							</div>

						</div>

					</fieldset>
				  </form>
				</div>
			</div>
			<!-- /#page-content-wrapper -->

		</div>
		<!-- /#wrapper -->
	</body>
</html>
