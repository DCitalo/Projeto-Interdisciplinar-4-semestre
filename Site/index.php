<!DOCTYPE html>
<html>
<head>
<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de seguranÃ§a
protegePagina(); // Chama a funÃ§Ã£o que protege a pÃ¡gina
?>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="description" content="Site Faculdade 4º Semestre">
<meta name="keywords" content="HTML,CSS,PHP,JavaScript,MySQL">
<meta name="author" content="Ítalo Drago">
<script src="jquery-1.12.4.js"></script>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link  href="style.css" />
<script src="general.js"></script>
<link rel="stylesheet" href="owl.carousel.css" />
<link rel="stylesheet" href="owl.theme.css" />
<link rel="stylesheet" href="owl.transitions.css" />
<script src="owl.carousel.js"></script>
<script src="keyboard.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script type="text/javascript" src="fresco.js"></script>
<link rel="stylesheet" type="text/css" href="fresco.css" />
<body  leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<script language="javascript"> 
document.onkeydown = applyKey; 
</script>
<div id="mapa-01">
<div id="mapa-1800">
	<img id="Image-Maps-Com-image-maps-2016-06-02-162511" src="http://www.image-maps.com/m/private/0/10hhgor2cokl8r1ppd1or3hvq1_1800mapa.png" margin="0 auto" border="0" width="1800" height="1012" orgWidth="1800" orgHeight="1012" usemap="#image-maps-2016-06-02-162511" alt="" />
<form method="POST">
<input  name="video" type="submit" value="https://www.youtube.com/embed/3towevEtWxo?rel=0">
<input  name="video" type="submit" value="https://www.youtube.com/embed/8_JYjrabKIo?rel=0">
<input  name="video" type="submit" value="https://www.youtube.com/embed/1l__b_tfMrY?rel=0">
<input  name="video" type="submit" value="https://www.youtube.com/embed/D-NsRT0-y38?rel=0">
<input  name="video" type="submit" value="https://www.youtube.com/embed/4OnAgSOg-SU?rel=0">
</form>
</map>
</div>

