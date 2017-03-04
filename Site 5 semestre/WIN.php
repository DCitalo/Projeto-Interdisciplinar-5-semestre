<?php
	
	include "conexao.php";	
	$consulta = mysql_query("SELECT * FROM Dados WHERE ID='1'") or die(mysql_error());
		if (mysql_num_rows($consulta)>0)
		{
			$query = mysql_fetch_array($consulta);
			extract($_POST);
			extract($query);
			{
				$Total = $Win + 1;
				$sql = "UPDATE Dados SET Win='$Total' WHERE ID='1'";			
				mysql_query($sql) or die(error());
			}
		}
?>