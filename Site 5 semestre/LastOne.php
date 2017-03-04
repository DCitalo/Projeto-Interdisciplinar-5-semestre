<?php
if (isset($_POST['last_resp'])) {
	
	//Variaveis de POST, Alterar somente se necessário 
	//====================================================
	$mensagem = $_POST['last_question'];
	//====================================================
	
	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
	//==================================================== 
	$email_remetente = "admin@clarim-odium.com.br"; // deve ser uma conta de email do seu dominio 
	//====================================================
	
	//Configurações do email, ajustar conforme necessidade
	//==================================================== 
	$email_destinatario = "cd_italo@hotmail.com"; // pode ser qualquer email que receberá as mensagens
	$email_reply = "$email"; 
	$email_assunto = "clarim-odium"; // Este será o assunto da mensagem
	//====================================================
	
	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "Nome = Clarim \n"; 
	$email_conteudo .= "Email = $email \n";
	$email_conteudo .= "Mensagem = $mensagem \n"; 
	//====================================================
	
	//Seta os Headers (Alterar somente caso necessario) 
	//==================================================== 
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================
	
	//Enviando o email 
	//==================================================== 
	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
					header("Location:https://clarim-odium.com.br/final.php");  
					} 
			else{ 
					echo "</b>Falha no envio do E-Mail!</b>"; } 
	//====================================================
} 
?>