</div>
<div id="resolution">
	<div id="topo-pc">
		<div id="logo">
			<img src="logo.png" />
		</div>
	</div>
	<div id="site-pc">
		<div class="container-grande-video">
			<div class="container-video">
				<iframe width="100%" height="100%" src="<?php $pesquisa='select * from videos'; $registro = mysql_query($pesquisa); $retorno= mysql_fetch_array($registro); echo $retorno['caminho']; ?>" frameborder="0" id="video-teste" allowfullscreen></iframe>
			</div>
		</div>
		<div class="container-grande-mapa">
			<div class="titulo-mapa">
				<h1>Mapa</h1>
			</div>
			<div class="container-mapa">
				<div class="mapa-left">
					<p>Selecione a região que você quer ver no próximo bloco.</p>
				</div>
				<div class="mapa-right">
					<img src="mobile-map.jpg" id="map1">
					<img src="mob-map.png" id="map2">
				</div>
			</div>
		</div>
		<div class="container-grande-votacao">
			<div class="titulo-votacao">
				<h1>Votar</h1>
			</div>
			<div class="container-votacao">
				<div class="votar-left">
					<h3>Liberdade</h3>
					<div id="contorno">
						<div id="numero-vota">
								<?php	
								$busca = mysql_query("SELECT * FROM enquete ORDER BY id DESC LIMIT 1") or die(mysql_error());
								if (mysql_num_rows($busca)>0)
								{	
									$enquete = mysql_fetch_array($busca);
									extract($enquete);
							
									} else {
										exit ('<p>Nenhuma enquete cadastrada.</p>');
									}
						
								$busca_total = mysql_query("SELECT * FROM enquete WHERE id='$id_pergunta'");
								  
								  $resultado = mysql_fetch_array($busca_total);
								  $total = $op01_n + $op02_n;
								  $widthop1 =  round(($op01_n/$total)*100);
							  	echo '<p>'.$widthop1.'%</p>';
								?>
						</div>
						<div id="limite">
							<div id="barra" style="width:<?php	
							$busca = mysql_query("SELECT * FROM enquete ORDER BY id DESC LIMIT 1") or die(mysql_error());
							if (mysql_num_rows($busca)>0)
							{	
							$enquete = mysql_fetch_array($busca);
							extract($enquete);
							} else {
							exit ('<p>Nenhuma enquete cadastrada.</p>');
							}
							$busca_total = mysql_query("SELECT * FROM enquete WHERE id='$id_pergunta'");
		  					$resultado = mysql_fetch_array($busca_total);
		  					$total = $op01_n + $op02_n;
		  					$widthop1 =  round(($op01_n/$total)*100);
		  					echo ''.$widthop1.'%';
							?>"></div>
						</div>				
					</div>
				</div>
				<h2>Vs</h2>
				<div class="votar-right">
					<h3>Consolação</h3>				
					<div id="contorno">
						<div id="numero-vota">
							<?php	
							$busca = mysql_query("SELECT * FROM enquete ORDER BY id DESC LIMIT 1") or die(mysql_error());
							if (mysql_num_rows($busca)>0)
							{	
							$enquete = mysql_fetch_array($busca);
							extract($enquete);
							} else {
							exit ('<p>Nenhuma enquete cadastrada.</p>');
							}
							$busca_total = mysql_query("SELECT * FROM enquete WHERE id='$id_pergunta'");
		 					$resultado = mysql_fetch_array($busca_total);
		  					$total = $op01_n + $op02_n;
		  					$widthop2 =  round(($op02_n/$total)*100);
								echo '<p>'.$widthop2.'%</p>';
							?></div>
						<div id="limite" >
							<div id="barra" style="width:<?php	
							$busca = mysql_query("SELECT * FROM enquete ORDER BY id DESC LIMIT 1") or die(mysql_error());
							if (mysql_num_rows($busca)>0)
							{	
							$enquete = mysql_fetch_array($busca);
							extract($enquete);
							} else {
							exit ('<p>Nenhuma enquete cadastrada.</p>');
							}
							$busca_total = mysql_query("SELECT * FROM enquete WHERE id='$id_pergunta'");
	  						$resultado = mysql_fetch_array($busca_total);
	  						$total = $op01_n + $op02_n;
	  						$widthop2 =  round(($op02_n/$total)*100);
	  						echo ''.$widthop2.'%';
							?>"></div>	
						</div>			
					</div>
				</div>
			</div>
		</div>
	<div class="container-grande-insta">
		<div class="titulo-insta">
			<h1>Instagram</h1>
		</div>
		<div class="container-insta">
			<div id="owl-demo" class="owl-carousel owl-theme">
				<div class="item">
  					<div class="img-insta">
  						<img src="insta (1).jpg" >
  					</div> 
  					<p>Realmente são enormes os contrastes que encontramos em sp #nonducor #belavista #bixiga</p>
  				</div>
  				<div class="item">
  					<div class="img-insta">
  						<img src="insta (2).jpg" >
  					</div> 
  					<p>Lua cheia tava mto loka hj no escadão. #lua #luacheia #nonducor #belavista</p>
  				</div>
  				<div class="item">
  					<div class="img-insta">
  						<img src="insta (3).jpg" >
  					</div> 
  					<p>Cadê a galera dos protestos? Depois de toda onda de luta pelos direitos parece que o pessoal não tá mais nem aí :/ #protestos #paulista #nonducor #belavista</p>
  				</div>
  				<div class="item">
  					<div class="img-insta">
  						<img src="insta (4).jpg" >
  					</div> 
  					<p>Mano que grafitti legal do #niemeyer feito perto da casa das rosas. Muito bom. #nonducor #belavista Olha a cara du mano pensando...</p>
  				</div>
  				<div class="item">
  					<div class="img-insta">
  						<img src="insta (5).jpg" >
  					</div> 
  					<p>Hsuahahsua aprende com a internet #nonducor tem que fazer documentário só de felino. Olha esse bixano num telhado perto do escadão da #belavista.</p>
  				</div>
  				<div class="item">
  					<div class="img-insta">
  						<img src="insta (6).jpg" >
  					</div> 
  					<p>Fui na casa das rosas é só achei uma rosa haha será que é a época do ano. Enfim olha que linda minha rosa. #nonducor #belavista #casadasrosas</p>
  				</div>
  				<div class="item">
  					<div class="img-insta">
  						<img src="insta (7).jpg" >
  					</div> 
  					<p>Altos Abraços na Paulista hoje #nonducor #belavista</p>
  				</div>
  				<div class="item">
  					<div class="img-insta">
  						<img src="insta (8).jpg" >
  					</div> 
  					<p>Alto do viaduto do chá hoje. Dia tranquilão graças a deus. Bora trabalhar #nonducor #bomdia</p>
  				</div>
  				<div class="item">
  					<div class="img-insta">
  						<img src="insta (9).jpg" >
  					</div> 
  					<p>Filmaram non ducor hoje perto do vão do masp, será que vai aparecer a galera da facul? #mãeestounatv #nonducor #fuifilmada #belavista</p>
  				</div>
  				<div class="item">
  					<div class="img-insta">
  						<img src="insta (10).jpg" >
  					</div> 
  					<p>Fui pela primeira vez na casa das rosas hoje, passeio muito divertido, quero uma casa dessas pra mim. #nonducor #belavista #casadasrosas</p>
  				</div>
  				<div class="item">
  					<div class="img-insta">
  						<img src="insta (11).jpg" >
  					</div> 
  					<p>Depois de um tempão fugindo do transito na paulista. Eis que ligo a tv e tem um programa numa exata cena de transito na paulista #transito #nonducor #belavista</p>
  				</div>
  				<div class="item">
  					<div class="img-insta">
  						<img src="insta (12).jpg" >
  					</div> 
  					<p>A comida da feirinha gastronômica estava mto boa, não se compara a macarronada da achiropita, mas tava mto boa. Recomendo #nonducor #belavista</p>
  				</div>
  				<div class="item">
  					<div class="img-insta">
  						<img src="insta (13).jpg" >
  					</div> 
  					<p>Sabia que tinha visto esse desenho em algum lugar. Foi no #nonducor #belavista. O próximo bairro tem que ser o meu.</p>
  				</div>
  				<div class="item">
  					<div class="img-insta">
  						<img src="insta (14).jpg" >
  					</div> 
  					<p>Próximo #nonducor tem que ser no centro, tenho muita curiosidade do tanto de história que se tem pra descobrir aqui.</p>
  				</div>
  				<div class="item">
  					<div class="img-insta">
  						<img src="insta (15).jpg" >
  					</div> 
  					<p>Usando grafites que vi hoje no #nonducor como referência.</p>
  				</div>
  				<div class="item">
  					<div class="img-insta">
  						<img src="insta (16).jpg" >
  					</div> 
  					<p>Adoro essas fachadas antigas, não só da #belavista mas as que estão espalhadas por toda #sp #nonducor</p>
  				</div>
  			</div>
		</div>
	</div>
	<div id="rodape">
		<div id="rodape-esquerda">
			<div class="terco direita"><img src="return.png" /><h3>Return</h3></div>
		</div>
		<div id="rodape-direita">
		<h3>Adeque a sua resolução</h3>
		<p class="resolucoes">4:3</p>
		<p class="resolucoes">16:9</p>
		</div>
	</div>
