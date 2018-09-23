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
</head>
<body>


	<div class="container">
	
	<div class="row">
		<div class="col-sm-8 offset-sm-2 centralizado">
			<h1>Preencha o formulário com informações do produto:</h1>
		</div>
	</div>
	</div>
	
	<div class="container">
	<form action="control_inserir.php" method="post">
		<div class="form-row">
			<div class="col-md-8 mb-3">
				<label for="cp_nome">Nome:</label>
				<input type="text" class="form-control" id="cp_nome" name="nome" placeholder="Produto" required>
			</div>
			<div class="col-md-4 mb-3">
				<label for="cp_preco">Preço:</label>
				<input type="text" class="form-control" id="cp_preco" name="preco" placeholder="R$ 2,00" >
			</div>
		</div>
		
		<div class="form-row">
			<div class="col-md-12 mb-3">
				<label for="cp_descricao">Descrição:</label>
				<textarea class="form-control" id="cp_descricao" name="descricao" rows="5"></textarea>
			</div>
		</div>

		<button type="submit" class="btn btn-primary">Inserir Produto</button>
		<button type="button" onclick="window.history.back()" class="btn btn-danger">Cancelar</button>
	</form>
	</div>
	

	
	<script src="js/bootstrap.min.js"></script>
	<script>
	$(document).ready(function(){
		$('#cp_preco').mask("###0,00", {reverse: true});
	});
	</script>
</body>