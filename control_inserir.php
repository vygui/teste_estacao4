<?php
	
	header('Content-Type: text/html; charset=utf-8');
	include 'conexao.php';
	
	mysqli_query($conexao, "SET NAMES 'utf8'");
	mysqli_query($conexao, 'SET character_set_connection=utf8');
	mysqli_query($conexao, 'SET character_set_client=utf8');
	mysqli_query($conexao, 'SET character_set_results=utf8');
	
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$preco = strtr ($preco, "," , ".");
	//$preco = str_replace(',','.',$preco);
	//$preco = number_format($preco_f, 2, '.', '');
	
	$descricao = $_POST['descricao'];
	
	$sql = "INSERT INTO tab_produtos (nome, descricao, preco) VALUES ('$nome', '$descricao', '$preco')";
	
	mysqli_query($conexao, $sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Open Graph -->
	<meta property="og:title" content="Teste Estação 4" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="#" />
	<meta property="og:site_name" content="Teste Estação 4" />
	<meta property="og:description" content="Esta página contem um programa capaz de gerenciar um cadastro de produtos" />
		
	<meta charset="utf-8" />

	<title>Teste Estação 4</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!--boot-->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />
	
	<script src="js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="css/estilo_geral.css" />
	<style>
		#numero {
			display: inline;
		}
	</style>
</head>
<body>


	<div class="container">
	
	<div class="row">
		<div class="col-sm-8 offset-sm-2 centralizado">
			<h1>Produto inserido com sucesso. Você será redirecionado para a Home em <p id="numero">5</p> segundos.</h1>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-8 offset-sm-2 centralizado">
			<button type="button" onclick="window.location='index.php'" class="btn btn-primary btn-lg btn-block">Voltar agora</button>
		</div>
	
	</div>
	
	
	

	
	<script src="js/bootstrap.min.js"></script>
	<script> 
		
		setTimeout(function(){
			document.getElementById("numero").innerHTML="4";
		} , 1000); 
		setTimeout(function(){
			document.getElementById("numero").innerHTML="3";
		} , 2000); 
		setTimeout(function(){
			document.getElementById("numero").innerHTML="2";
		} , 3000); 
		setTimeout(function(){
			document.getElementById("numero").innerHTML="1";
		} , 4000); 
		
		setTimeout(function(){
			document.getElementById("numero").innerHTML="0";
			location.href="index.php"; 
		} , 5000); 
	</script>
</body>