</div>
</div>
<div id="site-mobile">
	<ul class="container-mobile topo-mobile">
		<div id="logo-mobile">
			<img src="Mobile-x.png" />
		</div>
		<div id="text-mobile">
		<h1>Um programa único e interativo sobre a cidade mais populosa e movimentada do Brasil.</h1>
		</div>
	</ul>
	<hr/>
	<!--<form method="POST" >
	<input name="video" type="submit" value="https://www.youtube.com/embed/8l6T3fwxAyw" />
	</form>-->
	<ul class="container-mobile ">
		<a class="open" href="#abrirModal-2"><li  class="icone" id="teste-1"><img src="1.png" ></li></a>
		<a class="open" href="#abrirModal-3"><li class="icone" ><img src="2.png" ></li></a>
	</ul>
	<ul class="container-mobile ">
		<a class="open" href="#abrirModal-4"><li class="icone" id="teste-4"><img src="4.png" ></li></a>
	</ul>
	<ul class="container-mobile ">
		<a class="open" href="#abrirModal-5"><li class="icone"><img src="5.png" ></li></a>
		<a class="open" href="#abrirModal-6"><li class="icone"><img src="6.png" ></li></a>
	</ul>
	<hr/>
</div>

<div id="abrirModal-2" class="modalDialog">
	<ul class="container-mobile ">
		<li class="close">
			<a href="#close">
				<div id="logo-mobile">
					<img src="Mobile-x-1.png">
				</div>			
			</a>
		</li>
		<div id="text-mobile">
		<h1>Seleção de cenas</h1><br>
		<p>Selecione a região que você quer ver no próximo bloco.</p>
		</div>
	</ul>
	<hr>
	<div class="container-conteudo-mobile">
		<form method="POST" >
			<div class="bloco-mobile">
			<input name="video" type="submit" value="https://www.youtube.com/embed/3towevEtWxo?rel=0" />
			<h5>O Museu de Arte de São Paulo é um museu privado sem fins lucrativos, fundado pelo empre­sário brasileiro Assis Chateaubriand, em 1947, tornando-se o primeiro museu moderno no país. Possui a mais importante e abrangente coleção de arte ocidental da América Latina. Possui também uma extensa seção de arte brasileira e pequenos conjuntos de arte africana e asiática.</h5>
			</div>
			<div class="bloco-mobile">
			<input name="video" type="submit" value="https://www.youtube.com/embed/8_JYjrabKIo?rel=0" />
			<h5>Localizado há 30 metros da Avenida Paulista e tem tudo para ser um ponto de sucesso na capital. Está localizado em cima de um túnel, embaixo de um viaduto e a vista é para uma avenida. Oferece comida assinada, bons drinques e até um microambiente transformado em sala de exposições, atrás do Masp, virou o novo point na região da Avenida Paulista.</h5>
			</div>
			<div class="bloco-mobile">
			<input name="video" type="submit" value="https://www.youtube.com/embed/1l__b_tfMrY?rel=0" />
			<h5>Uma das regiões mais boemias de São Paulo. Oferece cultura, lazer e religião a população que visita o bairro. Abriga diferentes museus, feiras e cantinas, sem falar na paróquia Nossa Senhora Achiropita, fundada por italianos, que representa um monumento de cultura e fé.</h5>
			</div>
			<div class="bloco-mobile">
			<input name="video" type="submit" value="https://www.youtube.com/embed/D-NsRT0-y38?rel=0" />
			<h5>Oferece à população cursos, palestras, peças de teatro, exposições ligadas à literatura, lançamento de livros, oficinas de criação e crítica literárias, entre outras atividades. Hoje é um museu que se destaca pelo seu trabalho de divulgação e promoção da literatura de escritores que muitas vezes são deixados de lado pelo mercado.</h5>
			</div>
			<div class="bloco-mobile">
			<input name="video" type="submit" value="https://www.youtube.com/embed/4OnAgSOg-SU?rel=0" />
			<h5>Está localizado em uma das regiões mais elevadas da cidade, chamada de Espigão da Paulista.  Abriga hotéis, teatros, restaurantes e edifícios de alto-padrão comerciais e residenciais.</h5>
			</div>
		</form>
	</div>
	<hr>
