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
		span {
			color: red;
		}
	</style>
</head>
<body>
<?php
	header('Content-Type: text/html; charset=utf-8');
	include 'conexao.php';
	
	mysqli_query($conexao, "SET NAMES 'utf8'");
	mysqli_query($conexao, 'SET character_set_connection=utf8');
	mysqli_query($conexao, 'SET character_set_client=utf8');
	mysqli_query($conexao, 'SET character_set_results=utf8');
	
	$id = $_GET['id'];
	
	
	$sql = mysqli_query($conexao,"SELECT * FROM tab_produtos WHERE (id LIKE '$id')");
	
	$achou =  mysqli_num_rows($sql);
	
	if ($achou == 0) {
	//PRODUTO NÃO ENCONTRADO
?>
	<div class="container">
	<div class="row">
		<div class="col-sm-8 offset-sm-2 centralizado">
			<h1>A ID: <?php echo $id; ?> <span>não</span> foi <span>encontrada</span></h1>
		</div>
	</div>
	</div>
	
	<div class="container">
	<div class="row">	
		
		<div class="col-sm-6 offset-sm-3 mb-3">
			<button type="button" onclick="window.history.back()" class="btn btn-primary btn-block">Voltar</button>
		</div>
	</div>
	</div>
<?php
	} else {
		//PRODUTO ENCONTRADO
		$dados = mysqli_fetch_array($sql);
?>
	<div class="container">
	
	<div class="row">
		<div class="col-sm-8 offset-sm-2 centralizado">
			<h1>Remover ID: <?php echo $dados['id']; ?> - <span style="color: #d50000;"><?php echo $dados['nome']; ?></span></h1>
		</div>
	</div>
	</div>
	
	<div class="container">
	<form action="control_deletar.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>" />
		<div class="form-row">
			<div class="col-md-6 mb-3">
				<button type="submit" class="btn btn-danger btn-block">Remover</button>
			</div>
			<div class="col-md-6 mb-3">
				<button type="button" onclick="window.location='index.php'" class="btn btn-primary btn-block">Cancelar</button>
			</div>
		</div>
		
	</form>
	
	</div>
<?php
	}
?>





	
	
	
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>