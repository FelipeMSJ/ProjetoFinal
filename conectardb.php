<?php /*?><?php */?><?php
				$host = 'localhost';
				$login = 'root';
				$db = 'adicionar_dp';
				$senha = '';
			
				$nome = $_POST["nome"];
			
				//Criar a conexão
				$conn = mysqli_connect($host, $login, $senha, $db);
				
				
				if(!$conn){
					die("Não foi possível conectar com o servidor" .mysql_error());
				}
			
				$banco = mysqli_select_db( $conn, $db);
				if(!$db) {
					die("Não foi possível conectar com o Banco de Dados" .mysql_error());
				}
			
				$query = "INSERT INTO 'usuarios' VALUES (default, '$nome')";
				mysqli_query($conn, $query);
			
				//if($_SERVER['REQUEST_METHOD']=='POST'){
//					$request = md5(implode($_POST));
//					if(isset($_SESSION['ultima_request']) && $_SESSION['ultima_request'] == $request){
//						echo "Matéria já adicionada";
//					}
//					else{	
//						$_SESSION['ultima_request'] = $request;
//						$materia_nome = $_POST['materia_nome'];
//						$_SESSION['materia_nome'] = $materia_nome;					
//						$result_nome_materia = "";
//						mysqli_query($conn, $result_nome_materia);
//
//						//ID do usuario inserido
//						$ultimo_id = mysqli_insert_id($conn);	
//						echo $ultimo_id;
//					}
//				}				
							
?>