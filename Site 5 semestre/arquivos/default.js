//
var OD = $('#masc-odio'); 
var ODN = $('#masc-odio .masc-name h2');
var ODC = $('#masc-odio .cont-masc');
var ODT = $('#ContTextOdio .info-cont');

var RE = $('#masc-reli');
var REN = $('#masc-reli .masc-name h2');
var REC = $('#masc-reli .cont-masc');
var RET = $('#ContTextReli .info-cont');

var OB = $('#masc-objet');
var OBN = $('#masc-objet .masc-name h2');
var OBC = $('#masc-objet .cont-masc');
var OBT = $('#ContTextObjet .info-cont');

var Qcont = $('#Question p');
var Mcmf = $('.cont-masc-fight i');

var hint1 = $('.marc1');
var hint2 = $('.marc2');
var hint3 = $('.marc3');
var hint4 = $('.marc4');

$HasLM = "0"

var Start = $('.start');
//variaveis de luta
var Masc = $('#MascFight');
var FMM = $('.fight-masc-medo');	
var close = $('#close_Questions');
var close2 = $('.close_2');
var N = $('#op1');
var K = $('#resp_1');
var S = $('#op2');
var P = $('#resp_2');
var Dam = $('#PlayerLife') 
//variaveis das mascaras
$REHIDESTATE = "0";
$OBHIDESTATE = "0";
$ODHIDESTATE = "0";
//SaveState variavel
localStorage.setItem('SaveState','0');
$QN = "0";

$zoom = "0";

$('.icon-map').click(function() {
	$('.cont-notifica').addClass('hide');
	if($zoom == 0){
	$('.zoomContainer').css('display', 'block');
	$zoom = "1";
	}else{
	$('.zoomContainer').css('display', 'none');	
	$zoom = "0";
	}
});
hint1.click(function() {
	$('.cont-info').removeClass('hide');
	$('#InfoTitle').append('<p class="container-100 courgette hint" >Clarim Odium Vol. 1</p>\
							<p class="container-60 hint" id="InfoSubTitle">05 - 11 - 1920</p>');
	$('#ContInfo').append('<p class="trirong container-100 hint">Comemoração do dia da vida é a maior comemoração do ano novamente batendo todos os recordes o dia da vida que é comemorado todo segundo Sólium de Lulius encheu todas as ruas de Vitaelocis; a maioria dos habitantes saíram às ruas pedindo paz nos conflitos na região Tenebrilocis no extremo sul do continente.....</p>');
	$('.close-pop').click(function() {
		$('.cont-info').addClass('hide');
		$('.hint').remove();
	});
});
hint2.click(function() {
	$('.cont-info').removeClass('hide');
	$('#InfoTitle').append('<p class="container-100 courgette hint" >Clarim Odium Vol. 2</p>\
							<p class="container-60 hint" id="InfoSubTitle">15 - 07 - 1955</p>');
	$('#ContInfo').append('<p class="trirong container-100 hint">Destaque para o grupo de estudantes que saíram coletando roupas e mantimentos para enviar as zonas mais afetadas na disputa armada. A festança é celebrada em homenagem aos acordos que marcaram o fim da "guerra da vela" que ocorreu a 150 anos atrás.</p>');
	$('.close-pop').click(function() {
		$('.cont-info').addClass('hide');
		$('.hint').remove();
	});
});
hint3.click(function() {
	$('.cont-info').removeClass('hide');
	$('#InfoTitle').append('<p class="container-100 courgette hint">Clarim Odium Vol. 3</p>\
							<p class="container-60 hint" id="InfoSubTitle">01 - 04 - 1964</p>');
	$('#ContInfo').append('<p class="trirong container-100 hint">Os moradores mais antigos ainda falam de como foi sofrida e demorada a reconstrução de suas casas e ruas. Alguns deles ainda carregam as cicatrizes do gás perfurador que na época era usado contra civis e militares, hoje terminantemente proibido.</p>');
	$('.close-pop').click(function() {
		$('.cont-info').addClass('hide');
		$('.hint').remove();
	});
});
hint4.click(function() {
	$('.cont-info').removeClass('hide');
	$('#InfoTitle').append('<p class="container-100 courgette hint">Clarim Odium Vol. 4</p>\
							<p class="container-60 hint" id="InfoSubTitle">23 - 03 - 2000</p>');
	$('#ContInfo').append('<p class="trirong container-100 hint">Os responsáveis pela organização do evento alertam sobre manter as avenidas e calçadas sem lixo, para melhor conforto de todos e também para que não descuidarem das crianças perto do rio Flumine. Ainda está previsto a participação dos músicos cegos da fanfarra municipal.</p>');
	$('.close-pop').click(function() {
		$('.cont-info').addClass('hide');
		$('.hint').remove();
	});
});

FMM.click(function() {
	MontaQuestoes1();
});

close.click(function() {
	$('#Questions').removeClass('DB');
	$('#Questions').addClass('DN');
	$QN = "0";
	$HasLM = "0";
	$('.LM').remove();
});
close2.click(function() {
	$('#Questions').removeClass('DB');
	$('#Questions').addClass('DN');
	$QN = "0";
	$HasLM = "0";
	$('.LM').remove();
	SaveState = close2.val();
});
N.click(function() {
	SaveState = K.val();
	event.preventDefault();	
	CheckMorte();
	var dados = $('#cadSave1').serialize();
	 $.ajax({
                type: 'POST',
                dataType: 'json',
                url: 'salvarN.php',
                async: true,
                data: dados,
                success: function(response) {
                    SaveState = K.val();
                }
            });
	if ($QN == 1) {
		MontaQuestoes1();
	};
	if ($QN == 2) {
		MontaQuestoes2();
	};
	if ($QN == 3) {
		MontaQuestoes3();
	};
	if ($QN == 4) {
		MontaQuestoes4();
	};
	if ($QN == 5) {
		if ($ODHIDESTATE == 3) {
			$ODHIDESTATE = "0";
		};
		if ($OBHIDESTATE == 3) {
			$OBHIDESTATE = "0";
		};
		if ($REHIDESTATE == 3) {
			$REHIDESTATE = "0";
		};
		N.removeClass('PA');
		FMM.removeClass('hide');
		$('.stick-masc-medo i').addClass('icon-stick-masc-medo-lock');
		$('.stick-masc-medo i').removeClass('icon-stick-masc-medo');
		$('.stick-masc-objet i').addClass('icon-stick-masc-objet-lock');
		$('.stick-masc-objet i').removeClass('icon-stick-masc-objet');
		$('.stick-masc-odio i').addClass('icon-stick-masc-odio-lock');
		$('.stick-masc-odio i').removeClass('icon-stick-masc-odio');
		$('.stick-masc-reli i').addClass('icon-stick-masc-reli-lock');
		$('.stick-masc-reli i').removeClass('icon-stick-masc-reli');
		$("#PlayerLife div:first-child").removeClass('hide');
		$("#PlayerLife div:last-child").removeClass('hide');
		$("#VirtudePaci div:first-child").addClass('hide');
		$("#VirtudePaci div:nth-child(2)").addClass('hide');
		$("#VirtudePaci div:nth-child(3)").addClass('hide');
		$("#VirtudeConhe div:first-child").addClass('hide');
		$("#VirtudeConhe div:nth-child(2)").addClass('hide');
		$("#VirtudeConhe div:nth-child(3)").addClass('hide');
		$("#VirtudeEmp div:first-child").addClass('hide');
		$("#VirtudeEmp div:nth-child(2)").addClass('hide');
		$("#VirtudeEmp div:nth-child(3)").addClass('hide');
		$("#VirtudeCari div:first-child").addClass('hide');
		$("#VirtudeCari div:nth-child(2)").addClass('hide');
		$("#VirtudeCari div:nth-child(3)").addClass('hide');
		$('.mnod').html('????');
		$('.mnre').html('????');
		$('.mnob').html('????');
		MontaQuestoes1();
		CheckEscondeMasc();
		MontaMapa();
	}
});

