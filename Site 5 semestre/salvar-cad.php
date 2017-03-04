<?php
	include "conexao.php";
	$nome = $_POST['name'];
	$save = $_POST['save'];
	$senha = $_POST['senha'];
	$sql = "INSERT INTO usuarios (login , senha , Save) VALUES ('$nome' , '$senha' ,'$save')";
	mysql_query($sql) or die(error());
	$response = array("success" => true);
	echo json_encode($response);
?>