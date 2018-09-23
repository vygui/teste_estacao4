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
		p {
			padding-top: 1.4em;
			padding-bottom: 1.1em;
		}
		
	</style>
</head>
<body>


	<div class="container">
	
	<div class="row">
		<div class="col-sm-8 offset-sm-2 centralizado">
			<h1>Digite o ID do produto que deseja realizar alterações</h1>
		</div>
	</div>
	</div>
	
	<div class="container">
		<form action="atualizar.php" method="GET">
		<div class="form-row">
			<div class="input-group col-sm-6 offset-sm-3 mb-3">
				<input type="text" class="form-control" name="id" placeholder="Digite um ID" />
				<div class="input-group-append">
					<button class="btn btn-primary" type="submit" id="button-addon2">Alterar</button>
				</div>
			</div>
		</div>
		</form>
	</div>
	
	
	<div class="container">
	
	<div class="row">
		<div class="col-sm-8 offset-sm-2 centralizado">
			<p>Ou busque o produto em uma lista clicando no botão abaixo:</p>
		</div>
	</div>
	</div>
	
	
	
	
	<div class="container">
		<div class="col-sm-6 offset-sm-3 ">
			<button type="button" onclick="window.location='listar.php'" class="btn btn-secondary btn-block">Buscar na Lista</button>
		</div>
	</div>

	

	
	<script src="js/bootstrap.min.js"></script>
	
</body>