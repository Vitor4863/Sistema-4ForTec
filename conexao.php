<?php
// Criacao das variaveis para passagem das informacoes $enderecoDB, $usuarioDB, $senhaDB, $nomeDB. A abreviacao DB é de Data Base (Base de Dados)
$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "teste";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
?>