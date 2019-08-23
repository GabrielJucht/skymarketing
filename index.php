<?php
$entro=false;

if (isset($_POST["submit"])){
		
		$cuerpo = " <html> <head> </head> <body> "; 
		$cuerpo .= "<img src='http://www.marketideas.com.ar/skymarketing/images/logo.jpg' alt='Logo' /><br/><br/> "; 
		$cuerpo .= "<strong>Nombre y apellido:</strong> ".htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8')." <br/>";
		$cuerpo .= "<strong>Telefono:</strong> ". htmlspecialchars($_POST['telefono'], ENT_QUOTES, 'UTF-8')." <br/>";
		$cuerpo .= "<strong>Mail:</strong> ". htmlspecialchars($_POST['mail'], ENT_QUOTES, 'UTF-8')." <br/>";
		$cuerpo .= "<strong>Consulta:</strong> ".nl2br(htmlspecialchars($_POST['consulta'], ENT_QUOTES, 'UTF-8'))." <br/><br/>";
		$cuerpo .= "</body> </html> "; 
		$headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From: Sky Marketing <sky@skymarketing.com.ar>\r\n"; 
		$headers .= "ReplyTo: Sky Marketing <sky@skymarketing.com.ar>\r\n"; 
		$exito = mail("gabrieljucht@gmail.com","Contacto desde Sky Marketing",$cuerpo,$headers);
		$entro=true;
		echo "<script language='javascript'>
			alert('Muchas gracias por su consulta.');
		</script>";

}
		
?>