S.click(function() {
	CheckMorte();
	event.preventDefault();
	SaveState = P.val();
	var dados = $('#cadSave2').serialize();
	 $.ajax({
                type: 'POST',
                dataType: 'json',
                url: 'salvarS.php',
                async: true,
                data: dados,
                success: function(response) {
                    SaveState = P.val();
                }
            });
	if ($QN == 1) {
		MontaQuestoes1();
	};
	if ($QN == 2) {
		MontaQuestoes2();
	};
	if ($QN == 3) {
		MontaQuestoes3();
	};
	if ($QN == 4) {
		MontaQuestoes4();
	};
});

function MontaMapa() {
	if(SaveState >= 0 & SaveState <= 5){
		$('#zoom_01').attr({
			"src": 'arquivos/Sombra-cidade.jpg',
			"data-zoom-image": 'arquivos/Mapa-Corrompido-4.jpg'
		});
		$('.zoomLens').css('background-image', 'url("arquivos/Mapa-Corrompido-4.jpg")');
	}
	if(SaveState >= 6 & SaveState <= 18){
		$('.cont-notifica').removeClass('hide');
		$('#zoom_01').attr({
			"src": 'arquivos/Sombra-cidade-Z1.jpg',
			"data-zoom-image": 'arquivos/Mapa-Corrompido-3.jpg'
		});
		$('.zoomLens').css('background-image', 'url("arquivos/Mapa-Corrompido-3.jpg")');
	}
	if(SaveState >= 19 & SaveState <= 31){
		$('.cont-notifica').removeClass('hide');
		$('#zoom_01').attr({
			"src": 'arquivos/Sombra-cidade-Z2.jpg',
			"data-zoom-image": 'arquivos/Mapa-Corrompido-2.jpg'
		});
		$('.zoomLens').css('background-image', 'url("arquivos/Mapa-Corrompido-2.jpg")');
	}
	if(SaveState >= 32 & SaveState <= 46){
		$('.cont-notifica').removeClass('hide');
		$('#zoom_01').attr({
			"src": 'arquivos/Sombra-cidade-Z3.jpg',
			"data-zoom-image": 'arquivos/Mapa-Corrompido-1.jpg'
		});
		$('.zoomLens').css('background-image', 'url("arquivos/Mapa-Corrompido-1.jpg")');
	}
	if(SaveState >= 47){
		$('.cont-info-map').addClass('hide');
		$('.cont-notifica').removeClass('hide');
		$('.cont-last-question').removeClass('hide');
		$('#zoom_01').attr({
			"src": 'arquivos/Mapa-Final--Pergunta.jpg',
			"data-zoom-image": 'arquivos/Mapa Final- LIMPO.jpg'
		});
		$('.zoomLens').css('background-image', 'url("arquivos/Mapa Final- LIMPO.jpg")');
	}
};
function HeaderResponsivo() {
	var p = $("#logo");
	var k = $("div.container-100.text-center.logo-header")
	var pw = p.width();
	var ph = p.height();
	var kh = k.height();

	p.css('margin-left' , -pw/2);
	p.css('top', -ph/2.22972219688447);
	k.css('height', ph/2.8);
	k.css({
		'border-top-width' : [ph/2.8]/2.4,
		'border-bottom-width' : [ph/2.8]/2.4
		});
};
function MenuResponsivo() {
	var i = $(".psh");
	var j = $(".cont-menu");
	var k = $(".perfil");
	var ih = i.height();

	j.css('height', ih);
	k.css('height', ih);
};
function CharResponsivo(){
	var c = $(".char");
	var cw = c.width();
	var p = $("div#PlayerLife");
	var pl = $(".Player-life-cont");

	pl.css('height',  cw/4.310055555555556);
	c.css('height', cw);
	p.css('margin-top' , cw/4.310055555555556);
}
function CheckMorte() {
	if ($QN == 1 & SaveState == "X1") {
		Qcont.typed({
	       	strings: ["O monstro Passus te devorou você não conhece o maior aliado do medo que é o desconhecimento.^1000","Você falhou e Vitaelocis está condenada."],
	       	typeSpeed: 10
	      });
		$("#PlayerLife div:last-child").addClass('hide');
		K.val("0");
		N.html('Tentar novamente');
		N.addClass('PA');
		S.addClass('hide');
		S.addClass('PA');
		$('.icon-middle').addClass('hide');
		$('.icon-middle').addClass('PA');
		$QN = "5";
		$.post('morte-1.php');
	};
	if ($QN == 1 & SaveState == "X2") {
		Qcont.typed({
        	strings: ["Continue servindo Passus afinal covardia é seu ponto forte e a ignorância guia seu caminho.^1000","Você falhou e Vitaelocis está condenada."],
        	typeSpeed: 10
      	});
      	$("#PlayerLife div:last-child").addClass('hide');
		K.val("0");
		N.html('Tentar novamente');
		N.addClass('PA');
		S.addClass('hide');
		S.addClass('PA');
		$('.icon-middle').addClass('hide');
		$('.icon-middle').addClass('PA');
		$QN = "5";
		$.post('morte-1.php');
	};
	if ($QN == 2 & SaveState == "X1") {
		Qcont.typed({
        	strings: ["O medo ainda te governa preferiu a ignorância por receio.^1000","Você falhou e Vitaelocis está condenada."],
        	typeSpeed: 10
      	});
      	$("#PlayerLife div:last-child").addClass('hide');
		K.val("0");
		N.html('Tentar novamente');
		N.addClass('PA');
		S.addClass('hide');
		S.addClass('PA');
		$('.icon-middle').addClass('hide');
		$('.icon-middle').addClass('PA');
		$QN = "5";
		$.post('morte-2.php');
	};
	if ($QN == 2 & SaveState == "X2") {
		Qcont.typed({
        	strings: ["Você aceitou algo que não sabe ao certo o que é típico da população média a voz suave retira a sua liberdade e Caedes o representante do ódio controla sua fala.^1000","Você falhou e Vitaelocis está condenada."],
        	typeSpeed: 10
      	});
      	$("#PlayerLife div:last-child").addClass('hide');
		K.val("0");
		N.html('Tentar novamente');
		N.addClass('PA');
		S.addClass('hide');
		S.addClass('PA');
		$('.icon-middle').addClass('hide');
		$('.icon-middle').addClass('PA');
		$QN = "5";
		$.post('morte-2.php');
	};
	if ($QN == 2 & SaveState == "X3") {
		Qcont.typed({
        	strings: ["O ódio falou mais forte em sua mente concordar é sempre a saída mais fácil na vida e é lá que Caedes o ódio captura suas vozes.^1000","Você falhou e Vitaelocis está condenada."],
        	typeSpeed: 10
      	});
      	$("#PlayerLife div:last-child").addClass('hide');
		K.val("0");
		N.html('Tentar novamente');
		N.addClass('PA');
		S.addClass('hide');
		S.addClass('PA');
		$('.icon-middle').addClass('hide');
		$('.icon-middle').addClass('PA');
		$QN = "5";
		$.post('morte-2.php');
	};
	if ($QN == 3 & SaveState == "X1") {
		Qcont.typed({
        	strings: ["Você caiu na armadilha de Laqueus o doutrinador e confundiu respeito com ausência de questionamento, sem questionar você nunca ganhará sabedoria.^1000","Você falhou e Vitaelocis está condenada."],
        	typeSpeed: 10
      	});
      	$("#PlayerLife div:last-child").addClass('hide');
		K.val("0");
		N.html('Tentar novamente');
		N.addClass('PA');
		S.addClass('hide');
		S.addClass('PA');
		$('.icon-middle').addClass('hide');
		$('.icon-middle').addClass('PA');
		$QN = "5";
		$.post('morte-3.php');
	};
	if ($QN == 3 & SaveState == "X2") {
		Qcont.typed({
        	strings: ["Parabéns como a maioria das pessoas você terceirizou seu pensamento.^1000","Você falhou e Vitaelocis está condenada."],
        	typeSpeed: 10
      	});
      	$("#PlayerLife div:last-child").addClass('hide');
		K.val("0");
		N.html('Tentar novamente');
		N.addClass('PA');
		S.addClass('hide');
		S.addClass('PA');
		$('.icon-middle').addClass('hide');
		$('.icon-middle').addClass('PA');
		$QN = "5";
		$.post('morte-3.php');
	};
	if ($QN == 3 & SaveState == "X3") {
		Qcont.typed({
        	strings: ["Fortes os argumentos de Laqueus… Não te culpo eles são muitos, mas ovelhas são o banquete dos pastores e dos lobos.^1000","Você falhou e Vitaelocis está condenada."],
        	typeSpeed: 10
      	});
      	$("#PlayerLife div:last-child").addClass('hide');
		K.val("0");
		N.html('Tentar novamente');
		N.addClass('PA');
		S.addClass('hide');
		S.addClass('PA');
		$('.icon-middle').addClass('hide');
		$('.icon-middle').addClass('PA');
		$QN = "5";
		$.post('morte-3.php');
	};
	if ($QN == 4 & SaveState == "X1") {
		Qcont.typed({
        	strings: ["Nunca ignore Quod, ele destrói os sonhos! Substitui sua vontade por sua necessidade.^1000","Você falhou e Vitaelocis está condenada."],
        	typeSpeed: 10
      	});
      	$("#PlayerLife div:last-child").addClass('hide');
		K.val("0");
		N.html('Tentar novamente');
		N.addClass('PA');
		S.addClass('hide');
		S.addClass('PA');
		$('.icon-middle').addClass('hide');
		$('.icon-middle').addClass('PA');
		$QN = "5";
		$.post('morte-4.php');
	};
	if ($QN == 4 & SaveState == "X2") {
		Qcont.typed({
        	strings: ["Não lute contra tudo analisar é sempre a melhor escolha não acredite em tudo duvide de tudo!^1000","Você falhou e Vitaelocis está condenada."],
        	typeSpeed: 10
      	});
      	$("#PlayerLife div:last-child").addClass('hide');
		K.val("0");
		N.html('Tentar novamente');
		N.addClass('PA');
		S.addClass('hide');
		S.addClass('PA');
		$('.icon-middle').addClass('hide');
		$('.icon-middle').addClass('PA');
		$QN = "5";
		$.post('morte-4.php');
	};
	if ($QN == 4 & SaveState == "X3") {
		Qcont.typed({
        	strings: ["Você seguirá, mas lembre-se de que em qualquer caminho a intolerância é a única Bússola que funciona.^1000","Você falhou e Vitaelocis está condenada."],
        	typeSpeed: 10
      	});
      	$("#PlayerLife div:last-child").addClass('hide');
		K.val("0");
		N.html('Tentar novamente');
		N.addClass('PA');
		S.addClass('hide');
		S.addClass('PA');
		$('.icon-middle').addClass('hide');
		$('.icon-middle').addClass('PA');
		$QN = "5";
		$.post('morte-4.php');
	};
}
function MontaQuestoes1(){
	$('#Questions').removeClass('DN');
	$('#Questions').addClass('DB');
	Masc.attr('src', 'arquivos/Passus_loop.gif');
	Mcmf.addClass('icon-stick-masc-medo');
	$QN = "1";
	if ($HasLM == 0) {
		$('.cont-life-masc').append('<div class="container-30 DF FW LM" id="MascLifeMedo">\
										<div class="container-100 Masc-life-cont"></div>\
										<div class="container-100 Masc-life-cont"></div>\
										<div class="container-100 Masc-life-cont"></div>\
									</div>\
									<div class="container-10 Bg-color-5 cont-life LM"></div>');
		$HasLM = "1";
	};
	if (SaveState == 1) {
		$("#MascLifeMedo div:first-child").addClass('hide');
		$("#VirtudePaci div:first-child").removeClass('hide');
	};
	if (SaveState == 3 | SaveState == 5) {
		$("#MascLifeMedo div:first-child").addClass('hide');
		$("#MascLifeMedo div:nth-child(2)").addClass('hide');
		$("#VirtudePaci div:first-child").removeClass('hide');
		$("#VirtudePaci div:nth-child(2)").removeClass('hide');
	};
	if (SaveState == 6 | SaveState == 8 | SaveState == 9) {
		$("#MascLifeMedo div:first-child").addClass('hide');
		$("#MascLifeMedo div:nth-child(2)").addClass('hide');
		$("#MascLifeMedo div:nth-child(3)").addClass('hide');
		$("#VirtudePaci div:first-child").removeClass('hide');
		$("#VirtudePaci div:nth-child(2)").removeClass('hide');
		$("#VirtudePaci div:nth-child(3)").removeClass('hide');
	};
	if (SaveState == 0 ) {
		Qcont.typed({
        	strings: ["Você não sabe mas vive sobre o meu domínio, a mente humana é meu reino e nela eu crio o que há de pior a Morte o sofrimento e o desespero são meus filhos e você é meu escravo ousa me desafiar? "],
        	typeSpeed: 10
      	});
		K.val("1");
		N.html('confrontar!');
		P.val("2");
		S.html('Fugir.')
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 1 ) {
		Qcont.typed({
        	strings: ["Meu nome é Passus eu represento o Medo eu cresço onde o raciocínio não existe para superar-me descubra o meu aliado mais fiel."],
        	typeSpeed: 10
      	});
		K.val('3');
		N.html("O desconhecimento");
		P.val('4');
		S.html("a violência");
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 2 ) {
		Qcont.typed({
        	strings: ["O monstro Passus te devorou e você demonstrou a fraqueza diante do desconhecido" , "Meu nome é Passus eu represento o Medo eu cresço onde o raciocínio não existe para superar-me descubra o meu aliado mais fiel."],
        	typeSpeed: 10
      	});
      	$("#PlayerLife div:first-child").addClass('hide');
		K.val('X1');
		N.html("a violência")
		P.val('5');
		S.html("O desconhecimento");
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 3 ) {
		Qcont.typed({
        	strings: ["Sim o desconhecimento é meu fiel aliado e dele você nunca escapa, eu surjo na sua mente quando o desconhecido aparece em sua vida. E você se esconde treme e demonstra sua servidão a Mim."],
        	typeSpeed: 10
      	});
		K.val('7');
		N.html("Admitir que o medo te governa");
		P.val('6');
		S.html("Continuar em busca de sabedoria");
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 4 ) {
		Qcont.typed({
        	strings: ["O monstro Passus te devorou você não conhece o maior aliado do medo que é o desconhecimento.^1000","Sim o desconhecimento é meu fiel aliado e dele você nunca escapa, eu surjo na sua mente quando o desconhecido aparece em sua vida. E você se esconde treme e demonstra sua servidão a Mim."],
        	typeSpeed: 10
      	});
      	$("#PlayerLife div:first-child").addClass('hide');
		K.val('8');
		N.html("Continuar em busca de sabedoria");
		P.val('X2');
		S.html("Admitir que o medo te governa");
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 5 ) {
		Qcont.typed({
        	strings: ["Sim o desconhecimento é meu fiel aliado e dele você nunca escapa, eu surjo na sua mente quando o desconhecido aparece em sua vida. E você se esconde treme e demonstra sua servidão a Mim."],
        	typeSpeed: 10
      	});
		K.val('X2');
		N.html("Admitir que o medo te governa");
		P.val('9');
		S.html("Continuar em busca de sabedoria");
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 6){
		event.preventDefault();
		Qcont.typed({
        	strings: ["Você continuou e superou o reino de Passus o representante do medo no entanto sua jornada em busca de informação continua."],
        	typeSpeed: 10
      	});		
		$ODHIDESTATE = "2";
		Masc.attr('src', 'arquivos/Passus_Morte.gif');
		CheckEscondeMasc();		
		N.addClass('hide');
		S.addClass('hide');
		$('.icon-middle').addClass('hide');
		FMM.addClass('hide');
		MontaMapa();			
		close.addClass('hide');
		close2.removeClass('hide');
		close2.val("10");
		$.post('Win-Passus.php');
		$.post('Update.php',{ Save: "10" });
	};
	if (SaveState == 7) {
		event.preventDefault();
		Qcont.typed({
        	strings: ["Continue servindo Passus afinal covardia é seu ponto forte e a ignorância guia seu caminho.^1000","Você continuou e superou o reino de Passus o representante do medo no entanto sua jornada em busca de informação continua.Mas cuidado você so tem mais uma chance!"],
        	typeSpeed: 10
      	});
      	$("#PlayerLife div:first-child").addClass('hide');
		SaveState = "11";	
		$ODHIDESTATE = "2";
		Masc.attr('src', 'arquivos/Passus_Morte.gif');
		CheckEscondeMasc();		
		N.addClass('hide');
		S.addClass('hide');
		$('.icon-middle').addClass('hide');
		FMM.addClass('hide');	
		MontaMapa();				
		close.addClass('hide');
		close2.removeClass('hide');
		close2.val("11");
		$.post('Win-Passus.php');
		$.post('Update.php',{ Save: "11" });
	}
	if (SaveState == 8 | SaveState == 9 ) {
		event.preventDefault();
		Qcont.typed({
        	strings: ["Você continuou e superou o reino de Passus o representante do medo no entanto sua jornada em busca de informação continua.Mas cuidado você so tem mais uma chance!"],
        	typeSpeed: 10
      	});		
		$ODHIDESTATE = "2";
		Masc.attr('src', 'arquivos/Passus_Morte.gif');
		CheckEscondeMasc();
		SaveState = "11";
		N.addClass('hide');
		S.addClass('hide');
		$('.icon-middle').addClass('hide');		
		FMM.addClass('hide');	
		MontaMapa();			
		close.addClass('hide');
		close2.removeClass('hide');
		close2.val("11");	
		$.post('Win-Passus.php');
		$.post('Update.php',{ Save: "11" });
	};
};
function MontaQuestoes2(){
	$('#Questions').removeClass('DN');
	$('#Questions').addClass('DB');
	Mcmf.removeClass('icon-stick-masc-medo');
	Masc.attr('src', 'arquivos/Caedes_loop.gif');
	$QN = "2";
	if ($HasLM == 0) {
		$('.cont-life-masc').append('<div class="container-30 DF FW LM" id="MascLifeOdio">\
										<div class="container-100 Masc-life-cont"></div>\
										<div class="container-100 Masc-life-cont"></div>\
										<div class="container-100 Masc-life-cont"></div>\
									</div>\
									<div class="container-10 Bg-color-5 cont-life LM"></div>');
		$HasLM = "1";
	};
	if (SaveState == 12 | SaveState == 14) {
		$("#MascLifeOdio div:first-child").addClass('hide');
		$("#VirtudeConhe div:first-child").removeClass('hide');
	};
	if (SaveState == 15 | SaveState == 17 | SaveState == 18) {
		$("#MascLifeOdio div:first-child").addClass('hide');
		$("#MascLifeOdio div:nth-child(2)").addClass('hide');
		$("#VirtudeConhe div:first-child").removeClass('hide');
		$("#VirtudeConhe div:nth-child(2)").removeClass('hide');
	};
	if (SaveState == 19 | SaveState == 21 | SaveState == 22 | SaveState == 23) {
		$("#MascLifeOdio div:first-child").addClass('hide');
		$("#MascLifeOdio div:nth-child(2)").addClass('hide');
		$("#MascLifeOdio div:nth-child(3)").addClass('hide');
		$("#VirtudeConhe div:first-child").removeClass('hide');
		$("#VirtudeConhe div:nth-child(2)").removeClass('hide');
		$("#VirtudeConhe div:nth-child(3)").removeClass('hide');
	};
	if (SaveState == 10){
		close.removeClass('hide');
		close2.addClass('PA');
		close2.addClass('hide');
		Qcont.typed({
        	strings: ["Seja bem vindo eu ofereço o que há de mais doce na vida, você sabe que me ama e me usa conforme lhe convém, se passou pelo medo de mim não passará, estou nas famílias e faço parte da história humana deseja me conhecer?"],
        	typeSpeed: 10
      	});
		K.val('13');
		N.html('Não.');
		P.val('12');
		S.html('Sim.');
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 11){
		close.removeClass('hide');
		close2.addClass('PA');
		close2.addClass('hide');
		Qcont.typed({
        	strings: ["Seja bem vindo eu ofereço o que há de mais doce na vida, você sabe que me ama e me usa conforme lhe convém, se passou pelo medo de mim não passará, estou nas famílias e faço parte da história humana deseja me conhecer?"],
        	typeSpeed: 10
      	});
		K.val('14');
		N.html('Sim.');
		P.val('X1');
		S.html('Não.');
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 12){
		Qcont.typed({
        	strings: ["Meu nome é Caedes e sei que você é superior, se me aceitar te darei o que todos querem! A voz do povo diz sempre aquilo que desejo."],
        	typeSpeed: 10
      	});
		K.val('15');
		N.html('ignorar')
		P.val('16');
		S.html('Aceitar')
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 13){
		Qcont.typed({
        	strings: ["O medo ainda te governa preferiu a ignorância por receio.^1000","Meu nome é Caedes e sei que você é superior, se me aceitar te darei o que todos querem! A voz do povo diz sempre aquilo que desejo."],
        	typeSpeed: 10
      	});
		K.val('17');
		$("#PlayerLife div:first-child").addClass('hide');
		N.html('ignorar')
		P.val('X2');
		S.html('Aceitar')
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 14){
		Qcont.typed({
        	strings: ["Meu nome é Caedes e sei que você é superior, se me aceitar te darei o que todos querem! A voz do povo diz sempre aquilo que desejo."],
        	typeSpeed: 10
      	});
		K.val('18');
		N.html('ignorar')
		P.val('X2');
		S.html('Aceitar')
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 15){
		Qcont.typed({
        	strings: ["Não Ouse me ignorar eu tenho mais voz eu sou o que a maioria profere eu estou em tudo eu represento o ódio e você sempre terá de concordar comigo. Em meu nome milhões foram mortos por serem minoria."],
        	typeSpeed: 10
      	});
		K.val('19');
		N.html('ignorar');
		P.val('20');
		S.html('Concordar');
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 16){
		Qcont.typed({
        	strings: ["Você aceitou algo que não sabe ao certo o que é típico da população média a voz suave retira a sua liberdade e Caedes o representante do ódio controla sua fala.^1000","Não Ouse me ignorar eu tenho mais voz eu sou o que a maioria profere eu estou em tudo eu represento o ódio e você sempre terá de concordar comigo. Em meu nome milhões foram mortos por serem minoria."],
        	typeSpeed: 10
      	});
      	$("#PlayerLife div:first-child").addClass('hide');
		K.val('X3');
		N.html('Concordar');
		P.val('26');
		S.html('ignorar');
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 17){
		Qcont.typed({
        	strings: ["Não Ouse me ignorar eu tenho mais voz eu sou o que a maioria profere eu estou em tudo eu represento o ódio e você sempre terá de concordar comigo. Em meu nome milhões foram mortos por serem minoria."],
        	typeSpeed: 10
      	});
		K.val('22');
		N.html('ignorar');
		P.val('X3');
		S.html('Concordar');
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 18){
		Qcont.typed({
        	strings: ["Não Ouse me ignorar eu tenho mais voz eu sou o que a maioria profere eu estou em tudo eu represento o ódio e você sempre terá de concordar comigo. Em meu nome milhões foram mortos por serem minoria."],
        	typeSpeed: 10
      	});
		K.val('X3');
		N.html('Concordar');
		P.val('23');
		S.html('ignorar');
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 19){
		Qcont.typed({
        	strings: ["ignorar o discurso do ódio é a única forma de continuar e também de conviver com as pessoas próximas."],
        	typeSpeed: 10
      	});
		$('.stick-masc-odio i').removeClass('icon-stick-masc-odio-lock');
		$('.stick-masc-odio i').addClass('icon-stick-masc-odio');
		$('.mnod').html('Caedes');
		$REHIDESTATE = "2";
		Masc.attr('src', 'arquivos/Caedes_Morte.gif');
		var FMO = $('.fight-masc-odio');
			FMO.addClass('hide');
		CheckEscondeMasc();
		N.addClass('hide');
		S.addClass('hide');
		$('.icon-middle').addClass('hide');	
		close.addClass('hide');
		close2.removeClass('hide');
		close2.val("24");
		MontaMapa();
		$.post('Win-Caedes.php');
		$.post('Update.php',{ Save: "24" });
	};
	if (SaveState == 20){
		Qcont.typed({
        	strings: ["O ódio falou mais forte em sua mente concordar é sempre a saída mais fácil na vida e é lá que Caedes o ódio captura suas vozes.^1000","ignorar o discurso do ódio é a única forma de continuar e também de conviver com as pessoas próximas."],
        	typeSpeed: 10
      	});
      	$("#PlayerLife div:first-child").addClass('hide');
		$('.stick-masc-odio i').removeClass('icon-stick-masc-odio-lock');
		$('.stick-masc-odio i').addClass('icon-stick-masc-odio');
		$('.mnod').html('Caedes');
		$REHIDESTATE = "2";
		Masc.attr('src', 'arquivos/Caedes_Morte.gif');
		var FMO = $('.fight-masc-odio');
			FMO.addClass('hide');
		CheckEscondeMasc();
		N.addClass('hide');
		S.addClass('hide');
		$('.icon-middle').addClass('hide');	
		MontaMapa();
		close.addClass('hide');
		close2.removeClass('hide');
		close2.val("25");	
		$.post('Win-Caedes.php');
		$.post('Update.php',{ Save: "25" });
	};
	if (SaveState == 21 | SaveState == 22 | SaveState == 23 ) {
		Qcont.typed({
        	strings: ["ignorar o discurso do ódio é a única forma de continuar e também de conviver com as pessoas próximas."],
        	typeSpeed: 10
      	});		
		$REHIDESTATE = "2";
		Masc.attr('src', 'arquivos/Caedes_Morte.gif');
		var FMO = $('.fight-masc-odio');
			FMO.addClass('hide');
		CheckEscondeMasc();
		SaveState = "25";
		N.addClass('hide');
		S.addClass('hide');
		MontaMapa();
		$('.icon-middle').addClass('hide');	
		close.addClass('hide');
		close2.removeClass('hide');
		close2.val("25");
		$.post('Win-Caedes.php');
		$.post('Update.php',{ Save: "25" });
	};
};
function MontaQuestoes3(){
	$('#Questions').removeClass('DN');
	$('#Questions').addClass('DB');
	Mcmf.removeClass('icon-stick-masc-odio');
	Mcmf.addClass('icon-stick-masc-reli');
	Masc.attr('src', 'arquivos/Laqueus_loop.gif');
	$QN = "3";
	if ( $HasLM == 0) {
		$('.cont-life-masc').append('<div class="container-30 DF FW LM" id="MascLifeReli">\
										<div class="container-100 Masc-life-cont"></div>\
										<div class="container-100 Masc-life-cont"></div>\
										<div class="container-100 Masc-life-cont"></div>\
									</div>\
									<div class="container-10 Bg-color-5 cont-life LM"></div>');
		$HasLM = "1";
	}
	if (SaveState == 26 | SaveState == 28) {
		$("#MascLifeReli div:first-child").addClass('hide');
		$("#VirtudeEmp div:first-child").removeClass('hide');
	}
	if (SaveState == 29 | SaveState == 31 | SaveState == 32) {
		$("#MascLifeReli div:first-child").addClass('hide');
		$("#MascLifeReli div:nth-child(2)").addClass('hide');
		$("#VirtudeEmp div:first-child").removeClass('hide');
		$("#VirtudeEmp div:nth-child(2)").removeClass('hide');
	}
	if (SaveState == 33 | SaveState == 35 | SaveState == 36 | SaveState == 37) {
		$("#MascLifeReli div:first-child").addClass('hide');
		$("#MascLifeReli div:nth-child(2)").addClass('hide');
		$("#MascLifeReli div:nth-child(3)").addClass('hide');
		$("#VirtudeEmp div:first-child").removeClass('hide');
		$("#VirtudeEmp div:nth-child(2)").removeClass('hide');
		$("#VirtudeEmp div:nth-child(3)").removeClass('hide');
	}
	if (SaveState == 24){
		close.removeClass('hide');
		close2.addClass('PA');
		close2.addClass('hide');	
		Qcont.typed({
        	strings: ["A minha volta sempre se reúnem os mais necessitados, quando a esperança falha é a mim que todos veem. eu só peço que aceitem e que me respeitem afinal eu penso por todos e o que eu falo tem que ser passado adiante."],
        	typeSpeed: 10
      	});
		K.val('26');
		N.html('Questionar.');
		P.val('27');
		S.html('Respeitar.');
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');
	};
	if (SaveState == 25){
		close.removeClass('hide');
		close2.addClass('PA');
		close2.addClass('hide');
		Qcont.typed({
        	strings: ["A minha volta sempre se reúnem os mais necessitados, quando a esperança falha é a mim que todos veem. eu só peço que aceitem e que me respeitem afinal eu penso por todos e o que eu falo tem que ser passado adiante."],
        	typeSpeed: 10
      	});
		K.val('X1');
		N.html('Respeitar.');
		P.val('28');
		S.html('Questionar.');
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 26){
		Qcont.typed({
        	strings: ["Nossas leis são antigas questioná-las não leva a nada, apenas entenda que aqui sua voz se soma às nossas e você fala aquilo que queremos, entende isso? Agora pense que nosso grupo é sempre caloroso para com os seus membros, deseja nos acompanhar?"],
        	typeSpeed: 10
      	});
		K.val('29');
		N.html('Recusar');
		P.val('30');
		S.html('Aceitar');
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 27){
		Qcont.typed({
        	strings: ["Você caiu na armadilha de Laqueus o doutrinador e confundiu respeito com ausência de questionamento, sem questionar você nunca ganhará sabedoria.^1000","Nossas leis são antigas questioná-las não leva a nada, apenas entenda que aqui sua voz se soma às nossas e você fala aquilo que queremos, entende isso? Agora pense que nosso grupo é sempre caloroso para com os seus membros, deseja nos acompanhar?"],
        	typeSpeed: 10
      	});
      	$("#PlayerLife div:first-child").addClass('hide');
		K.val('31');
		N.html('Recusar');
		P.val('X2');
		S.html('Aceitar');
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 28){
		Qcont.typed({
        	strings: ["Nossas leis são antigas questioná-las não leva a nada, apenas entenda que aqui sua voz se soma às nossas e você fala aquilo que queremos, entende isso? Agora pense que nosso grupo é sempre caloroso para com os seus membros, deseja nos acompanhar?"],
        	typeSpeed: 10
      	});
		K.val('X2');
		N.html('Aceitar');
		P.val('32');
		S.html('Recusar');
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 29){
		Qcont.typed({
        	strings: ["Você sabe as consequências de sua escolha? CLARO QUE NÃO hahaha. Como um grupo excluímos quem convém e você é a pessoa da rodada… Para que fique claro você será o exemplo daquilo que não pode ser feito, profissionalmente, academicamente estará sempre um passo atrás devido a sua teimosia!"],
        	typeSpeed: 10
      	});
		K.val('33');
		N.html('Encarar');
		P.val('34');
		S.html('Arrependimento');
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 30){
		Qcont.typed({
        	strings: ["Parabéns como a maioria das pessoas você terceirizou seu pensamento.^1000","Você sabe as consequências de sua escolha? CLARO QUE NÃO hahaha. Como um grupo excluímos quem convém e você é a pessoa da rodada… Para que fique claro você será o exemplo daquilo que não pode ser feito, profissionalmente, academicamente estará sempre um passo atrás devido a sua teimosia!"],
        	typeSpeed: 10
      	});
      	$("#PlayerLife div:first-child").addClass('hide');
		K.val('35');
		N.html('Encarar');
		P.val('X3');
		S.html('Arrependimento');
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 31){
		Qcont.typed({
        	strings: ["Você sabe as consequências de sua escolha? CLARO QUE NÃO hahaha. Como um grupo excluímos quem convém e você é a pessoa da rodada… Para que fique claro você será o exemplo daquilo que não pode ser feito, profissionalmente, academicamente estará sempre um passo atrás devido a sua teimosia!"],
        	typeSpeed: 10
      	});
		K.val('36');
		N.html('Encarar');
		P.val('X3');
		S.html('Arrependimento');
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 32){
		Qcont.typed({
        	strings: ["Você sabe as consequências de sua escolha? CLARO QUE NÃO hahaha. Como um grupo excluímos quem convém e você é a pessoa da rodada… Para que fique claro você será o exemplo daquilo que não pode ser feito, profissionalmente, academicamente estará sempre um passo atrás devido a sua teimosia!"],
        	typeSpeed: 10
      	});
		K.val('37');
		N.html('Encarar');
		P.val('X3');
		S.html('Arrependimento');
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 33){		
		Qcont.typed({
        	strings: [" A vida sem se preocupar com o que pensar é mais fácil, mas não é vida é prisão."],
        	typeSpeed: 10
      	});
		$OBHIDESTATE = "2";
		Masc.attr('src', 'arquivos/Laqueus_morte.gif');
		var FMR = $('.fight-masc-reli');
			FMR.addClass('hide');
		CheckEscondeMasc();
		N.addClass('hide');
		S.addClass('hide');
		MontaMapa();
		$('.icon-middle').addClass('hide');	
		$('.icon-middle').addClass('PA');
		close.addClass('hide');
		close2.removeClass('hide');
		close2.val("38");
		$.post('Win-Laqueus.php');
		$.post('Update.php',{ Save: "38" });
	};
	if (SaveState == 34 ) {
		Qcont.typed({
        	strings: ["Fortes os argumentos de Laqueus… Não te culpo eles são muitos, mas ovelhas são o banquete dos pastores e dos lobos.^1000"," A vida sem se preocupar com o que pensar é mais fácil, mas não é vida é prisão."],
        	typeSpeed: 10
      	});
      	$("#PlayerLife div:first-child").addClass('hide');
		$OBHIDESTATE = "2";
		Masc.attr('src', 'arquivos/Laqueus_morte.gif');
		var FMR = $('.fight-masc-reli');
			FMR.addClass('hide');
		CheckEscondeMasc();
		N.addClass('hide');
		S.addClass('hide');
		MontaMapa();
		$('.icon-middle').addClass('hide');	
		$('.icon-middle').addClass('PA');
		close.addClass('hide');
		close2.removeClass('hide');
		close2.val("39");
		$.post('Win-Laqueus.php');
		$.post('Update.php',{ Save: "39" });
	};
	if (SaveState == 35 | SaveState == 36 | SaveState == 37 ) {
		Qcont.typed({
        	strings: [" A vida sem se preocupar com o que pensar é mais fácil, mas não é vida é prisão."],
        	typeSpeed: 10
      	});
		$OBHIDESTATE = "2";
		Masc.attr('src', 'arquivos/Laqueus_morte.gif');
		var FMR = $('.fight-masc-reli');
			FMR.addClass('hide');
		CheckEscondeMasc();
		N.addClass('hide');
		S.addClass('hide');
		MontaMapa();
		$('.icon-middle').addClass('hide');	
		$('.icon-middle').addClass('PA');
		close.addClass('hide');
		close2.removeClass('hide');
		close2.val("39");
		$.post('Win-Laqueus.php');
		$.post('Update.php',{ Save: "39" });
	};
};
function MontaQuestoes4(){
	$('#Questions').removeClass('DN');
	$('#Questions').addClass('DB');
	Mcmf.removeClass('icon-stick-masc-reli');
	Mcmf.addClass('icon-stick-masc-objet');
	Masc.attr('src', 'arquivos/Quod_loop.gif');
	$QN = "4";
	if ( $HasLM == 0) {
		$('.cont-life-masc').append('<div class="container-30 DF FW LM" id="MascLifeObje">\
										<div class="container-100 Masc-life-cont"></div>\
										<div class="container-100 Masc-life-cont"></div>\
										<div class="container-100 Masc-life-cont"></div>\
									</div>\
									<div class="container-10 Bg-color-5 cont-life LM"></div>');
		$HasLM = "1";
	}
	if (SaveState == 40 | SaveState == 42) {
		$("#MascLifeObje div:first-child").addClass('hide');
		$("#VirtudeCari div:first-child").removeClass('hide');
	}
	if (SaveState == 43 | SaveState == 45 | SaveState == 46) {
		$("#MascLifeObje div:first-child").addClass('hide');
		$("#MascLifeObje div:nth-child(2)").addClass('hide');
		$("#VirtudeCari div:first-child").removeClass('hide');
		$("#VirtudeCari div:nth-child(2)").removeClass('hide');
	}
	if (SaveState == 47 | SaveState == 49 | SaveState == 50 | SaveState == 51) {
		$("#MascLifeObje div:first-child").addClass('hide');
		$("#MascLifeObje div:nth-child(2)").addClass('hide');
		$("#MascLifeObje div:nth-child(3)").addClass('hide');
		$("#VirtudeCari div:first-child").removeClass('hide');
		$("#VirtudeCari div:nth-child(2)").removeClass('hide');
		$("#VirtudeCari div:nth-child(3)").removeClass('hide');
	}
	if (SaveState == 38){
		close.removeClass('hide');
		close2.addClass('PA');
		close2.addClass('hide');
		Qcont.typed({
        	strings: ["Chegou longe! Algo irrelevante em minha opinião, consumir-te é o objetivo do mundo e eu defino seu preparo. Aqui eu aponto a direção apenas siga…"],
        	typeSpeed: 10
      	});
		K.val('40');
		N.html('Lutar!');
		P.val('41');
		S.html('Ignorar');
		N.removeClass('hide');
		S.removeClass('hide');
			S.removeClass('PA')
		;

	};
	if (SaveState == 39){
		close.removeClass('hide');
		close2.addClass('PA');
		close2.addClass('hide');
		Qcont.typed({
        	strings: ["Chegou longe! Algo irrelevante em minha opinião, consumir-te é o objetivo do mundo e eu defino seu preparo. Aqui eu aponto a direção apenas siga…"],
        	typeSpeed: 10
      	});
		K.val('42');
		N.html('Lutar!');
		P.val('X1');
		S.html('Ignorar');
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 40){
		Qcont.typed({
        	strings: ["RATO! Olhe a sua volta os ricos continuam ricos, os pobres continuam lutando por migalhas… É esse minha missão aqui, siga o caminho ou pereça. Humanos são maus e suas escolhas os trazem aqui."],
        	typeSpeed: 10
      	});
		K.val('44');
		N.html('Lutar!');
		P.val('43');
		S.html('Analisar');
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 41){
		Qcont.typed({
        	strings: ["Nunca ignore Quod, ele destrói os sonhos! Substitui sua vontade por sua necessidade.^1000","RATO! Olhe a sua volta os ricos continuam ricos, os pobres continuam lutando por migalhas… É esse minha missão aqui, siga o caminho ou pereça. Humanos são maus e suas escolhas os trazem aqui."],
        	typeSpeed: 10
      	});
      	$("#PlayerLife div:first-child").addClass('hide');
		K.val('45');
		N.html('Analisar');
		P.val('X2');
		S.html('Lutar!');
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 42){
		Qcont.typed({
        	strings: ["RATO! Olhe a sua volta os ricos continuam ricos, os pobres continuam lutando por migalhas… É esse minha missão aqui, siga o caminho ou pereça. Humanos são maus e suas escolhas os trazem aqui."],
        	typeSpeed: 10
      	});
		K.val('46');
		N.html('Analisar');
		P.val('X2');
		S.html('Lutar!');
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 43){
		Qcont.typed({
        	strings: ["Não acredita na maldade dos homens? Saiba que pessoas odeiam sem entender, eles morrem apenas por terem nascido em um país diferente, vocês matam e morrem por nada, querem criar um mundo bom pra si esquecendo do outro. SIGA O CAMINHO apenas isso…"],
        	typeSpeed: 10
      	});
		K.val('48');
		N.html('Seguir');
		P.val('47');
		S.html('Não! talvez o bem ainda exista');
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 44){
		Qcont.typed({
        	strings: ["Não lute contra tudo analisar é sempre a melhor escolha não acredite em tudo duvide de tudo!^1000","Não acredita na maldade dos homens? Saiba que pessoas odeiam sem entender, eles morrem apenas por terem nascido em um país diferente, vocês matam e morrem por nada, querem criar um mundo bom pra si esquecendo do outro. SIGA O CAMINHO apenas isso…"],
        	typeSpeed: 10
      	});
      	$("#PlayerLife div:first-child").addClass('hide');
		K.val('X3');
		N.html('Seguir');
		P.val('49');
		S.html('Não! talvez o bem ainda exista');
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 45){
		Qcont.typed({
        	strings: ["Não acredita na maldade dos homens? Saiba que pessoas odeiam sem entender, eles morrem apenas por terem nascido em um país diferente, vocês matam e morrem por nada, querem criar um mundo bom pra si esquecendo do outro. SIGA O CAMINHO apenas isso…"],
        	typeSpeed: 10
      	});
		K.val('50');
		N.html('Não! talvez o bem ainda exista');
		P.val('X3');
		S.html('Seguir');
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 46){
		Qcont.typed({
        	strings: ["Não acredita na maldade dos homens? Saiba que pessoas odeiam sem entender, eles morrem apenas por terem nascido em um país diferente, vocês matam e morrem por nada, querem criar um mundo bom pra si esquecendo do outro. SIGA O CAMINHO apenas isso…"],
        	typeSpeed: 10
      	});
		K.val('51');
		N.html('Não! talvez o bem ainda exista');
		P.val('X3');
		S.html('Seguir');
		N.removeClass('hide');
		S.removeClass('hide');
		S.removeClass('PA');
		$('.icon-middle').removeClass('hide');
		$('.icon-middle').removeClass('PA');		
	};
	if (SaveState == 47){
		Qcont.typed({
        	strings: ["Parabéns você venceu o Quod!"],
        	typeSpeed: 10
      	});
		$('.stick-masc-objet i').addClass('icon-stick-masc-objet');
		$('.stick-masc-objet i').removeClass('icon-stick-masc-objet-lock-lock');
		Masc.attr('src', 'arquivos/Quod_Morte.gif');
		$('.mnob').html('Quod');
		N.addClass('hide');
		S.addClass('hide');
		var FMB = $('.fight-masc-objet');
			FMB.addClass('hide');
		MontaMapa();
		$('.icon-middle').addClass('hide');	
		close.addClass('hide');
		close2.removeClass('hide');
		close2.val("100");
		$.post('Update.php',{ Save: "100" });
		$.post('WIN.php');
	};
	if (SaveState == 48) {
		Qcont.typed({
        	strings: ["Você seguirá, mas lembre-se de que em qualquer caminho a intolerância é a única Bússola que funciona.^1000","Parabéns você venceu o Quod!"],
        	typeSpeed: 10
      	});
      	$("#PlayerLife div:first-child").addClass('hide');
		$('.stick-masc-objet i').addClass('icon-stick-masc-objet');
		$('.stick-masc-objet i').removeClass('icon-stick-masc-objet-lock-lock');
		Masc.attr('src', 'arquivos/Quod_Morte.gif');
		$('.mnob').html('Quod');
		N.addClass('hide');
		S.addClass('hide');
		var FMB = $('.fight-masc-objet');
			FMB.addClass('hide');
		MontaMapa();		
		$('.icon-middle').addClass('hide');	
		close.addClass('hide');
		close2.removeClass('hide');
		close2.val("100");
		$.post('WIN.php');
		$.post('Update.php',{ Save: "100" });
	};
	if (SaveState == 48 | SaveState == 49 | SaveState == 50 | SaveState == 51 ) {
		Qcont.typed({
        	strings: ["Parabéns você venceu o Quod!"],
        	typeSpeed: 10
      	});
		$('.stick-masc-objet i').addClass('icon-stick-masc-objet');
		$('.stick-masc-objet i').removeClass('icon-stick-masc-objet-lock-lock');
		Masc.attr('src', 'arquivos/Quod_Morte.gif');
		$('.mnob').html('Quod');
		N.addClass('hide');
		S.addClass('hide');
		var FMB = $('.fight-masc-objet');
			FMB.addClass('hide');
		MontaMapa();
		$('.icon-middle').addClass('hide');	
		close.addClass('hide');
		close2.removeClass('hide');
		close2.val("100");
		$.post('Update.php',{ Save: "100" });
		$.post('WIN.php');
	};
};
function CheckEscondeMasc() {
	$('.mnod').html('????');
	$('.mnre').html('????');
	$('.mnob').html('????');
	//verifica mascara ODIO
		if ($ODHIDESTATE == 0) {
			ODN.html('????');
			$('.cont-odio').remove();
			$('.cont-button-start').remove();
			ODC.append('<div class="hide-odio block-mascs"><div class="container-100 BG-masc"><img src="arquivos/Masc-Odio-Hide.png"></div><div class="container-100 PA boss-flag"><img src="arquivos/FaixaXXX.png"></div></div>');
			ODT.append('<i class="icon-lock-odio container-50 DB"></i>');
			$ODHIDESTATE = "1";
		}
		if ($ODHIDESTATE == 2) {
			$('.stick-masc-medo i').removeClass('icon-stick-masc-medo-lock');
			$('.stick-masc-medo i').addClass('icon-stick-masc-medo');
			ODN.html('Caedes');
			$('.hide-odio').remove();
			$('.icon-lock-odio').remove();
			ODC.append('<div class="cont-odio">\
							<div class="container-100 BG-masc">\
								<img src="arquivos/BG-Caedes.gif">\
							</div>\
							<i class="container-50 PA mj icon-masc-odio DB"></i>\
							<div class="container-100 PA boss-flag">\
								<img src="arquivos/FaixaCaedes.png">\
							</div>\
						</div>');

			ODT.append('<div class="cont-button-start"<p> Esse ser já está totalmente desfigurado, sua pele foi absorvida pelo ódio e agora ele consome a felicidade do vilarejo. Vença-o e liberte a população!</p>\
						<button class="coiny container-40 batalha-button fight-masc-odio">BATALHAR</button></div>');
			var FMO = $('.fight-masc-odio');
			FMO.click(function() {
				MontaQuestoes2();
			});
			$ODHIDESTATE = "3";
			
		}
	//verifica mascara RELIGIÃO
		if ($REHIDESTATE == 0) {
			REN.html('????');
			$('.cont-reli').remove();
			$('.cont-button-start').remove();
			REC.append('<div class="hide-reli block-mascs"><div class="container-100 BG-masc"><img src="arquivos/Masc-Relig-Hide.png"></div><div class="container-100 PA boss-flag"><img src="arquivos/FaixaXXX.png"></div></div>');
			RET.append('<i class="icon-lock-reli container-50 DB"></i>');
			$REHIDESTATE = "1";
		}
		if ($REHIDESTATE == 2) {
			REN.html('Laqueus');
			$('.stick-masc-odio i').removeClass('icon-stick-masc-odio-lock');
			$('.stick-masc-odio i').addClass('icon-stick-masc-odio');
			$('.mnod').html('Caedes');
			$('.hide-reli').remove();
			$('.icon-lock-reli').remove();
			REC.append('<div class="cont-reli">\
							<div class="container-100 BG-masc">\
								<img src="arquivos/BG-Laqueus.gif">\
							</div>\
							<i class="container-50 PA mj icon-masc-reli DB"></i>\
							<div class="container-100 PA boss-flag">\
								<img src="arquivos/FaixaLaqueus.png">\
							</div>\
						</div>');
			RET.append('<div class="cont-button-start"<p>Ele quer apenas vaidades e o poder dele se espalha rápido! Destrua-o!</p>\
						<button class="coiny container-40 batalha-button fight-masc-reli">BATALHAR</button></div>');
			var FMR = $('.fight-masc-reli');
			FMR.click(function() {
				MontaQuestoes3();
			});
			$REHIDESTATE = "3";
			}
	//verifica mascara OBJETIFICAÇÃO 
		if ($OBHIDESTATE == 0) {
			OBN.html('????');
			$('.cont-obje').remove();
			$('.cont-button-start').remove();
			OBC.append('<div class="hide-obje block-mascs"><div class="container-100 BG-masc"><img src="arquivos/Masc-Obje-Hide.png"></div><div class="container-100 PA boss-flag"><img src="arquivos/FaixaXXX.png"></div></div>');
			OBT.append('<i class="icon-lock-obje container-50 DB"></i>');
			$OBHIDESTATE = "1";
		}
		if ($OBHIDESTATE == 2) {
			OBN.html('Quod');
			$('.stick-masc-reli i').removeClass('icon-stick-masc-reli-lock');
			$('.stick-masc-reli i').addClass('icon-stick-masc-reli');
			$('.mnre').html('Laqueus');
			$('.hide-obje').remove();
			$('.icon-lock-obje').remove();
			OBC.append('<div class="cont-obje">\
							<div class="container-100 BG-masc">\
								<img src="arquivos/BG-Quod.gif">\
							</div>\
							<i class="container-50 PA mj icon-masc-objet DB"></i>\
							<div class="container-100 PA boss-flag">\
								<img src="arquivos/FaixaQuod.png">\
							</div>\
						</div>');
			OBT.append('<div class="cont-button-start"<p>O mais aproveitador e o destruidor das escolhas. Restabeleça a harmonia, é agora ou NUNCA!</p>\
						<button class="coiny container-40 batalha-button fight-masc-objet">BATALHAR</button</div>');
			
			var FMB = $('.fight-masc-objet');
			FMB.click(function() {
				MontaQuestoes4();
			});
			$OBHIDESTATE = "3";
		};
};
function VerificaSave() {
	if (SaveState >= 6 & SaveState <= 18){
		$("#VirtudePaci div:first-child").removeClass('hide');
		$("#VirtudePaci div:nth-child(2)").removeClass('hide');
		$("#VirtudePaci div:nth-child(3)").removeClass('hide');
		$ODHIDESTATE = "2";
		FMM.addClass('hide');
		CheckEscondeMasc();
	}
	if (SaveState >= 19 & SaveState <=32 ){
		$("#VirtudeConhe div:first-child").removeClass('hide');
		$("#VirtudeConhe div:nth-child(2)").removeClass('hide');
		$("#VirtudeConhe div:nth-child(3)").removeClass('hide');
		$("#VirtudePaci div:first-child").removeClass('hide');
		$("#VirtudePaci div:nth-child(2)").removeClass('hide');
		$("#VirtudePaci div:nth-child(3)").removeClass('hide');
		$ODHIDESTATE = "2";
		$REHIDESTATE = "2";
		var FMO = $('.fight-masc-odio');
		FMO.addClass('hide');
		FMM.addClass('hide');
		CheckEscondeMasc();
	}
	if (SaveState >= 33 & SaveState <=99){
		$("#VirtudeEmp div:first-child").removeClass('hide');
		$("#VirtudeEmp div:nth-child(2)").removeClass('hide');
		$("#VirtudeEmp div:nth-child(3)").removeClass('hide');
		$("#VirtudeConhe div:first-child").removeClass('hide');
		$("#VirtudeConhe div:nth-child(2)").removeClass('hide');
		$("#VirtudeConhe div:nth-child(3)").removeClass('hide');
		$("#VirtudePaci div:first-child").removeClass('hide');
		$("#VirtudePaci div:nth-child(2)").removeClass('hide');
		$("#VirtudePaci div:nth-child(3)").removeClass('hide');
		$('.mnob').html('Quod');
		$ODHIDESTATE = "2";
		$REHIDESTATE = "2";
		$OBHIDESTATE = "2";
		CheckEscondeMasc();
		var FMR = $('.fight-masc-reli');
		FMR.addClass('hide');
		var FMO = $('.fight-masc-odio');
		FMO.addClass('hide');
		FMM.addClass('hide');
	}
	if (SaveState == 100) {
		$('.stick-masc-objet i').addClass('icon-stick-masc-objet');
		$('.stick-masc-objet i').removeClass('icon-stick-masc-objet-lock-lock');
		$("#VirtudeEmp div:first-child").removeClass('hide');
		$("#VirtudeEmp div:nth-child(2)").removeClass('hide');
		$("#VirtudeEmp div:nth-child(3)").removeClass('hide');
		$("#VirtudeConhe div:first-child").removeClass('hide');
		$("#VirtudeConhe div:nth-child(2)").removeClass('hide');
		$("#VirtudeConhe div:nth-child(3)").removeClass('hide');
		$("#VirtudePaci div:first-child").removeClass('hide');
		$("#VirtudePaci div:nth-child(2)").removeClass('hide');
		$("#VirtudePaci div:nth-child(3)").removeClass('hide');
		$("#VirtudeCari div:first-child").removeClass('hide');
		$("#VirtudeCari div:nth-child(2)").removeClass('hide');
		$("#VirtudeCari div:nth-child(3)").removeClass('hide');
		$ODHIDESTATE = "2";
		$REHIDESTATE = "2";
		$OBHIDESTATE = "2";
		CheckEscondeMasc();
		var FMR = $('.fight-masc-reli');
		FMR.addClass('hide');
		var FMO = $('.fight-masc-odio');
		FMO.addClass('hide');
		FMM.addClass('hide');
		var FMB = $('.fight-masc-objet');
		FMB.addClass('hide');
	}
}

