<?php
$login_cookie = $_COOKIE['login'];
	$consulta2 = mysql_query("SELECT * FROM Dados_User WHERE User='$login_cookie'") or die(mysql_error());
		if (mysql_num_rows($consulta2)>0)
		{
			$query2 = mysql_fetch_array($consulta2);
			extract($query2);
			{
				$Total2 = $LaqueusGG + 1;
				$sql2 = "UPDATE Dados_User SET LaqueusGG='$Total2' WHERE User='$login_cookie'";			
				mysql_query($sql2) or die(error());
			}
		}
?>