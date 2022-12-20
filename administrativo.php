<?php
session_start();
if(!empty($_SESSION['id'])){
	echo "Olá ".$_SESSION['nome'].", Bem vindo <br>";
	echo "<a href='sair.php'>Sair</a>";
}else{
	$_SESSION['msg'] = "Área restrita";
	header("Location: login.php");	
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<style>
		@charset "ISO-8859-1";
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	text-decoration: none;
	list-style: none;
	font-family: 'Montserrat', sans-serif;

	
}
body{

}

.PitBull {
	width: 100vw;
}

.PitMain {
	background-image: url("Image/R.jpg");
	background-repeat: no-repeat;
	background-size: cover;
	width: 100vw;
	height: 100vh;
}

.PitBull ul {
	display: flex;
	flex-direction: row;
	gap: 40px;
	width: 100%;
	justify-content: center;
	padding: 20px;
	background-color: #000000;
	color: white;
	font-weight: bold;
	font-size: 20px;
}

.PitForm {
	display: flex;
	flex-direction: column;
	padding: 45px;
	width: 800px;
	height: 500px;
	background-color: white;
	margin: 0 auto;
	margin-top: 4px;
	border-radius: 25px;
	box-shadow: 3px 3px 3px 3px rgba(0, 0, 0, 0.2);
	width: 800px;
	align-items: center;
	align-self: center;
	
}

.PitForm input {
	border-radius: 8px;
	border: 1px solid gray;
	width: 80px;
	padding: 10px;
	width: 400px;
	background-color: #d3d3d3;
}

.PitForm div {
	display: flex;
	align-items: center;
	gap: 15px;
	margin-bottom: 30px;
	gap: 15px;
}

#PitButton {
	background-color: black;
	border: none;
	color: white;
	font-weight: bold;
	cursor: pointer;
	
}
table{
	border: none;
	
	
	display: flex;
	flex-direction: column;
	padding: 45px;
	width: 800px;
	height: 400px;
	background-color: #8B0000;
	color: #d3d3d3;
	margin: 0 auto;
	margin-top: 4px;
	border-radius: 15px;
	box-shadow: 3px 3px 3px 3px rgba(0, 0, 0, 0.2);
	width: 800px;
	align-items: center;
	align-self: center;
	page-break-inside: auto;
	font-family: Arial, Helvetica, sans-serif;
	border-collapse: collapse;
	width: 100%;
	margin-top: 10px;
	
	
}
th{
	border: none;
	font-size: 20px;
	width: 50px;
  padding: 8px;
		
	
}
td{
	border:none ;
	width: 30px;
	
	
}
#Button{
	width:60px;
    margin: 5px;
	margin-top: 5px;
	background-color: #000000;
	color: #ff0000;
	cursor: pointer;
}
footer{
	position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color:#080710 ;
  color: white;
  text-align: center;
}


@media screen and (max-width: 800px) {
  .left, .main, .right {
    width: 100%; /* The width is 100%, when the viewport is 800px or smaller */
  }
}
@media only screen and (max-device-width: 900px) {
/* .menu { width:100%; } */
}
@media only screen and (max-device-width: 700px) {
/* .menu { width:400px; } */
}
@media only screen and (max-device-width: 500px) {
/* .menu { width:400px; } */
}
@media only screen and (max-device-width: 400px) {
/* .menu { width:400px; } */
}
@media only screen and (max-device-width: 300px) {
/* .menu { width:400px; } */
}
	</style>
</head>
<body>
<form action="cad-produto.php" method="post" class="PitForm">
	               <div><img src="img/690580-removebg-preview.png" alt="" width="90px"></div>
			<div>
				<label><strong>Descrição:</strong></label><input type="text"
					name="descricao">
			</div>
			<div>
				<label><strong>Quantidade:</strong></label><input type="text"
					name="quantidade">
			</div>
			<div>
				<label><strong>Preço:</strong></label><input type="text"
					name="preco">
			</div>

			<label><strong>Disponivel On-Line:</strong></label><input
				type="checkbox" name="online">
			<br>
			<div>
				<input id="PitButton" type="submit" name="salvar"
					value="Cadastrar Produto">
			</div>
			<div>			
			<a href="consultar.php">consultar</a>
			
			</div>
		</form>
		<footer>Todos Direitos Reservados</footer>
</body>
</html>


