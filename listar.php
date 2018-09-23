<?php
	
	header('Content-Type: text/html; charset=utf-8');
	include 'conexao.php';
	
	mysqli_query($conexao, "SET NAMES 'utf8'");
	mysqli_query($conexao, 'SET character_set_connection=utf8');
	mysqli_query($conexao, 'SET character_set_client=utf8');
	mysqli_query($conexao, 'SET character_set_results=utf8');
	
	
	
	$sql = "SELECT * FROM tab_produtos ORDER BY nome";
	
	$produtos = mysqli_query($conexao, $sql) or die (mysqli_error());
	

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
		.clara {
			background-color: #f1f1f1;
			padding: 0.3em;
		}
		
		.escura {
			background-color: #e3e3e3;
			padding: 0.3em;
		}
		.box {
			margin-top: 0.2em;
			margin-bottom: 0.2em;
			padding: 0.2em;
		}
	
	</style>
</head>
<body>


	<div class="container">
	
	<div class="row">
		<div class="col-sm-8 offset-sm-2 centralizado">
			<h1>Abaixo constam todos os produtos cadastrados em ordem alfabética.</h1>
		</div>
	</div>
	
	
	<?php
	$i = 1;
	while($t_produtos = mysqli_fetch_array($produtos)) {
		if ($i % 2 == 0) { $class = "clara"; } else { $class = "escura"; }
		$preco = number_format($t_produtos['preco'], 2, ',', '.');
	?>
	<div class="row box">
		<div class="col-sm-7 offset-sm-1 <?php echo $class; ?>">
			<b>ID: </b><?php echo $t_produtos['id']; ?> - <b>Produto:</b> <?php echo $t_produtos['nome']; ?>
		</div>
		<div class="col-sm-3 <?php echo $class; ?>">
			Preço: R$ <?php echo $preco; ?>
		</div>
		<div class="col-sm-10 offset-sm-1 <?php echo $class; ?>">
			Descrição: <?php echo $t_produtos['descricao']; ?>
		</div>
		<div class="col-sm-10 offset-sm-1 <?php echo $class; ?>">
			<a href="atualizar.php?id=<?php echo $t_produtos['id']; ?>">Alterar</a> | <a href="deletar.php?id=<?php echo $t_produtos['id']; ?>">Excluir</a>
		</div>
	</div>
	<?php
		$i++;
	}
	
	?>
		
	
	
	
	
	
	
	
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>