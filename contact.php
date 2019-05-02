<?php
$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
  $phone=$_POST['phone'];
	$message=$_POST['message'];

	$to = "ventas@mypexpress.com";
	$subject = "Formulario de contacto Web";
	$message = " Nombre: " . $name ."\r\n \r\n Email: " . $email . "\r\n \r\n Teléfono:" . $phone . "\r\n \r\n Mensaje:\r\n" . $message;
	 
	$from = "Sirope Media";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Tu mensaje ha sido enviado !</span>";
	}
}
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<title>M&amp;P Express | Contacto</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Página oficial de M&amp;P Express" />
<meta name="keywords" content="logística, mensajería, pquetería, envíos, paquete, traslado, gestión, paquete, encomienda, cheque, papelería, papeles, recibos, bulto," />
<meta property="og:type" content="website" />
<meta property="og:title" content="M&amp;P Express" />
<meta property="og:description" content="La mejor solución en mensajería en la capital." />
<meta property="og:locale" content="es_ES" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta property="og:url" content="https://www.mypexpress.com/" />
<meta property="og:image" content="https://www.mypexpress.com/images/preview.png" />
<meta name="twitter:title" content="M&amp;P Express" />
<meta name="twitter:description" content="La mejor solución en mensajería en la capital." />
<meta name="twitter:image" content="https://www.mypexpress.com/images/preview.png" />
<meta name="twitter:url" content="https://www.mypexpress.com/" />
<meta name="twitter:card" content="summary_large_image">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/favicons/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/favicons/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="images/favicons/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="images/favicons/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="images/favicons/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="images/favicons/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="images/favicons/favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="images/favicons/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="images/favicons/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="images/favicons/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="images/favicons/favicon-128.png" sizes="128x128" />
<meta name="application-name" content="M&amp;P Express"/>
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="images/favicons/mstile-144x144.png" />
<meta name="msapplication-square70x70logo" content="images/favicons/mstile-70x70.png" />
<meta name="msapplication-square150x150logo" content="images/favicons/mstile-150x150.png" />
<meta name="msapplication-wide310x150logo" content="images/favicons/mstile-310x150.png" />
<meta name="msapplication-square310x310logo" content="images/favicons/mstile-310x310.png" />
<link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '566383913558451'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=566383913558451&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '566383913558451', {
em: 'insert_email_variable,'
});
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=566383913558451&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-102565129-1', 'auto');
  ga('send', 'pageview');
</script>
</head>
<script>
fbq('track', 'CompleteRegistration');
</script>

