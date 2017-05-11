
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Adicionar Disciplina</title>
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
					
		<form class="well form-horizontal" action="salvar_materia.php" method="POST" id="contact_form">
		<fieldset>
			
			<!-- Text input-->
			<div class="form-group">
				<label class="col-md-4 control-label">Nome da Disciplina</label>  
					
				<div class="col-md-4 inputGroupContainer">
				
					<div class="input-group">
						<input id="materia" name="materia" placeholder="Nome da Matéria" class="form-control"  type="text">
					</div>
					
				</div>
				
			</div>

			<!-- Button -->
			<div class="form-group">
			
				<label class="col-md-4 control-label"></label>
				<div class="col-md-4">
				
					<button type="submit" class="btn btn-warning">Adicionar</button>
					
				</div>
				
			</div>
			
		</fieldset>
		</form>
	</div>
</body>
</html>
