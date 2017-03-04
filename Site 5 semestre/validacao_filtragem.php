<?php
	session_start();

	include("conecta.php");	

	$emailLogin = $_SESSION['emailLogin'];		

	$interesse = $_POST['interesse'];
	$estado = $_POST['uf'];
	$cidade = $_POST['cidade'];
	$tipores = $_POST['tipores'];	
	$espaco = $_POST['espaco'];
	$string = str_replace("/", "", $_POST['nascimento']); 
	$dataBanco =  date("Y-m-d", strtotime($string));

	echo $interesse, $estado, $cidade, $tipores, $espaco, $dataBanco;

	/*
	if (isset($_POST['finalizar'])) { 
		$sql = "UPDATE perfil SET 
			interesse=		'$interesse',
			estado=	 		'$estado', 
			cidade=	 		'$cidade',
			tipores=	 	'$tipores', 
			tamanho=	 	'$espaco', 
			nascimento= 	'$dataBanco' 
			where email='$emailLogin'";

		$query = mysql_query($sql, $conexao); 	
		echo '<p>Prontinho, seus dados foram cadastrados com sucesso!</p>';	
		echo $interesse, $tipores, $espaco, $dataBanco;
	}
	/*

	//$sql = "update perfil set (interesse, estado, cidade, tipores, tamanho, nascimento) values ('" .$interesse. "', '" .$estado. "', '" .$cidade. "', '" .$tipores. "', '" .$espaco. "', '" .$dataBanco. "',) where email=$emailL";      
	*/
?>