$('.video').click(function() {
	$('#vinheta').removeClass('DN');
});
$('#close-video').click(function() {
	$('#vinheta').addClass('DN');
});
$(document).ready( function(){
	MontaMapa();
	HeaderResponsivo();
	MenuResponsivo();
	CharResponsivo();
	CheckEscondeMasc();
	VerificaSave();


	var $windowwidth = $("body").width();
	var carmasc = $('#car-mascs');
	var desmasc = $('#masc-desktop');

		if ($windowwidth > 1070) {
			carmasc.addClass('DN');
			desmasc.removeClass('DN')
	    }else{
	    	carmasc.removeClass('DN');
	    	desmasc.addClass('DN')
	    };

	if( $.fn.owlCarousel ){
		var $BannerCarrossel = $(".car-masc");
		if( $BannerCarrossel.length ){
			$BannerCarrossel.owlCarousel({
			 	items 			: 1,
			    singleItem 		: true,
			    autoPlay 		: false,
			    stopOnHover 	: true,
			    loop			: true,
			    navigation 		: false,
			    autoHeight 		: true,
			    pagination      : true
			});
		}
	}
	$("#zoom_01").elevateZoom({
  		zoomType	: "lens",
  		lensShape 	: "round",
  		lensSize    : 500
	});
});
$(window).resize(function () {  
	HeaderResponsivo();
	MenuResponsivo();
	CharResponsivo();
	var $windowwidth = $("body").width();
	var carmasc = $('#car-mascs');
	var desmasc = $('#masc-desktop');

	if ($windowwidth > 1070) {
		carmasc.addClass('DN');
		desmasc.removeClass('DN')
	}else{
		carmasc.removeClass('DN');
		desmasc.addClass('DN')
	};
	if( $.fn.owlCarousel ){
		var $BannerCarrossel = $(".car-masc");
		if( $BannerCarrossel.length ){
			$BannerCarrossel.owlCarousel({
			 	items 			: 1,
			    singleItem 		: true,
			    autoPlay 		: false,
			    stopOnHover 	: true,
			    loop			: true,
			    navigation 		: false,
			    autoHeight 		: true,
			    pagination      : true
			});
		}
	};
});
