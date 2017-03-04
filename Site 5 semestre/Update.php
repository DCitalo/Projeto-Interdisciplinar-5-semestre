<?php
	
	include "conexao.php";
	extract($_POST);
	$login_cookie = $_COOKIE['login'];
	$nome = $login_cookie;
	$sql = "UPDATE usuarios SET Save='$Save' WHERE login='$nome'";
	
	mysql_query($sql) or die(error());
?>