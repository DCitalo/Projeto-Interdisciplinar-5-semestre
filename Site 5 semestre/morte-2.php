<?php
	
	include "conexao.php";	
	$consulta = mysql_query("SELECT * FROM Dados WHERE ID='1'") or die(mysql_error());
		if (mysql_num_rows($consulta)>0)
		{
			$query = mysql_fetch_array($consulta);
			extract($_POST);
			extract($query);
			{
				$Total = $Caedes + 1;
				$sql = "UPDATE Dados SET Caedes='$Total' WHERE ID='1'";			
				mysql_query($sql) or die(error());
			}
		}
	$login_cookie = $_COOKIE['login'];
	$consulta2 = mysql_query("SELECT * FROM Dados_User WHERE User='$login_cookie'") or die(mysql_error());
		if (mysql_num_rows($consulta2)>0)
		{
			$query2 = mysql_fetch_array($consulta2);
			extract($query2);
			{
				$Total2 = $CaedesPP + 1;
				$sql2 = "UPDATE Dados_User SET CaedesPP='$Total2' WHERE User='$login_cookie'";			
				mysql_query($sql2) or die(error());
			}
		}
?>