<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<title>Sky Marketing</title>
		<link rel="stylesheet" type="text/css" href="template.css">
		<link href="template768.css" rel="stylesheet" media="all and (max-width: 768px)">
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,400italic,900italic&subset=all' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700&subset=all' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript">
					$(function() {
		  $('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			  var target = $(this.hash);
			  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			  if (target.length) {
				$('html,body').animate({
				  scrollTop: target.offset().top
				}, 700);
				return false;
			  }
			}
		  });
		});
		</script>
	</head>
	<body>
		<header>
			<div class="inner">
				<a href="#" title="Sky Marketing" id="logo"></a>
				<nav>
					<ul>
						<li><a href="#planes">PLANES</a></li>
						<li><a href="#caracteristicas">CARACTER&Iacute;STICAS</a></li>
						<li><a href="#contacto">CONTACTO</a></li>
					</ul>
				</nav>
				<div class="tel">
					<p>Solicit&aacute; tu campa&#241;a</p>
					<span>0800.333.3796</span>
				</div> 
			</div>
		</header>
		<div class="contacto_imagen">
			<div class="imagen_superior"></div>
			<div class="inner">
				<div class="form">
					<div class="contacto">
						<form name="FormContacto" method="post" action="">
							<p>m&aacute;s clientes para tu negocio</p>
							<span>0800.333.3796</span>
							<input type="text" placeholder="nombre y apellido" name="nombre" required style="margin-top:3px;" onfocus="if(this.placeholder == 'nombre y apellido') { this.placeholder = ''; }" onblur="if(this.placeholder == '') { this.placeholder = 'nombre y apellido'; }"/>
							<input type="text" placeholder="telefono" name="telefono" onfocus="if(this.placeholder == 'telefono') { this.placeholder = ''; }" onblur="if(this.placeholder == '') { this.placeholder = 'telefono'; }"/>
							<input type="email" placeholder="mail" name="mail" required onfocus="if(this.placeholder == 'mail') { this.placeholder = ''; }" onblur="if(this.placeholder == '') { this.placeholdervalue = 'mail'; }"/>
							<textarea name="consulta" placeholder="consulta" placeholder="consulta" onfocus="if(this.placeholder == 'consulta') { this.placeholder = ''; }" onblur="if(this.placeholder == '') { this.placeholder = 'consulta'; }" required></textarea>
							<input type="submit" name="submit" id="submit" value="Enviar" />
						</form>
					</div>		
				</div>
			</div>
			<div class="imagen_inferior"></div>
		</div>
		<div id="contenedor">
			<h2>Quienes somos</h2>
			<div class="separador"></div>
			<p>Somos especialistas en Adwords, redes sociales y estrategias de Marketing Digital e interactivo, <br />
			ayudamos a nuestros clientes a ser mas efectivos en sus estrategias de comercializaci&oacute;n.</p>
			<div class="separador2"></div>
			<h2 class="naranja" id="planes">Planes de adwords</h2>
			<div class="separador3"></div>
			<div class="boxes">
				<div class="blue_box">
					<h3>plan b&aacute;sico</h3>
					<div class="separador"></div>
					<p>SI SU NEGOCIO ESTÁ RECI&Eacute;N COMENZANDO &Eacute;STE ES EL PLAN IDEAL!</p>
					<div class="separador"></div>
					<div class="inversion">
						<span>inversi&oacute;n</span>
						<div class="clicks">
							<span>$1500</span><p>en clicks</p>
						</div>
						<div class="administracion">
							<p>administraci&oacute;n de contenidos</p>
							<span>$500</span>
						</div>
					</div>
					<div class="separador"></div>
					<a href="#" class="consultar azul">consultar</a>
					<p class="info">m&aacute;s info</p>
				</div>
				<div class="box_naranja">
					<h3>plan avanzado</h3>
					<div class="separador"></div>
					<p>EL PLAN IDEAL PARA PEQUE&#209;AS Y MEDIANAS EMPRESAS</p>
					<div class="separador"></div>
					<div class="inversion">
						<span>inversi&oacute;n</span>
						<div class="clicks">
							<span>$3000</span><p>en clicks</p>
						</div>
						<div class="administracion">
							<p>administraci&oacute;n de contenidos</p>
							<span>$600</span>
						</div>
					</div>
					<div class="separador"></div>
					<a href="#" class="consultar naranja">consultar</a>
					<p class="info">m&aacute;s info</p>
				</div>
				<div class="box_personalizado">
					<h3>personalizado</h3>
					<div class="separador"></div>
					<p>LA MEJOR OPCI&Oacute;N PARA MERCADOS ALTAMENTE COMPETITIVOS!</p>
					<div class="separador"></div>
					<div class="inversion">
						<span>inversi&oacute;n</span>
						<span class="medida">A medida</span>
						<div class="administracion personalizado">
							<p>administraci&oacute;n de contenidos</p>
							<span>+20</span><span class="porcentaje">%</span>
						</div>
					</div>
					<div class="separador"></div>
					<a href="#" class="consultar personalizado">consultar</a>
					<p class="info">m&aacute;s info</p>
				</div>
			</div>
			<div class="separador2" style="margin-top:50px;"></div>
			<div id="caracteristicas" class="caracteristicas">
				<h2>Caracter&iacute;sticas del servicio</h2>
				<div class="separador"></div>
				<p>Su empresa ahora puede estar en las primeras posiciones en Google. Contamos con diferentes planes que se 
					adaptan a la medida de su negocio/empresa. Actualmente esta forma de publicidad representa la mejor relaci&oacute;n
					costo-beneficio ya que las b&uacute;squedas son directas, medibles y a un p&uacute;blico que realmente necesita lo que busca,
					ya que est&aacute; relacionado con sus anuncios, consiguiendo que tengan una efectividad superior a cualquier
					otra campa&#241;a.</p>
			</div>
			<div class="consultar_big">
				<a href="#">consultar</a>
				<p class="info">m&aacute;s info</p>
			</div>
			<div class="separador2"></div>
			<div class="globos">
				<div class="resultados">
					<span>Resultados <br />medibles</span>
				</div>
				<div class="efectividad">
					<span>Efectividad <br />garantizada</span>
				</div>
				<div class="ventas">
					<span>ventas<br /> directas</span>
				</div>
				<div class="segmentacion" style="margin-right:0px;">
					<span>Segmentaci&oacute;n<br /> geogr&aacute;fica</span>
				</div>
			</div>
		</div>
		<footer>
			<div class="inner">
				<h3 id="contacto" >Contactanos</h3>
				<div class="separador4"></div>
				<div class="links">
					<a href="http://www.skymarketing.com.ar" target="_blank" class="web">www.skymarketing.com.ar</a>
					<span class="tel">0800.333.3796</span>
					<a href="mailto:sky@skymarketing.com.ar" class="mail">sky@skymarketing.com.ar</a>
					<a href="https://www.facebook.com/SkymarketingARG" target="_blank" class="facebook" style="margin-right:0px;">Seguinos en:<br />/SkymarketingARG </a>
				</div>
			</div>
		</footer>
	</body>


</html>

