<html manifest="odium.appcache">
<head>
	<title>Clarim Odium</title> 
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="description" content="Site Faculdade 5º Semestre">
	<meta name="keywords" content="Faculdade,Trabalho,Preconceitos,Descostrução">
	<meta name="author" content="Ítalo Drago">
	<link rel="manifest" href="manifest.webmanifest">
	<link href="https://fonts.googleapis.com/css?family=Anton|Coiny|Courgette|Trirong" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="arquivos/style.css">
	<link href="arquivos/owl.carousel.css" rel="stylesheet">
	<link href="arquivos/owl.theme.css" rel="stylesheet">
	<link href="arquivos/owl.transitions.css" rel="stylesheet">
	<link rel="manifest" href="manifest.json">
	<meta property="og:url"           content="https://clarim-odium.com.br/jornal.php" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="Clarim Odium" />
	<meta property="og:description"   content="Your description" />
	<meta property="og:image"         content="https://clarim-odium.com.br/arquivos/" />


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
<body>
<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
<?php
	error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
 	session_start();
    include 'conexao.php';
  	$login_cookie = $_COOKIE['login'];
  	
    if(isset($login_cookie)){

    }else{
      header("Location: https://www.clarim-odium.com.br");
    }
?>
 	<script type="text/javascript">
	 var SaveState = "<?php $consult_save = mysql_query("SELECT Save FROM usuarios WHERE login='".$login_cookie."'");
  			$Salvar = mysql_fetch_array($consult_save);
  			extract($Salvar);
  			echo $Salvar['Save'] ?>";
	</script>
<div class="container-100 DN PF" id="Questions" >
	<div class="container-70 DF FW mb-container-100">
		<button class="coiny" id="close_Questions">X</button>
		<div class="container-100 DF cont-battle">
			<div class="container-80 mb-container-70" id="">
				<div class="container-100 cont-fight-masc" >
					<img id="MascFight" src="" />
				</div>
			</div>
		</div>
		<div class="container-100 DF cont-resps">
			<div class="container-10 MBDN">
				<div class="container-10  PA cont-char-fight">
					<i class="container-70 DB icon-char-fight"></i>
				</div>
				<div class="container-100 DF">
					<div class="container-10 Bg-color-5 cont-life"></div>
					<div class="container-30 DF FW" id="PlayerLife">
						<div class="container-100 Player-life-cont"></div>
						<div class="container-100 Player-life-cont"></div>
					</div>
				</div>
			</div>
			<div class="container-70 text-center cont-questions mb-container-100 DF FW">
				<div id="Question" class="text-center">
					<p class="trirong"></p>
				</div>
				<div class="container-100 DF cont-resp">
					<button class="container-100 PA hide resp close_2" value="">Fechar e ir para o próximo chefe</button>
					<form class="container-40" id="cadSave1" action="" method="post">
						<input type="resp" name="resp_1" id="resp_1" value="" class="hide PA" style="visibility: hidden;">
						<button class="container-100 resp" id="op1" name="resp" value=""></button>
					</form>
					<div class="container-20 DB icon-middle"><img style="height: 100% !important;width: auto !important;" src="arquivos/battle-icon.png"></div>
					<form class="container-40" id="cadSave2" action="" method="post">
						<button class="container-100 resp" id="op2" name="resp" value=""></button>
						<input type="resp" name="resp2" id="resp_2" value="" class="hide PA" style="visibility: hidden;">
					</form>
				</div>
			</div>
			<div class="container-10 MBDN">
				<div class="container-10 PA cont-masc-fight">
					<i class="container-70 DB "></i>
				</div>
				<div class="container-100 DF cont-life-masc" >
				</div>
			</div>
		</div>
	</div>	