</div>
<div id="abrirModal-3" class="modalDialog">
	<ul class="container-mobile ">
		<li class="close">
			<a href="#close">
				<div id="logo-mobile">
					<img src="Mobile-x-2.png">
				</div>
			</a>
		</li>
		<div id="text-mobile">
		<h1>Galeria</h1><br>
		<p>Poste sua foto no Instagram com a hashtag #nonducor.</p>
		</div>
	</ul>
	<hr>
	<div class="container-conteudo-mobile">
		 <a href='insta (1).jpg'
     class='fresco'
         data-fresco-group='example'
         data-fresco-caption="Realmente são enormes os contrastes que encontramos em sp #nonducor #belavista #bixiga">
		<div class="item-mobile">
 			<img src="insta (1).jpg" >
 		</div>
 		</a>
  		 <a href='insta (2).jpg'
     class='fresco'
         data-fresco-group='example'
         data-fresco-caption="Lua cheia tava mto loka hj no escadão. #lua #luacheia #nonducor #belavista">
  		<div class="item-mobile">
 			<img src="insta (2).jpg" >
 		</div>
 		</a>
  		 <a href='insta (3).jpg'
     class='fresco'
         data-fresco-group='example'
         data-fresco-caption="Cadê a galera dos protestos? Depois de toda onda de luta pelos direitos parece que o pessoal não tá mais nem aí :/ #protestos #paulista #nonducor #belavista">
  		<div class="item-mobile">
 			<img src="insta (3).jpg" >
 		</div>
 		</a>
  		 <a href='insta (4).jpg'
     class='fresco'
         data-fresco-group='example'
         data-fresco-caption="Mano que grafitti legal do #niemeyer feito perto da casa das rosas. Muito bom. #nonducor #belavista Olha a cara du mano pensando...">
  		<div class="item-mobile">
 			<img src="insta (4).jpg" >
 		</div>
 		</a>
  		 <a href='insta (5).jpg'
     class='fresco'
         data-fresco-group='example'
         data-fresco-caption="Hsuahahsua aprende com a internet #nonducor tem que fazer documentário só de felino. Olha esse bixano num telhado perto do escadão da #belavista.">
  		<div class="item-mobile">
 			<img src="insta (5).jpg" >
 		</div>
 		</a>
  		 <a href='insta (6).jpg'
     class='fresco'
         data-fresco-group='example'
         data-fresco-caption="Fui na casa das rosas é só achei uma rosa haha será que é a época do ano. Enfim olha que linda minha rosa. #nonducor #belavista #casadasrosas">
  		<div class="item-mobile">
 			<img src="insta (6).jpg" >
 		</div>
 		</a>
  		 <a href='insta (7).jpg'
     class='fresco'
         data-fresco-group='example'
         data-fresco-caption="Altos Abraços na Paulista hoje #nonducor #belavista">
  		<div class="item-mobile">
 			<img src="insta (7).jpg" >
 		</div>
 		</a>
  		 <a href='insta (8).jpg'
     class='fresco'
         data-fresco-group='example'
         data-fresco-caption="Alto do viaduto do chá hoje. Dia tranquilão graças a deus. Bora trabalhar #nonducor #bomdia">
  		<div class="item-mobile">
 			<img src="insta (8).jpg" >
 		</div>
 		</a>
  		 <a href='insta (9).jpg'
     class='fresco'
         data-fresco-group='example'
         data-fresco-caption="Filmaram non ducor hoje perto do vão do masp, será que vai aparecer a galera da facul? #mãeestounatv #nonducor #fuifilmada #belavista">
  		<div class="item-mobile">
 			<img src="insta (9).jpg" >
 		</div>
 		</a>
  		 <a href='insta (10).jpg'
     class='fresco'
         data-fresco-group='example'
         data-fresco-caption="Fui pela primeira vez na casa das rosas hoje, passeio muito divertido, quero uma casa dessas pra mim. #nonducor #belavista #casadasrosas">
  		<div class="item-mobile">
 			<img src="insta (10).jpg" >
 		</div>
 		</a>
  		 <a href='insta (11).jpg'
     class='fresco'
         data-fresco-group='example'
         data-fresco-caption="Depois de um tempão fugindo do transito na paulista. Eis que ligo a tv e tem um programa numa exata cena de transito na paulista #transito #nonducor #belavista">
  		<div class="item-mobile">
 			<img src="insta (11).jpg" >
 		</div>
 		</a>
  		 <a href='insta (12).jpg'
     class='fresco'
         data-fresco-group='example'
         data-fresco-caption="A comida da feirinha gastronômica estava mto boa, não se compara a macarronada da achiropita, mas tava mto boa. Recomendo #nonducor #belavista">
  		<div class="item-mobile">
 			<img src="insta (12).jpg" >
 		</div>
 		</a>
  		 <a href='insta (13).jpg'
     class='fresco'
         data-fresco-group='example'
         data-fresco-caption="Sabia que tinha visto esse desenho em algum lugar. Foi no #nonducor #belavista. O próximo bairro tem que ser o meu.">
  		<div class="item-mobile">
 			<img src="insta (13).jpg" >
 		</div>
 		</a>
  		 <a href='insta (14).jpg'
     class='fresco'
         data-fresco-group='example'
         data-fresco-caption="Próximo #nonducor tem que ser no centro, tenho muita curiosidade do tanto de história que se tem pra descobrir aqui.">
  		<div class="item-mobile">
 			<img src="insta (14).jpg" >
 		</div>
 		</a>
  		 <a href='insta (15).jpg'
     class='fresco'
         data-fresco-group='example'
         data-fresco-caption="Usando grafites que vi hoje no #nonducor como referência.">
  		<div class="item-mobile">
 			<img src="insta (15).jpg" >
 		</div>
 		</a>
  		 <a href='insta (16).jpg'
     class='fresco'
         data-fresco-group='example'
         data-fresco-caption="Adoro essas fachadas antigas, não só da #belavista mas as que estão espalhadas por toda #sp #nonducor">
  		<div class="item-mobile">
 			<img src="insta (16).jpg" >
 		</div>
 		</a>
 	</div>
	<hr>
