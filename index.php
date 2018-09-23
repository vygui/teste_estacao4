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
		
		h1 {
			padding-top: 2.1em;
			padding-bottom: 1.4em;
			font-size: 2.4em;
		}
		
		.caixas {
			padding: 10px;
		}

	</style>
</head>
<body>


	<div class="container">
	
	<div class="row">
		<div class="col-sm-8 offset-sm-2 centralizado">
			<h1>Escolha uma opção abaixo:</h1>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-0 col-lg-3 offset-lg-0 caixas">
			<button type="button" onclick="window.location='inserir.php'" class="btn btn-primary btn-lg btn-block">Inserir Produto</button>
		</div>
		<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-0 col-lg-3 offset-lg-0 caixas">
			<button type="button" onclick="window.location='listar.php'" class="btn btn-primary btn-lg btn-block">Listar Produto</button>
		</div>
		<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-0 col-lg-3 offset-lg-0 caixas">
			<button type="button" onclick="window.location='produto_alt.php'" class="btn btn-primary btn-lg btn-block">Atualizar Produto</button>
		</div>
		<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-0 col-lg-3 offset-lg-0 caixas">
			<button type="button" onclick="window.location='produto_del.php'" class="btn btn-primary btn-lg btn-block">Remover Produto</button>
		</div>

	</div>
	
	</div>
	
	
	

	
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>