<body>
<script type="text/javascript">
var google_conversion_id = 857629322;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "T26rCL29nXMQisX5mAM";
var google_remarketing_only = false;
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/857629322/?label=T26rCL29nXMQisX5mAM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
  <div class="header">	
       <div class="wrap"> 
	         <div class="logo">
				<a href="index.html"><img src="images/logo.png" alt=""/></a>
			 </div>
			 <div class="cssmenu">
				<ul>
					<li><a href="index.html">Inicio</a></li>
                    <li><a href="about.html">Acerca de M&amp;P</a></li>
					<li class="active"><a href="#">Contacto</a></li>
				</ul>
		     </div>
		    <div class="clear"></div>
	   </div>
   </div>
   <div class="banner">
      	<div class="wrap">
      	    <h2>Contacto</h2><div class="clear"></div>
      	</div>
    </div>
  <div class="main">	
	 <div class="project-wrapper">
	 	<div class="map">
		   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1950.282512366391!2d-86.2875384160919!3d12.141885933521305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDA4JzMwLjgiTiA4NsKwMTcnMTIuMiJX!5e0!3m2!1ses-419!2sin!4v1499240417924" width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <br>
            <small>
                <a target="_blank" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1950.282512366391!2d-86.2875384160919!3d12.141885933521305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDA4JzMwLjgiTiA4NsKwMTcnMTIuMiJX!5e0!3m2!1ses-419!2sin!4v1499240417924" style="color:#666;text-align:left;font-size:12px"></a>
            </small>
	    </div>
                                            <center><?php echo $text;?></center>
	    <div class="wrap">
	 	  <div class="contact">
	 	  		<div class="cont span_2_of_contact">
	 	  		<h5 class="leave">Envíanos un mensaje</h5><div class="clear"></div>	
				  <form method="post" action="contact.php">
					<div class="contact-to">
                     	<input type="text" class="text" name="name" id="name" required="required" placeholder="Nombre" data-rule="minlen:4" data-msg="Por favor, ingrese un nombre válido">
					 	<input type="text" class="text" name="email" id="email" required="required" placeholder="Email" data-rule="email" data-msg="Por favor, ingrese un nombre válido" style="margin-left: 10px">
					 	<input type="text" class="text" name="phone" id="phone" required="required" placeholder="Tel&eacute;fono" data-rule="minlen:8" data-msg="Por favor, ingrese un núnmero válido" style="margin-left: 10px">
					</div>
					<div class="text2">
	                   <textarea name="message" id="message" required="required" data-msg="Por favor, escribanos algo" placeholder="Mensaje"></textarea>
	                </div>
                      <input class="submit" type="submit" name="submit" value="Enviar">
	             </form>
				</div>
				<div class="lsidebar span_1_of_about">
				   <h5 class="leave">Información de Contacto</h5><div class="clear"></div>
                    <div class="contact-list">
						<ul>
                            <li><i class="fa fa-phone fa-fw"></i><span><a target="_blank" href="tel:50522681689">2268 1689</a></span><div class="clear"></div></li>
                            <li><i class="fa fa-whatsapp fa-fw"></i><span><a target="_blank" href="https://api.whatsapp.com/send?phone=50577148946">7714 8946</a></span><div class="clear"></div></li>
                            <li><i class="fa fa-facebook fa-fw"></i><span><a target="_blank" href="https://www.facebook.com/mypexpress/">M&amp;P Express en Facebook</a></span><div class="clear"></div></li>
							<li><i class="fa fa-envelope fa-fw"></i><span><a target="_blank" href="mailto:ventas@mypexpress.com">ventas@mypexpress.com</a></span><div class="clear"></div></li>
                            <li><i class="fa fa-map-marker fa-fw"></i><span><a target="_blank" href="https://goo.gl/maps/oK2suAgBRkp">De Lugo Rent a car 1C Este, Managua</a></span><div class="clear"></div></li>
					   </ul>
					</div>
			    </div>
				<div class="clear"></div>				
		    </div>
		</div>
     </div>
  </div>	
  <div class="footer">
	 <div class="footer-bottom">
	 	<div class="wrap">
            <div class="copy">
                    <div class="social-icons">	
					 	<h4>Nuestras Redes</h4>
						    <ul>	
							   <li class="phone"><a target="_blank" href="tel:50522681689"><span></span></a></li>
                                <li class="whatsapp"><a target="_blank" href="https://api.whatsapp.com/send?phone=50577148946"><span></span></a></li>
                                <li class="facebook"><a target="_blank" href="https://www.facebook.com/mypexpress/"><span></span></a></li>
                                <li class="messenger"><a target="_blank" href="https://www.messenger.com/t/mypexpress"><span></span></a></li>
                                <li class="instagram"><a target="_blank" href="https://www.instagram.com/mypexpress/"><span></span></a></li>
                                <li class="location"><a target="_blank" href="https://goo.gl/maps/oK2suAgBRkp"><span></span></a></li>
					        </ul>
				     </div>
                </div>
		 	<div class="footer-nav">
		 		<ul>
					<li><a href="index.html">Inicio</a></li>
					<li><a>|</a></li>
                    <li><a href="about.html">Acerca de M&amp;P</a></li>
                    <li><a>|</a></li>
					<li><a href="#">Contacto</a></li>
				</ul>
		 	</div>
		 	<div class="clear"></div>
	    </div>
	</div>
</div>
</body>
</html>