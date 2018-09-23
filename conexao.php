<?php
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "estacao_4";
	
	$conexao = @mysqli_connect ($host, $usuario, $senha) or die (mysql_error());
	
	mysqli_select_db ($conexao, $banco) or die (mysql_error());
?>