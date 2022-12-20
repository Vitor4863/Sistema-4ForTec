<?php

// Executa a conexao com o mysql e selecionar a base
include_once 'conexao.php';

//Recupera os dados enviados via POST
// recebe o Nome

$descricao= $_POST["descricao"];
// recebe o Email
$quantidade = $_POST["quantidade"];
// recebe a senha Digitada
$Preço = $_POST["preco"];
// recebe o perfil do usuario
$online = $_POST["online"];



//montar a query sql de gravação recebendo as variaveis via post

$sql = "INSERT INTO produtoC values (null,'$descricao', '$quantidade', '$Preço', '$online')";


//Faz a conexao e executa a instrucao carregada na varivael $sql e os envia para o banco mysql.
if (mysqli_query($conn, $sql)){
    // Caso a conexao esteja correta cria o retorno do cadastro
    $msg = "Cadastrado com sucesso!";
}else{    
    // Caso a conexao nao seja realizada cria o retorno do cadastro com erro
    $msg = "Erro ao Cadastrar";
}
// Encerra a conexão com o banco
mysqli_close($conn);
// Cria um alert javascript carrega o conteúdo da variável $msg e redireciona para o index
echo "<script>alert ('".$msg."'); location.href='consultar.php';</script>"
        

?>