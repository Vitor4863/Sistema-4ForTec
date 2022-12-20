<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Pesquisar</title>		
	</head>
	<body>
		<a href="administrativo.php">Cadastrar</a><br>
	
		
		<h1>Pesquisar Usuário</h1>
		
		<form method="POST" action="">
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome"><br><br>
			
			<input name="SendPesqUser" type="submit" value="Pesquisar">
		</form><br><br>
		
		<?php
		$SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
		if($SendPesqUser){
			$nome = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
            $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_STRING);
			$result_usuario = "SELECT * FROM produtoC WHERE descricao LIKE '%$nome%'";
            
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
				echo "ID: " . $row_usuario['id'] . "<br>";
				echo "descricao: " . $row_usuario['descricao'] . "<br>";
				echo "preco: " . $row_usuario['preco'] . "<br>";
				echo "<a href='edit_usuario.php?id=" . $row_usuario['id'] . "'>Editar</a><br>";
				echo "<a href='proc_apagar_usuario.php?id=" . $row_usuario['id'] . "'>Apagar</a><br><hr>";
			}
		}
		?>
	</body>
</html>