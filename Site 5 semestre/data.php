<?php
	include 'conexao.php';

 // extrai os dados do post
 	extract($_POST);
 // imprime os dados do post
 	setcookie("login",$nome);
 	$query_select = "SELECT login FROM usuarios WHERE login = '$nome'";
	$select = mysql_query($query_select);
	$array = mysql_fetch_array($select);
	$logarray = $array['login'];

 	if($logarray == $nome){

       

      }else{
    mysql_query("INSERT INTO Dados_User (User , PassusPP , CaedesPP , LaqueusPP , QuodPP , PassusGG , CaedesGG , LaqueusGG , QuodGG) VALUES ('$nome' , '0' , '0' , '0' , '0', '0' , '0' , '0' , '0' )")or die(error());
 	$sql = "INSERT INTO usuarios (login , senha , Save) VALUES ('$nome' , '$senha' ,'$Save')";
	mysql_query($sql) or die(error());
  	}
?>
