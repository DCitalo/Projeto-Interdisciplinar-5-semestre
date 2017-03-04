<?php
	include "conexao.php";
	unset($_COOKIE[$save]);
	$login_cookie = $_COOKIE['login'];
	$nome = $login_cookie;
	$save = $_POST['resp_1'];
	$sql = "UPDATE usuarios SET Save='$save' WHERE login='$nome'";
	
	mysql_query($sql) or die(error());
	$response = array("success" => true);
	echo json_encode($response);
?>