</div>
<div id="abrirModal-4" class="modalDialog">
	<ul class="container-mobile ">
		<li class="close">
			<a href="#close">
				<div id="logo-mobile">
					<img src="Mobile-x-3.png">
				</div>
			</a>
		</li>

		<div id="text-mobile">
			<h1>Votar</h1><br>
			<p>Vote em qual bairro você quer ver na próxima semana.</p>

		</div>
	</ul>
	<hr>
	<div class="container-conteudo-mobile">
<?php	
	$busca = mysql_query("SELECT * FROM enquete ORDER BY id DESC LIMIT 1") or die(mysql_error());
	if (mysql_num_rows($busca)>0)
	{	
		$enquete = mysql_fetch_array($busca);
		extract($enquete);
?>

	<div id="enquete">

	<p><?php echo utf8_encode($pergunta);?></p>

	<form action="grava-enquete.php" method="post" id="form_enquete">
	<input type="hidden" name="id_pergunta" value="<?php echo $id;?>" />
		<div id="container-vota-left">
			<div id="img-vota-left">
				<img src="ano-novo-chines-na-liberdade.png" />
			</div>
			<input type="radio" name="opcao" value="op01" /><?php echo $op01;?><br />
		</div>
		<div id="text-vota-right">
			<p>A Liberdade é um bairro turístico da cidade de São Paulo, localizado parte no distrito da Liberdade e parte no distrito da Sé. É conhecido como o maior reduto da comunidade japonesa na cidade, a qual, por sua vez, congrega a maior colônia japonesa do mundo</p>
		</div>
		<div id="sucesso">
		<input type="submit" name="enviar" value="Enviar" id="enviar">
		</div>
		<div id="container-vota-right">
			
			<input type="radio" name="opcao" value="op02" /><?php echo $op02;?><br />
			<div id="img-vota-right">
				<img src="bairro-consolacao.jpg" />
			</div>
		</div>
		<div id="text-vota-left">		
			<p>Consolação é um distrito da região central da cidade de São Paulo e uma das regiões históricas e culturais mais importantes da cidade.</p>
		</div>
    	
	</form>

	<?php
		} else {
			exit ('<p>Nenhuma enquete cadastrada.</p>');
		}

	?>
	</div>
	</div>
	<hr>
