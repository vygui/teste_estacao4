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
	
	<script src="js/jquery.mask.min.js"></script>
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
		$preco = number_format($dados['preco'], 2, ',', '.');
?>
	<div class="container">
	
	<div class="row">
		<div class="col-sm-8 offset-sm-2 centralizado">
			<h1>ID: <?php echo $dados['id']; ?></h1>
		</div>
	</div>
	</div>
	
	<div class="container">
	<form action="control_atualizar.php" method="post">
		<div class="form-row">
			<div class="col-md-8 mb-3">
				<label for="cp_nome">Nome:</label>
				<input type="text" class="form-control" id="cp_nome" name="nome" value="<?php echo $dados['nome']; ?>" placeholder="Produto" required>
			</div>
			<div class="col-md-4 mb-3">
				<label for="cp_preco">Preço:</label>
				<input type="text" class="form-control" id="cp_preco" name="preco" value="<?php echo $preco; ?>" placeholder="R$ 2,00" >
			</div>
		</div>
		
		<div class="form-row">
			<div class="col-md-12 mb-3">
				<label for="cp_descricao">Descrição:</label>
				<textarea class="form-control" id="cp_descricao" name="descricao" rows="5"><?php echo $dados['descricao']; ?></textarea>
			</div>
		</div>
		<input type="hidden" name="id" value="<?php echo $id; ?>" />
		<button type="submit" class="btn btn-primary">Atualizar</button>
		<button type="button" onclick="window.history.back()" class="btn btn-danger">Cancelar</button>
	</form>
	
	</div>
<?php
	}
?>

	
	
	<script src="js/bootstrap.min.js"></script>
	<script>
	$(document).ready(function(){
		$('#cp_preco').mask("###0,00", {reverse: true});
	});
	</script>
</body>
</html>