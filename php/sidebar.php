<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Sidebar</title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>

	<link rel="stylesheet" href="css/style.css">
	
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

	<script src="js/index.js"></script>
	
</head>

<body>
	<div class="overlay"></div>

		<!-- Sidebar -->
		<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
			<ul class="nav sidebar-nav">
				<li class="sidebar-brand">
					<a href="#">Panda</a>
				</li>
				<li>
					<a href="pp.php"><i class="fa fa-fw fa-home"></i> Página Inicial</a>
				</li>
				<li>
					<a href="#"><i class="fa fa-user" aria-hidden="true"></i> Perfil</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-book" aria-hidden="true"></i> Disciplinas <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li class="dropdown-header">Lista de Disciplinas</li>
							<?php
								include 'conectardb.php';
								$consulta = $con->query("SELECT materia_nome FROM usuarios ORDER BY materia_nome ASC");
								while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
									echo ("<li><a href=\"a\">{$linha['materia_nome']}</a></li>");
								}
							?>
						<li class="dropdown-header"><a href="add_dp.php">Adicionar Disciplina</a></li>
					</ul>
				</li>
				<li>
					<a href="#"><i class="fa fa-power-off" aria-hidden="true"></i> Sair</a>
				</li>
			</ul>
		</nav>
		<!-- /#sidebar-wrapper -->
	</body>
</html>
