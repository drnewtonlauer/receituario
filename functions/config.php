<?php date_default_timezone_set('America/Sao_Paulo');


	$servidor = "localhost";
	$usuario = "corona91_corona9";
	$senha = "wHirmlNLkXIA";
	$dbname = "corona91_drlauer";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	mysqli_query($conn,"SET NAMES 'utf8'");
	mysqli_query($conn,'SET character_set_connection=utf8');
	mysqli_query($conn,'SET character_set_client=utf8');
	mysqli_query($conn,'SET character_set_results=utf8');
//	$db = new mysqli($host, $usuario, $senha, $banco) or die("Erro na conex���o!"); 
?>