</div>
<div class="container-100 Bg-color-2">
	<header class="container-70 mb-container-100">
		<div class="container-100 espacamento-1 Bg-color-1"></div>
		<div class="container-100 espacamento-2">
			<div class="container-100 text-center logo-header">
				<a href="#" class="DBA cont-logo" id="logo">
					<img src="arquivos/Logo.png" />
				</a>
			</div>			
			<div class="container-100 courgette text-center nal">
				<p>Nota ao Leitor: Essa é nossa ultima Edição depois do que aconteceu ao nosso mundo.... Nosso Clarim fracassou... foi tomado... não conseguimos...ajud...</p>
			</div>
		</div>
		<nav class="container-100 cont-menu Bg-color-1 DF">
			<a href="https://www.clarim-odium.com.br" class="back DIB container-10 text-center">
				<i class="icon-back DB"></i>
				<p class="container-100 courgette">Voltar</p>
			</a>
			<div class="container-80 text-center DIB cont-tit-jor">
				<p class="coiny tit-jor">será possível combater este mal?</p>
				<p class="courgette">Contamos com a vossa ajuda caro Leitor</p>
			</div>
			<div class="container-10 DIB conta">
				<div class="container-100 PA "></div>
				<div class="container-100 text-center perfil">
					<div class="container-100 cont-perfil">
						<div class="container-60">
							<i class="icon-char DB"></i>
						</div>
					</div>
					<p class="coiny cont-per Bg-color-2">PERFIL</p>
				</div>
				<div class="DBA FW hide player-status mb-container-70" id="PlayerStatus">
					<div class="container-100 DF FW Bg-color-1 psh">
						<div class="container-90 player-name">
							<?php	
							echo '<p class="coiny psn">'.$login_cookie.'</p>';
							?>
						</div>
					</div>
					<div class="container-100 Bg-color-3 psb ">
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
									<i class="icon-stick-masc-medo-lock PA"></i>
									<p class="courgette masc-name mnme">Passus</p>
								</div>
								<div class="container-25 cont-stick DIF text-center stick-masc-odio">
									<i class="icon-stick-masc-odio-lock PA"></i>
									<p class="courgette masc-name mnod"></p>
								</div>
								<div class="container-25 cont-stick DIF text-center stick-masc-reli">
									<i class="icon-stick-masc-reli-lock PA"></i>
									<p class="courgette masc-name mnre"></p>
								</div>
								<div class="container-25 cont-stick DIF text-center stick-masc-objet">
									<i class="icon-stick-masc-objet-lock PA"></i>			
									<p class="courgette masc-name mnob"></p>
								</div>
							</div>
							<div class="container-100 DF FW">
								<div class="container-50 DIB" >
									<p class="container-100">Paciência</p>
									<div class="masc-cont-life DF" id="VirtudePaci">
										<div class="container-33 Masc-life-cont hide"></div>
										<div class="container-33 Masc-life-cont hide"></div>
										<div class="container-33 Masc-life-cont hide"></div>
									</div>
								</div>
								<div class="container-50 DIB" >
									<p class="container-100">Conhecimento</p>
									<div class="masc-cont-life DF" id="VirtudeConhe">
										<div class="container-33 Masc-life-cont hide"></div>
										<div class="container-33 Masc-life-cont hide"></div>
										<div class="container-33 Masc-life-cont hide"></div>
									</div>
								</div>
								<div class="container-50 DIB">
									<p class="container-100">Empatia</p>
									<div class="masc-cont-life DF" id="VirtudeEmp">
										<div class="container-33 Masc-life-cont hide"></div>
										<div class="container-33 Masc-life-cont hide"></div>
										<div class="container-33 Masc-life-cont hide"></div>
									</div>
								</div>
								<div class="container-50 DIB">
									<p class="container-100">Carinho</p>
									<div class="masc-cont-life DF" id="VirtudeCari">
										<div class="container-33 Masc-life-cont hide"></div>
										<div class="container-33 Masc-life-cont hide"></div>
										<div class="container-33 Masc-life-cont hide"></div>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<div class="container-70 DF FW Cont-mapa mb-container-100">
		<div class="container-100 DIB Bg-color-3">
			<div class="container-90 DF noticia-header">
				<div class="container-15 titulo-cont DIB"></div>
				<div class="masc-name titulo-noticia text-center DIB container-60">
					<h2 class="anton DIB">REGIÃO CORROMPIDA</h2>
				</div>
				<div class="container-15 titulo-cont DIB"></div>
			</div>
			<div class="container-90">
				<div class="icon-map PA">
					<div class="container-25 PA cont-notifica hide">
						<img src="arquivos/notifica.png">	
					</div>
					<div class="PA info-zoom hide">
						<p class="container-100 courgette text-center hide tit-info">veja por outros olhos a realidade...</p>
					</div>
					<img src="arquivos/map.png">
				</div>
				<div class="container-100 map">
					<img id="zoom_01" src='' data-zoom-image="" title="Mapa" alt="Mapa" />
					<div class="container-100 PA cont-info-map hide cont-info">
						<div class="container-60 DF FW info-pop mb-container-90">
							<div class="container-100 info-header">
								<button class="PA coiny close-pop">X</button>
								<div class="container-80 text-center tit-pop-info" id="InfoTitle">
								</div>
							</div>
							<div class="container-80 info-body">
								<div class="container-20">
									<img src="arquivos/eyes.png">
								</div>
								<div class="container-100 text-center" id="ContInfo">
								</div>
							</div>
							<div class="container-100 info-foot">
								<img src="arquivos/arabesco.png">
							</div>
						</div>
					</div>
					<div class="container-100 PA cont-info-map">
						<div class="PA DB marc1 HM">
							<div class="PA info-map hide info-map-right">
								<p class="container-100 courgette text-center hide read-info tit-info">Clarim Odium Vol. 1</p>
								<p class="container-100 courgette text-center hide read-info">05 - 11 - 1920</p>
								<button class="text-center hide button-info">LER</button>
							</div>
							<img src="arquivos/icon-map-info.png" class="PA icon-mark" />		
						</div>
						<div class="PA DB marc2 HM">
							<div class="PA info-map hide info-map-right">
								<p class="container-100 courgette text-center hide read-info tit-info">Clarim Odium Vol. 2</p>
								<p class="container-100 courgette text-center hide read-info">15 - 07 - 1955</p>
								<button class="text-center hide button-info">LER</button>
							</div>
							<img src="arquivos/icon-map-info.png" class="PA icon-mark" />		
						</div>
						<div class="PA DB marc3 HM">
							<div class="PA info-map hide info-map-left">
								<p class="container-100 courgette text-center hide read-info tit-info">Clarim Odium Vol. 3</p>
								<p class="container-100 courgette text-center hide read-info">01 - 04 - 1964</p>
								<button class="text-center hide button-info">LER</button>
							</div>
							<img src="arquivos/icon-map-info.png" class="PA icon-mark" />				
						</div>
						<div class="PA DB marc4 HM">
							<div class="PA info-map hide info-map-left">
								<p class="container-100 courgette text-center hide read-info tit-info">Clarim Odium Vol. 4</p>
								<p class="container-100 courgette text-center hide read-info">23 - 03 - 2000</p>
								<button class="text-center hide button-info">LER</button>
							</div>
							<img src="arquivos/icon-map-info.png" class="PA icon-mark" />		
						</div>
					</div>
					<form class="container-100 hide PA cont-last-question" id="TheLastOne" action="LastOne.php" method="POST">
						<input type="text" style="height:100px;overflow-y:auto;" name="last_question" class="container-60 last_question">
						<input type="submit" class="container-100 last_resp" name="last_resp" value="Enviar" id="last_resp">
						<a href="/final.php">Pular</a>
					</form>						
				</div>
				<p class="courgette DIB PA container-100 text-map">Eles precisam ser parados...<br>o impacto no nosso mundo é visível...</p>
			</div>
			<div class="container-90 PA ">
				
			</div>
			<div class="sub-text-map text-center container-90">
				<p class="courgette" style="font-size: 15px">Investigue bem de perto</p>
				<p class="trirong" style="font-size: 12px">pode conter alguma pista do que aconteceu na cidade</p>
			</div>
		</div>
	</div>

	<!--#car-mascs-->
	<div class="DN container-100" id="car-mascs">
		<div class="container-100 car-masc">
			<div class="container-100 DIB Bg-color-3 Cont-h-masc">
				<ul class="container-90">
					<li id="masc-medo">
						<div class="container-90 DF noticia-header">
							<div class="container-20 titulo-cont DIB"></div>
							<div class="masc-name titulo-noticia text-center DIB container-60">
								<h3 class="anton DIB">Desafio</h3>
								<h2 class="courgette DIB">Passus</h2>
							</div>
							<div class="container-20 titulo-cont DIB"></div>
						</div>
						<div class="container-90 cont-masc Bg-color-4">
							<div class="container-100 ">
								<img src="arquivos/BG-Passus.gif">
							</div>
							<i class="container-50 PA mj icon-masc-medo DB"></i>
							<div class="container-100 PA boss-flag">
								<img src="arquivos/FaixaPassus.png">
							</div>
						</div>
						<hr align="center" color="#000000" size="16" style="margin: 4px auto;height:8px;" class="container-90" />
						<div class="container-90 DF FW">
							<p>Entidade está corrompendo a mente dos habitantes de Vitaelocis! Ajude a restaurar a confiança e a paz. </p>
							<button class="coiny container-40 batalha-button fight-masc-medo">BATALHAR</button>
						</div>
					</li>	
				</ul>
			</div>
			<div class="container-100 DIB Bg-color-3 Cont-h-masc">
				<ul class="container-90">
					<li id="masc-odio">
						<div class="container-90 DF noticia-header">
							<div class="container-20 titulo-cont DIB"></div>
							<div class="masc-name titulo-noticia text-center DIB container-60">
								<h3 class="anton DIB">Desafio</h3>
								<h2 class="courgette DIB"></h2>
							</div>
							<div class="container-20 titulo-cont DIB"></div>
						</div>
						<div class="container-90 cont-masc Bg-color-4"></div>
						<hr align="center" color="#000000" size="16" style="margin: 4px auto;height:8px;" class="container-90" />
						<div class="container-90 DF FW " id="ContTextOdio">
							<div class="info-cont"></div>
						</div>
					</li>
				</ul>
			</div>
			<div class="container-100 DIB Bg-color-3 Cont-h-masc">
				<ul class="container-90">
					<li id="masc-reli">
						<div class="container-90 DF noticia-header">
							<div class="container-20 titulo-cont DIB"></div>
							<div class="masc-name titulo-noticia text-center DIB container-60">
								<h3 class="anton DIB">Desafio</h3>
								<h2 class="courgette DIB"></h2>
							</div>
							<div class="container-20 titulo-cont DIB"></div>
						</div>
						<div class="container-90 cont-masc Bg-color-4"></div>
						<hr align="center" color="#000000" size="16" style="margin: 4px auto;height:8px;" class="container-90" />
						<div class="container-90 DF FW" id="ContTextReli">
							<div class="info-cont"></div>
						</div>
					</li>
				</ul>
			</div>
			<div class="container-100 DIB Bg-color-3 Cont-h-masc" >
				<ul class="container-90">
					<li id="masc-objet">
						<div class="container-90 DF noticia-header">
							<div class="container-20 titulo-cont DIB"></div>
							<div class="masc-name titulo-noticia text-center DIB container-60">
								<h3 class="anton DIB">Desafio</h3>
								<h2 class="courgette DIB"></h2>
							</div>
							<div class="container-20 titulo-cont DIB"></div>
						</div>
						<div class="container-90 cont-masc Bg-color-4"></div>
						<hr align="center" color="#000000" size="16" style="margin: 4px auto;height:8px;" class="container-90" />
						<div class="container-90 DF FW" id="ContTextObjet">
							<div class="info-cont"></div>
						</div>
					</li>
				</ul>
			</div>
		</div>	
	</div>
	<!--/#car-mascs-->

	<div class="container-70 DF FW " id="masc-desktop">
		<div class="container-50 DF FW">
			<div class="container-100 DIB Bg-color-3 Cont-h-masc">
				<ul class="container-90">
					<li id="masc-medo">
						<div class="container-90 DF noticia-header">
							<div class="container-20 titulo-cont DIB"></div>
							<div class="masc-name titulo-noticia text-center DIB container-60">
								<h3 class="anton DIB">Desafio</h3>
								<h2 class="courgette DIB">Passus</h2>
							</div>
							<div class="container-20 titulo-cont DIB"></div>
						</div>
						<div class="container-90 cont-masc Bg-color-4"> 
							<div class="container-100 BG-masc">
								<img src="arquivos/BG-Passus.gif">
							</div>
							<i class="container-50 PA icon-masc-medo DB mj"></i>
							<div class="container-100 PA boss-flag">
								<img src="arquivos/FaixaPassus.png">
							</div>
						</div>
						<hr align="center" color="#000000" size="16" style="margin: 4px auto;height:8px;" class="container-90" />
						<div class="container-90 DF FW">
							<div class="info-cont">
								<p>Entidade está corrompendo a mente dos habitantes de Vitaelocis! Ajude a restaurar a confiança e a paz.</p>
								<button class="coiny container-40 batalha-button fight-masc-medo">BATALHAR</button>
							</div>
						</div>
					</li>	
				</ul>
			</div>	
			<div class="container-100 DIB Bg-color-1 space-1 trirong DF FW" >
				<h2 class="container-100 coiny text-center tit-not">Ataque na Cidade</h2>
				<h3 class="text-center container-100 subtit-not">Vítima do primeiro ataque relatam o medo e desespero</h3>
				<div class="container-100 DF">
					<div class="container-30 DF FW">
						<img src="arquivos/lost.png" alt="Asinus , 34 anos" title="Asinus Correia">
						<p class="container-100 text-center">Asinus, 34 anos</p>
					</div>
					<p class="container-70">Vitaelocis sofreu ontem (Gladius) um atentado a bomba no centro comercial às 5:00 horas. Informantes relatam ter havido uso de gás perfurante no ataque. Não foi contabilizado o número de vítimas, mas já existem habitantes se refugiando nas colinas Scutum. Agora temos a seguir o depoimento de uma das vítimas, "Eles eram mascarados, estavam claramente seguindo ordens! destruíram toda a praça e não era apenas um grupo eram 3 talvez 4. Vi vários corpos enquanto fugia." Disse Asinus Correia de 34 anos para o jornal Clarim Odium.</p></p>
				</div>
				
				<p>Especialistas que estavam acompanhando o conflito sulista advertem que alguns dos grupos conflitantes estão se espalhando para cidades de nossa região e que possivelmente os atentados tem relação direta com os fatos. Aparentemente alguns comandantes milicianos de Tenebrilocis estão deslocando suas tropas em direção à Vitaelocis para demarcar pontos estratégicos no conflito.
				</p>
				<p>Autoridades da defesa popular dizem que era totalmente inesperado o acontecimento e que estão trabalhando para redução de danos. Alguns dos membros da defesa que estavam nas operações de resgate dizem que a cidade não tem estrutura para um conflito contra os milicianos.</p>
				<p>Estamos coletando mais informações sobre os desaparecidos e sobre os danos causados.</p>
			</div>	
		</div>
		<div class="container-50 DF FW">
			<div class="container-100 DIB Bg-color-1 ">
				<img src="arquivos/Noticias-extras-pt1-2.png">
			</div>
			<div class="container-100 DIB Bg-color-3 Cont-h-masc">
				<ul class="container-90">
					<li id="masc-odio">
						<div class="container-90 DF noticia-header">
							<div class="container-20 titulo-cont DIB"></div>
							<div class="masc-name titulo-noticia text-center DIB container-60">
								<h3 class="anton DIB">Desafio</h3>
								<h2 class="courgette DIB"></h2>
							</div>
							<div class="container-20 titulo-cont DIB"></div>

						</div>

						<div class="container-90 cont-masc Bg-color-4"></div>

						<hr align="center" color="#000000" size="16" style="margin: 4px auto;height:8px;" class="container-90" />

						<div class="container-90 DF FW " id="ContTextOdio">
							<div class="info-cont">
							</div>
						</div>

					</li>
				</ul>
			</div>
		</div>
		<div class="container-50 DF FW">
			<div class="container-100 DIB Bg-color-1">
				<img src="arquivos/Noticia-pt1.png">
			</div>	
			<div class="container-100 DIB Bg-color-3 Cont-h-masc">
				<ul class="container-90">
					<li id="masc-reli">
						<div class="container-90 DF noticia-header">
							<div class="container-20 titulo-cont DIB"></div>
							<div class="masc-name titulo-noticia text-center DIB container-60">
								<h3 class="anton DIB">Desafio</h3>
								<h2 class="courgette DIB"></h2>
							</div>
							<div class="container-20 titulo-cont DIB"></div>

						</div>

						<div class="container-90 cont-masc Bg-color-4"></div>

						<hr align="center" color="#000000" size="16" style="margin: 4px auto;height:8px;" class="container-90" />

						<div class="container-90 DF FW" id="ContTextReli">
							<div class="info-cont"></div>
						</div>
					</li>
				</ul>
			</div>	
			<div class="container-100 DIB Bg-color-1 ">
				<img src="arquivos/Noticias-extras-pt1-3.png">
			</div>	
		</div>
		<div class="container-50 DF FW">
			<div class="container-100 DIB Bg-color-1">
				<img src="arquivos/Noticias-extras-pt1-1.png">
			</div>
			<div class="container-100 DIB Bg-color-3 Cont-h-masc" >
				<ul class="container-90">
					<li id="masc-objet">
						<div class="container-90 DF noticia-header">
							<div class="container-20 titulo-cont DIB"></div>
							<div class="masc-name titulo-noticia text-center DIB container-60">
								<h3 class="anton DIB">Desafio</h3>
								<h2 class="courgette DIB"></h2>
							</div>
							<div class="container-20 titulo-cont DIB"></div>

						</div>

						<div class="container-90 cont-masc Bg-color-4"></div>

						<hr align="center" color="#000000" size="16" style="margin: 4px auto;height:8px;" class="container-90" />

						<div class="container-90 DF FW" id="ContTextObjet">
							<div class="info-cont">
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="container-100 DIB Bg-color-1">
				<img src="arquivos/Noticia-pt3.png">
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
