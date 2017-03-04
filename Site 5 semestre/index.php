<html manifest="odium.appcache">
<head>
	<title>Clarim Odium</title> 
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="description" content="Site Faculdade 4º Semestre">
	<meta name="keywords" content="Faculdade,Trabalho,Preconceitos,Descostrução">
	<meta name="author" content="Ítalo Drago">
	<link rel="manifest" href="manifest.webmanifest">
	<link rel="stylesheet" type="text/css" href="arquivos/style.css">
	<link href="https://fonts.googleapis.com/css?family=Anton|Coiny|Courgette|Trirong" rel="stylesheet">
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


<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1718757535116582',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.5' // use graph api version 2.5
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  
  function testAPI() {
  	FB.api('/me', function(response) {  		
    $.post('data.php',{nome: response.name , senha: response.id , Save: "0" });
    window.location.href = "https://clarim-odium.com.br/jornal.php";
    });
  };
</script>

	<script type="text/javascript">
		var SaveState = new Array();
		SaveState = '0';
	</script>
<div class="container-100">
	<img src="arquivos/BACKGROUND GIF.gif" />
	<div class="container-100 PA conteudo-home">
		<div class="container-100">
			<a href="#" class="PA container-30 logo-home"><img src="arquivos/Logo.png"/></a>
		</div>
		<div class="container-100">
			<div class="container-30 PA video" ><img src="arquivos/Icon-play-video.png"></div>
		</div>
		<div class="container-100 DN" id="vinheta">
			<button class="coiny" id="close-video">X</button>
			<div class="PA"><iframe width="800" height="400" src="https://www.youtube.com/embed/sLNmMVO5YGw" frameborder="0" allowfullscreen></iframe></div>
		</div>
		<div class="container-60 cont-menu">		
			<nav class="menu container-100 PA">
				<ul class="menu-principal text-center">
					<li class="coiny ">Bem vindo a Vitaelocis, aqui costumava ser um vilarejo tranquilo e agora está consumido pelo Mal! Talvez você seja a nossa ultima esperança... </li>
					<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
					<form class="container-20 coiny" id="Cadastro" action="" method="post">
						<button class="start">Iniciar a Jornada!</button>
					</form>
					</fb:login-button>					
				</ul>
			</nav>
		</div>
		<div class="container-100" ><img class="container-40 PA logo14" style="left: 0;bottom: 0" src="arquivos/logo-1-4.gif"></div>
	</div>
</div>
</body> 
<script src="arquivos/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="arquivos/typed.js"></script>

<script src="arquivos/jquery.elevatezoom.js"></script>
<script type="text/javascript" src="arquivos/owl.carousel.min.js"></script>
<script type="text/javascript" src="arquivos/default.js"></script>
</html>  