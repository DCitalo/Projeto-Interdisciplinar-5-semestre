<html>
<head>
	<title>Final</title> 
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Site Faculdade 4º Semestre">
	<meta name="keywords" content="HTML,CSS,PHP,JavaScript,MySQL">
	<meta name="author" content="Ítalo Drago">
	<link rel="manifest" href="manifest.webmanifest">
	<link href="https://fonts.googleapis.com/css?family=Anton|Coiny|Courgette|Trirong" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="arquivos/style.css">
	<link href="arquivos/owl.carousel.css" rel="stylesheet">
	<link href="arquivos/owl.theme.css" rel="stylesheet">
	<link href="arquivos/owl.transitions.css" rel="stylesheet">
	<link rel="stylesheet" href="arquivos/circle.css">

	<link rel="manifest" href="manifest.json">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="application-name" content="Clarim Odium">
	<meta name="apple-mobile-web-app-title" content="Clarim Odium">
	<meta name="theme-color" content="#000000">
	<meta name="msapplication-navbutton-color" content="#000000">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="msapplication-starturl" content="http://clarim-odium.com.br/">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
	<link rel="icon" type="image/png" sizes="32x32" href="arquivos/icone.png">
	<link rel="apple-touch-icon" type="image/png" sizes="32x32" href="arquivos/icone.png">
	<link rel="icon" type="image/png" sizes="64x64" href="arquivos/icone-2X.png">
	<link rel="apple-touch-icon" type="image/png" sizes="64x64" href="arquivos/icone-2X.png">
	<link rel="icon" type="image/png" sizes="128x128" href="arquivos/icone-4X.png">
	<link rel="apple-touch-icon" type="image/png" sizes="128x128" href="arquivos/icone-4X.png">
</head> 
<body class="final">
<?php
	error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
 	session_start();
    include 'conexao.php';
  	$login_cookie = $_COOKIE['login'];