</div>
<div id="abrirModal-5" class="modalDialog">
	<ul class="container-mobile ">
		<li class="close">
			<a href="#close">
				<div id="logo-mobile">
					<img src="Mobile-x-4.png">
				</div>
			</a>
		</li>
		<div id="text-mobile">
		<h1>Informações</h1><br>
		<p>Confira as principais informações dos lugares mostrados no episódio dessa semana.</p>
		</div>
	</ul>
	<hr>
	<div class="container-conteudo-mobile">
	<div class="bloco-mobile">
		<div class="bloco-img-mobile">
			<img src="infos (1).png" />
		</div>
		<div class="bloco-txt-mobile">
			<h1>CASA DAS ROSAS</h1>
			<p>Av. Paulista, 37 - Bela Vista, SP - SP<br>
			Contato: contato@casadasrosas.org.br e (11) 3285-6986 - (11) 3288-9447<br> 
			Horários: <br>
			Terça a sábado: 10h às 22h <br>
			Domingos e feriados: 10h ás 18h<br>
			(Passível de alteração, de acordo com a programação)<br>
			</p>
		</div>
	</div>
	<div class="bloco-mobile">
		<div class="bloco-img-mobile">
			<img src="infos (2).png" />
		</div>
		<div class="bloco-txt-mobile">
			<h1>MIRANTE 9 DE JULHO</h1>
			<p>R. Carlos Comenale - Bela Vista, São Paulo - SP<br>
			Contato: contato@grupovegas.com.br
			</p>
		</div>
	</div>
	<div class="bloco-mobile">
		<div class="bloco-img-mobile">
			<img src="infos (3).png" />
		</div>
		<div class="bloco-txt-mobile">
			<h1>EDIFICIO JOELMA</h1>
			<p>Av. Nove de Julho, 225</p>
		</div>
	</div>	
	<div class="bloco-mobile">
		<div class="bloco-img-mobile">
			<img src="infos (4).png" />
		</div>
		<div class="bloco-txt-mobile">
			<h1>MASP </h1>
			<p>Av. Paulista, 1578 - Bela Vista, São Paulo - SP<br>
			Contato: atendimento@masp.org.br e (11) 3149-5959<br>
			Horários: <br>
			Terça a domingo: 10h às 18h (bilheteria aberta até 17h30)<br>
			Quinta-feira: 10h às 20h (bilheteria até 19h30)<br>
			Ingressos: <br>
			R$25 (entrada) <br>
			R$12 (meia-entrada)<br>
			</p>
		</div>
	</div>	
	<div class="bloco-mobile">
		<div class="bloco-img-mobile">
			<img src="infos (5).png" />
		</div>
		<div class="bloco-txt-mobile">
			<h1>PALÁCIO ANCHIETA</h1>
			<p>Viaduto Jacareí, 100 - Bela Vista, São Paulo - SP</p>
		</div>
	</div>	
	<div class="bloco-mobile">
		<div class="bloco-img-mobile">
			<img src="infos (6).png" />
		</div>
		<div class="bloco-txt-mobile">
			<h1>PARÓQUIA NOSSA SENHORA ACHIROPITA</h1>
			<p>R. Treze de Maio, 478 - Bela Vista, São Paulo - SP<br>
			Contato: (11) 3106-7235</p>
		</div>
	</div>		
	</div>
	<hr>