?>
	<script type="text/javascript">
		var SaveState = "<?php $consult_save = mysql_query("SELECT Save FROM usuarios WHERE login='".$login_cookie."'");
  			$Salvar = mysql_fetch_array($consult_save);
  			extract($Salvar);
  			echo $Salvar['Save'] ?>";
	</script>
	<header class="container-70 mb-container-100 ">
		<div class="container-100 espacamento-1 Bg-color-1-Final"></div>
		<div class="container-100 espacamento-2">
			<div class="container-100 text-center logo-header">
				<a href="#" class="DBA cont-logo" id="logo">
					<img src="arquivos/Logo-2.png" />
				</a>
			</div>			
			<div class="container-100 courgette text-center nal">
				<p></p>
			</div>
		</div>
		<nav class="container-100 cont-menu Bg-color-2-Final DF">
			<a href="" class="back DIB container-10 text-center mb-container-100">
				<i class="icon-back DB"></i>
				<p class="container-100 courgette">Voltar</p>
			</a>
			<div class="container-80 text-center DIB cont-tit-jor mb-container-100">
				<p class="coiny tit-jor">Parabéns!!!</p>
				<p class="courgette">Agora que você conseguiu derrotar os grandes males
 vai conseguir enxergar a realidade </p>
			</div> 
			<div class="container-10 DIB conta mb-container-100">
				<div class="container-100 text-center perfil">
					<div class="container-100 cont-perfil">
						<div class="container-60">
							<i class="icon-perfil DB"></i>
						</div>
					</div>
					<p class="coiny cont-per Bg-color-2">PERFIL</p>
				</div>
				<div class="mb-container-100 mb-bg-1 bg-menu-mb DN"></div>
				<div class="DBA FW hide player-status mb-container-70" id="PlayerStatus">
					<div class="container-100 DF FW Bg-color-1 psh"  style="background: #00adcb !important;">
						<div class="container-90 player-name">
							<?php	
							echo '<p class="coiny psn">'.$login_cookie.'</p>';
							?>
						</div>
						<div class="container-90 courgette DF player-esc">
							<div class="DIB container-50" id="EXIT"><a href="#">Sair</a></div>
						</div>
					</div>
					<div class="container-100 Bg-color-3 psb"  style="background: #cddbe0 !important;">
						<p class="text-center coiny">Meus Status</p>
						<div class="container-90">
							<div class="container-100">
								<p class="courgette container-100">Sanidade</p>
								<div class="container-100 DF">
									<div class="container-25 char">
										<i class="container-80 DB icon-char"></i>
									</div>
									<div class="container-40 DF Menu-Player-life" id="PlayerLife">
										<div class="container-20 DIB Player-life-cont"></div>
										<div class="container-20 DIB Player-life-cont"></div>
									</div>
								</div>
							</div>
							<div class="container-100 DF" id="MascSticker">
								<div class="container-25 cont-stick DIF text-center stick-masc-medo">
									<i class="icon-stick-masc-medo PA"></i>
									<p class="courgette masc-name">Passus</p>
								</div>
								<div class="container-25 cont-stick DIF text-center stick-masc-odio">
									<i class="icon-stick-masc-odio PA"></i>
									<p class="courgette masc-name">Caedes</p>
								</div>
								<div class="container-25 cont-stick DIF text-center stick-masc-reli">
									<i class="icon-stick-masc-reli PA"></i>
									<p class="courgette masc-name">Laqueus</p>
								</div>
								<div class="container-25 cont-stick DIF text-center stick-masc-objet">
									<i class="icon-stick-masc-objet PA"></i>			
									<p class="courgette masc-name">Quod</p>
								</div>
							</div>
							<div class="container-100 DF FW">
								<div class="container-50 DIB" >
									<p class="container-100">Paciência</p>
									<div class="masc-cont-life DF" id="VirtudePaci">
										<div class="container-33 Masc-life-cont"></div>
										<div class="container-33 Masc-life-cont"></div>
										<div class="container-33 Masc-life-cont"></div>
									</div>
								</div>
								<div class="container-50 DIB" >
									<p class="container-100">Conhecimento</p>
									<div class="masc-cont-life DF" id="VirtudeConhe">
										<div class="container-33 Masc-life-cont"></div>
										<div class="container-33 Masc-life-cont"></div>
										<div class="container-33 Masc-life-cont"></div>
									</div>
								</div>
								<div class="container-50 DIB">
									<p class="container-100">Empatia</p>
									<div class="masc-cont-life DF" id="VirtudeEmp">
										<div class="container-33 Masc-life-cont"></div>
										<div class="container-33 Masc-life-cont"></div>
										<div class="container-33 Masc-life-cont"></div>
									</div>
								</div>
								<div class="container-50 DIB">
									<p class="container-100">Carinho</p>
									<div class="masc-cont-life DF" id="VirtudeCari">
										<div class="container-33 Masc-life-cont"></div>
										<div class="container-33 Masc-life-cont"></div>
										<div class="container-33 Masc-life-cont"></div>
									</div>
								</div>
							</div>	
							<div data-href="https://clarim-odium.com.br/jornal.php"  class="container-100 comp-menu text-center fb-share-button">
								<input type="button" value="Compartilhar Status" name="Compartilhar" id="capture" class="coiny container-100">
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<div class="container-70 final-body mb-container-100">
		<div class="container-100 text-center cont-congrats">
			<img src="arquivos/banner-1.png">
		</div>
		<div class="container-100 text-center Bg-color-3-Final">
			<p class="coiny">Confira a resposta de outros usuários,</p>
			<p class="courgette">o teu resultado e veja quem perdeu pra um dos monstros</p>
		</div>
		<!--Mobile-carrossel-->
		<div class="DN container-100" id="car-mascs">
			<div class="container-100 car-masc">
				<div class="container-100 DF FW">
					<div class="container-100">
						<img src="arquivos/Bg-Passus-Final.jpg">
					</div>
					<div class="container-100 DF FW  Bg-color-2">
						<div class="container-100 boss-flag FF">
							<img src="arquivos/FaixaPassus.png">
						</div>
						<div class="container-100 cont-results-Passus cont-results" id="ResultPassus">
						<div class="container-80" style="width:100px;"><img src="arquivos/user.png"></div>
						<div class="container-80"><?php	
							$consulta = mysql_query("SELECT * FROM Dados_User WHERE User= '$login_cookie'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
							$TotalP1 = $PassusPP;
		  					echo '<p class="courgette">você perdeu '.$TotalP1.' vezes para Passus</p>';?></div>
						<div class="container-80">
								<?php	
							$consulta = mysql_query("SELECT * FROM Dados WHERE ID='1'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
		  					echo '<p class="courgette">'.$Passus.' pessoas perderam para Passus</p>';?>
							</div>
						<div class="limite container-80">
							<div id="LostPassus" style="width: <?php	
							$consulta = mysql_query("SELECT * FROM Dados WHERE ID='1'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
							$Total = $Passus + $Caedes + $Laqueus + $Quod + $Win;
							$widthop1 = round(($Passus/$Total)*100);
		  					echo ''.$widthop1.'%';?>"></div>
						</div>
						<div class="container-100 Bg-color-2">
						<?php	
							$result = mysql_query('SELECT SUM(PassusGG) AS valor_soma FROM Dados_User'); 
							$row = mysql_fetch_assoc($result); 
							$sum = $row['valor_soma'];
		  					echo '<p class="courgette">Foi derrotado '.$sum.' vezes</p>';?>
		  				</div>
					</div>
					</div>
				</div>
				<div class="container-100 DF FW">
					<div class="container-100">
						<img src="arquivos/Bg-Caedes-Final.jpg">
					</div>
					<div class="container-100 DF FW  Bg-color-2">
						<div class="container-100 boss-flag FF">
							<img src="arquivos/FaixaCaedes.png">
						</div>
						<div class="container-100 cont-results-Caedes cont-results" id="ResultCaedes">
						<div class="container-80" style="width:100px;"><img src="arquivos/user.png"></div>
						<div class="container-80"><?php	
							$consulta = mysql_query("SELECT * FROM Dados_User WHERE User= '$login_cookie'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
							$Total = $CaedesPP;
		  					echo '<p class="courgette">você perdeu '.$Total.' vezes para Caedes</p>';?></div>
						<div class="container-80">
								<?php	
							$consulta = mysql_query("SELECT * FROM Dados WHERE ID='1'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
		  					echo '<p class="courgette">'.$Caedes.' pessoas perderam para Caedes</p>';?>
							</div>
						<div class="limite container-80">
							<div id="LostCaedes" style="width: <?php	
							$consulta = mysql_query("SELECT * FROM Dados WHERE ID='1'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
							$Total = $Passus + $Caedes + $Laqueus + $Quod + $Win;
							$widthop1 = round(($Caedes/$Total)*100);
		  					echo ''.$widthop1.'%';?>"></div>
						</div>
						<div class="container-100 Bg-color-2">
						<?php	
							$result = mysql_query('SELECT SUM(CaedesGG) AS valor_soma FROM Dados_User'); 
							$row = mysql_fetch_assoc($result); 
							$sum = $row['valor_soma'];
		  					echo '<p class="courgette">Foi derrotado '.$sum.' vezes</p>';?>
		  				</div>
					</div>
					</div>
				</div>
				<div class="container-100 DF FW">
					<div class="container-100">
						<img src="arquivos/Bg-Laqueus-Final.jpg">
					</div>
					<div class="container-100 DF FW  Bg-color-2">
						<div class="container-100 boss-flag FF">
							<img src="arquivos/FaixaLaqueus.png">
						</div>
						<div class="container-100 cont-results-Laqueus cont-results" id="ResultLaqueus">
						<div class="container-80" style="width:100px;"><img src="arquivos/user.png"></div>
						<div class="container-80"><?php	
							$consulta = mysql_query("SELECT * FROM Dados_User WHERE User= '$login_cookie'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
							$Total = $LaqueusPP;
		  					echo '<p class="courgette">você perdeu '.$Total.' vezes para Laqueus</p>';?></div>
						<div class="container-80">
								<?php	
							$consulta = mysql_query("SELECT * FROM Dados WHERE ID='1'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
		  					echo '<p class="courgette">'.$Laqueus.' pessoas perderam para Laqueus</p>';?>
							</div>
						<div class="limite container-80">
							<div id="LostLaqueus" style="width: <?php	
							$consulta = mysql_query("SELECT * FROM Dados WHERE ID='1'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
							$Total = $Passus + $Caedes + $Laqueus + $Quod + $Win;
							$widthop1 = round(($Laqueus/$Total)*100);
		  					echo ''.$widthop1.'%';?>"></div>
						</div>
						<div class="container-100 Bg-color-2">
						<?php	
							$result = mysql_query('SELECT SUM(LaqueusGG) AS valor_soma FROM Dados_User'); 
							$row = mysql_fetch_assoc($result); 
							$sum = $row['valor_soma'];
		  					echo '<p class="courgette">Foi derrotado '.$sum.' vezes</p>';?>
		  				</div>
					</div>
					</div>
				</div>
				<div class="container-100 DF FW">
					<div class="container-100">
						<img src="arquivos/Bg-Quod-Final.jpg">
					</div>
					<div class="container-100 DF FW  Bg-color-2">
						<div class="container-100 boss-flag FF">
							<img src="arquivos/FaixaQuod.png">
						</div>
						<div class="container-100 cont-results-Quod cont-results" id="ResultQuod">
						
							<div class="container-80" style="width:100px;"><img src="arquivos/user.png"></div>
						<div class="container-80"><?php	
							$consulta = mysql_query("SELECT * FROM Dados_User WHERE User= '$login_cookie'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
							$Total = $QuodPP;
		  					echo '<p class="courgette">você perdeu '.$Total.' vezes para Quod</p>';?></div>
						<div class="container-80">
								<?php	
							$consulta = mysql_query("SELECT * FROM Dados WHERE ID='1'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
		  					echo '<p class="courgette">'.$Quod.' pessoas perderam para Quod</p>';?>
							</div>
						<div class="limite container-80">
							<div id="LostQuod" style="width: <?php	
							$consulta = mysql_query("SELECT * FROM Dados WHERE ID='1'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
							$Total = $Passus + $Caedes + $Laqueus + $Quod + $Win;
							$widthop1 = round(($Quod/$Total)*100);
		  					echo ''.$widthop1.'%';?>"></div>
						</div>
						<div class="container-100 Bg-color-2">
						<?php	
							$result = mysql_query('SELECT SUM(QuodGG) AS valor_soma FROM Dados_User'); 
							$row = mysql_fetch_assoc($result); 
							$sum = $row['valor_soma'];
		  					echo '<p class="courgette">Foi derrotado '.$sum.' vezes</p>';?>
		  				</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Mobile-carrossel-->
		<div class="container-100 DF" id="masc-desktop">
			<div class="container-25 DF FW">
				<div class="container-100">
					<img src="arquivos/Bg-Passus-Final.jpg">
				</div>
				<i class="container-50 PA icon-masc-medo DB mj"></i>
				<div class="container-100 DF FW  Bg-color-2 FF">
					<div class="container-100 boss-flag">
						<img src="arquivos/FaixaPassus.png">
					</div>
				</div>
				<div class="container-100 hide cont-dados PA DF FW text-center">
					<div class="container-100 cont-results-Passus cont-results" id="ResultPassus">
						<div class="container-80" style="width:100px;"><img src="arquivos/user.png"></div>
						<div class="container-80"><?php	
							$consulta = mysql_query("SELECT * FROM Dados_User WHERE User= '$login_cookie'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
							$TotalP1 = $PassusPP;
		  					echo '<p class="courgette">você perdeu '.$TotalP1.' vezes para Passus</p>';?></div>
						<div class="container-80">
								<?php	
							$consulta = mysql_query("SELECT * FROM Dados WHERE ID='1'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
		  					echo '<p class="courgette">'.$Passus.' pessoas perderam para Passus</p>';?>
							</div>
						<div class="limite container-80">
							<div id="LostPassus" style="width: <?php	
							$consulta = mysql_query("SELECT * FROM Dados WHERE ID='1'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
							$Total = $Passus + $Caedes + $Laqueus + $Quod + $Win;
							$widthop1 = round(($Passus/$Total)*100);
		  					echo ''.$widthop1.'%';?>"></div>
						</div>
						<div class="container-100 Bg-color-2">
						<?php	
							$result = mysql_query('SELECT SUM(PassusGG) AS valor_soma FROM Dados_User'); 
							$row = mysql_fetch_assoc($result); 
							$sum = $row['valor_soma'];
		  					echo '<p class="courgette">Foi derrotado '.$sum.' vezes</p>';?>
		  				</div>
					</div>
				</div>
			</div>
			<div class="container-25 DF FW">
				<div class="container-100">
					<img src="arquivos/Bg-Caedes-Final.jpg">
				</div>
				<i class="container-50 PA icon-masc-odio DB mj"></i>
				<div class="container-100 DF FW  Bg-color-2 FF">
					<div class="container-100 boss-flag">
						<img src="arquivos/FaixaCaedes.png">
					</div>
				</div>
				<div class="container-100 hide cont-dados PA DF FW text-center">
					<div class="container-100 cont-results-Caedes cont-results" id="ResultCaedes">
						<div class="container-80" style="width:100px;"><img src="arquivos/user.png"></div>
						<div class="container-80"><?php	
							$consulta = mysql_query("SELECT * FROM Dados_User WHERE User= '$login_cookie'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
							$Total = $CaedesPP;
		  					echo '<p class="courgette">você perdeu '.$Total.' vezes para Caedes</p>';?></div>
						<div class="container-80">
								<?php	
							$consulta = mysql_query("SELECT * FROM Dados WHERE ID='1'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
		  					echo '<p class="courgette">'.$Caedes.' pessoas perderam para Caedes</p>';?>
							</div>
						<div class="limite container-80">
							<div id="LostCaedes" style="width: <?php	
							$consulta = mysql_query("SELECT * FROM Dados WHERE ID='1'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
							$Total = $Passus + $Caedes + $Laqueus + $Quod + $Win;
							$widthop1 = round(($Caedes/$Total)*100);
		  					echo ''.$widthop1.'%';?>"></div>
						</div>
						<div class="container-100 Bg-color-2">
						<?php	
							$result = mysql_query('SELECT SUM(CaedesGG) AS valor_soma FROM Dados_User'); 
							$row = mysql_fetch_assoc($result); 
							$sum = $row['valor_soma'];
		  					echo '<p class="courgette">Foi derrotado '.$sum.' vezes</p>';?>
		  				</div>
					</div>
				</div>
			</div>
			<div class="container-25 DF FW">
				<div class="container-100">
					<img src="arquivos/Bg-Laqueus-Final.jpg">
				</div>
				<i class="container-50 PA icon-masc-reli DB mj"></i>
				<div class="container-100 DF FW  Bg-color-2 FF">
					<div class="container-100 boss-flag">
						<img src="arquivos/FaixaLaqueus.png">
					</div>
				</div>
				<div class="container-100 hide cont-dados PA DF FW text-center">
					<div class="container-100 cont-results-Laqueus cont-results" id="ResultLaqueus">
						<div class="container-80" style="width:100px;"><img src="arquivos/user.png"></div>
						<div class="container-80"><?php	
							$consulta = mysql_query("SELECT * FROM Dados_User WHERE User= '$login_cookie'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
							$Total = $LaqueusPP;
		  					echo '<p class="courgette">você perdeu '.$Total.' vezes para Laqueus</p>';?></div>
						<div class="container-80">
								<?php	
							$consulta = mysql_query("SELECT * FROM Dados WHERE ID='1'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
		  					echo '<p class="courgette">'.$Laqueus.' pessoas perderam para Laqueus</p>';?>
							</div>
						<div class="limite container-80">
							<div id="LostLaqueus" style="width: <?php	
							$consulta = mysql_query("SELECT * FROM Dados WHERE ID='1'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
							$Total = $Passus + $Caedes + $Laqueus + $Quod + $Win;
							$widthop1 = round(($Laqueus/$Total)*100);
		  					echo ''.$widthop1.'%';?>"></div>
						</div>
						<div class="container-100 Bg-color-2">
						<?php	
							$result = mysql_query('SELECT SUM(LaqueusGG) AS valor_soma FROM Dados_User'); 
							$row = mysql_fetch_assoc($result); 
							$sum = $row['valor_soma'];
		  					echo '<p class="courgette">Foi derrotado '.$sum.' vezes</p>';?>
		  				</div>
					</div>
				</div>
			</div>
			<div class="container-25 DF FW">
				<div class="container-100">
					<img src="arquivos/Bg-Quod-Final.jpg">
				</div>
				<i class="container-50 PA icon-masc-objet DB mj"></i>
				<div class="container-100 DF FW  Bg-color-2 FF">
					<div class="container-100 boss-flag">
						<img src="arquivos/FaixaQuod.png">
					</div>
				</div>
				<div class="container-100 hide cont-dados PA DF FW text-center">
					<div class="container-100 cont-results-Quod cont-results" id="ResultQuod">
						
							<div class="container-80" style="width:100px;"><img src="arquivos/user.png"></div>
						<div class="container-80"><?php	
							$consulta = mysql_query("SELECT * FROM Dados_User WHERE User= '$login_cookie'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
							$Total = $QuodPP;
		  					echo '<p class="courgette">você perdeu '.$Total.' vezes para Quod</p>';?></div>
						<div class="container-80">
								<?php	
							$consulta = mysql_query("SELECT * FROM Dados WHERE ID='1'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
		  					echo '<p class="courgette">'.$Quod.' pessoas perderam para Quod</p>';?>
							</div>
						<div class="limite container-80">
							<div id="LostQuod" style="width: <?php	
							$consulta = mysql_query("SELECT * FROM Dados WHERE ID='1'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
							$Total = $Passus + $Caedes + $Laqueus + $Quod + $Win;
							$widthop1 = round(($Quod/$Total)*100);
		  					echo ''.$widthop1.'%';?>"></div>
						</div>
						<div class="container-100 Bg-color-2">
						<?php	
							$result = mysql_query('SELECT SUM(QuodGG) AS valor_soma FROM Dados_User'); 
							$row = mysql_fetch_assoc($result); 
							$sum = $row['valor_soma'];
		  					echo '<p class="courgette">Foi derrotado '.$sum.' vezes</p>';?>
		  				</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-100 DF FW Cont-mapa mb-container-100">
			<div class="container-100 DIB Bg-color-3">
				<div class="container-90 DF noticia-header">
					<div class="container-15 titulo-cont DIB"></div>
					<div class="masc-name titulo-noticia text-center DIB container-60">
						<h2 class="anton DIB">Infografico interativo</h2>
					</div>
					<div class="container-15 titulo-cont DIB"></div>
				</div>
				<div class="container-90">
					<div class="container-100 map">
						<img src="arquivos/Mapa-Final.png" />
						<div class="name-map PA"><?php	
							echo '<p class="coiny">'.$login_cookie.'</p>';
							?></div>
						<?php 
							$consulta = mysql_query("SELECT * FROM Dados WHERE ID= '1'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
							$Total = $Passus + $Caedes + $Laqueus + $Quod + $Win;
							$WIN = round(($Win/$Total)*100);
							echo '<div class="c100 p'.$WIN.' big PA graf"><div class="slice">
                        		<div class="bar"></div>
                        		<div class="fill"></div>
                    		</div>
                		</div>' ?>
                		<div class="PA WIN"><p class="coiny"><?php 
							$consulta = mysql_query("SELECT * FROM Dados WHERE ID= '1'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
							$Total = $Passus + $Caedes + $Laqueus + $Quod + $Win;
							$WIN = round(($Win/$Total)*100);
							echo ''.$WIN.'% dos usuarios conseguiram vencer' ?></p></div> 
                		<div class="container-40 PA user-map"><img src="arquivos/user.png"></div>
						<div class="container-100 PA cont-info-map-final">
							<?php 
								$consulta = mysql_query("SELECT * FROM Dados WHERE ID='1'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
								$limite = $Passus;								
								for ($n = 1; $n <= $limite; $n++) {
								$Y = rand(0,40);
								$X = rand(0,45);
								echo '<div class="PA DB mark-dead" style="left:'.$X.'%;top:'.$Y.'%;"><img src="arquivos/icon-mark-medo.png"></div>';
								}
							?>
							<?php 
								$consulta = mysql_query("SELECT * FROM Dados WHERE ID='1'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
								$limite = $Caedes;
								
								for ($n = 1; $n <= $limite; $n++) {
								$Y = rand(0,40);
								$X = rand(55,96);
								echo '<div class="PA DB mark-dead" style="left:'.$X.'%;top:'.$Y.'%;"><img src="arquivos/icon-mark-odio.png"></div>';
								}
							?>
							<?php 
								$consulta = mysql_query("SELECT * FROM Dados WHERE ID='1'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
								$limite = $Laqueus;
								
								for ($n = 1; $n <= $limite; $n++) {
								$Y = rand(60,90);
								$X = rand(0,45);
								echo '<div class="PA DB mark-dead" style="left:'.$X.'%;top:'.$Y.'%;"><img src="arquivos/icon-mark-reli.png"></div>';
								}
							?>
							<?php 
								$consulta = mysql_query("SELECT * FROM Dados WHERE ID='1'") or die(mysql_error());
							if (mysql_num_rows($consulta)>0){
								$query = mysql_fetch_array($consulta);
								extract($query);
							}
								$limite = $Quod;
								
								for ($n = 1; $n <= $limite; $n++) {
								$Y = rand(60,90);
								$X = rand(55,96);
								echo '<div class="PA DB mark-dead" style="left:'.$X.'%;top:'.$Y.'%;"><img src="arquivos/icon-mark-obje.png"></div>';
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-100 text-center" style="background: #FFFFFF; color:#000000;">
		<p class="coiny" style="font-size: 25px; margin: 10px auto;">Ajude a Desconstruir</p>
		<p class="courgette" style="margin: 10px auto;">Compartilhe esse projeto para a consciêntização a respeito dos danos causados devido a tranfobia, com a sua ajuda talvez a realidade de milhares de pessoas possa ser diferente</p>
		</div>
		<div class="container-100 DF FW " >
			<div class="container-100 DF ">
					<div class="container-50 DIB Bg-color-3 ">
					<div><img src="arquivos/banner-final-2.png" ></div>
				</div>	
				<div class="container-50 DIB Bg-color-1  trirong DF FW" >
					<div><a href="http://www.nlucon.com/2014/08/travesti-reflexiva-sofia-favero-transfobia.html"><img src="arquivos/Noticia-trans2.png" ></a></div>
				</div>	
			</div>
			<div class="container-50 DF FW">
				<div class="container-100 DIB ">
					<div><a href="http://br.blastingnews.com/sociedade-opiniao/2016/10/travesti-e-assassinada-a-pauladas-mas-o-laudo-aponta-overdose-como-causa-da-morte-001184489.html"><img src="arquivos/Noticias-extras-pt2-1.png" ></a></div>
				</div>	
				<div class="container-100 DIB Bg-color-1  trirong DF FW" >
					<div><a href="http://extra.globo.com/casos-de-policia/jovem-transexual-agredida-por-20-pessoas-em-sao-paulo-18692547.html"><img src="arquivos/Noticia-trans1.png" ></a></div>
				</div>	
			</div>
			<div class="container-50 DF FW">
				<div class="container-100 DIB Bg-color-1 ">
					<div><a href="http://extra.globo.com/noticias/mundo/jovem-trans-esquartejada-na-russia-apos-pedido-do-pai-na-tv-podem-matar-20397632.html"><img src="arquivos/Noticia-trans3.png" ></a></div>
				</div>
				<div class="container-100 DIB ">
					<div><a href=""><img src="arquivos/Noticias-extras-pt2-3.png" ></a></div>
				</div>
			</div>
		</div>
	</div>
</body> 
<script src="arquivos/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="arquivos/typed.js"></script>
<script src="arquivos/jquery.elevatezoom.js"></script>
<script type="text/javascript" src="arquivos/owl.carousel.min.js"></script>
<script type="text/javascript" src="arquivos/default.js"></script>
</html>  