</div>

</div>
<div id="abrirModal-6" class="modalDialog">
	<ul class="container-mobile ">
		<li class="close">
			<a href="#close">
				<div id="logo-mobile">
					<img src="Mobile-x-5.png">
				</div>
			</a>
		</li>
		<div id="text-mobile">
		<h1>Música</h1>
		<br>
		<p>Veja toda a trilha sonora do episodio dessa semana.</p>
		</div>
	</ul>
<hr>
	<div class="container-conteudo-mobile">
	<div class="bloco-mobile">
		<div class="bloco-img-mobile">
			<img src="musi (1).png" />
		</div>
		<div class="bloco-txt-mobile">
			<h1>Altamiro Carrilho </h1>
			<p>Urubu malandro (choro)</p>
		</div>
	</div>
	<div class="bloco-mobile">
		<div class="bloco-img-mobile">
			<img src="musi (2).png" />
		</div>
		<div class="bloco-txt-mobile">
			<h1>Demônios da Garoa</h1>
			<p>Isto é São Paulo<br>
			Trem das onze</p>
		</div>
	</div>
	<div class="bloco-mobile">
		<div class="bloco-img-mobile">
			<img src="musi (3).png" />
		</div>
		<div class="bloco-txt-mobile">
			<h1>Jacob do Bandolim </h1>
			<p>Murmurando (chorinho - 1967)<br>
			Brejeiro (chorinho - 1967)</p>
		</div>
	</div>	
	<div class="bloco-mobile">
		<div class="bloco-img-mobile">
			<img src="musi (4).png" />
		</div>
		<div class="bloco-txt-mobile">
			<h1>Orlando Silveira </h1>
			<p>Espinha de bacalhau (choro - 1978)</p>
		</div>
	</div>	
	<div class="bloco-mobile">
		<div class="bloco-img-mobile">
			<img src="musi (5).png" />
		</div>
		<div class="bloco-txt-mobile">
			<h1>Pixinguinha & Benedito Lacerda</h1>
			<p>Cheguei (choro - 1946)</p>
		</div>
	</div>	
		<div class="bloco-mobile">
		<div class="bloco-img-mobile">
			<img src="musi (6).png" />
		</div>
		<div class="bloco-txt-mobile">
			<h1>Raul de Barros</h1>
			<p> Na glória (1974)</p>
		</div>
	</div>
	</div>
	<hr>
</div>
<?php
	if (isset($_POST['video'])){
		$src=$_POST['video'];
		$update="update videos set caminho='$src'";
		mysql_query($update);
		header('location: index.php');
	}
?>
<script type="text/javascript">
	 
  $("#owl-demo").owlCarousel({
 
      navigation : false, // Show next and prev buttons
      slideSpeed : 3000,
      paginationSpeed : 1000,
      singleItem:true,
      autoPlay : true,
      slideSpeed : 3000,
      paginationSpeed : 1000,
      rewindSpeed : 5000
  });
</script>
</body>
</html>
