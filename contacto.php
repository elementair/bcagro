<?php

require_once('requires.php');
session_start();
$_SESSION['numero_empresa'] = 99;
$conexion = new Conexion();
$conexion->selecciona_base_datos();
$link = $conexion->link;

$ruta_base = './sistema/';
$contacto = new Contacto($link);
$resultado_contacto = $contacto->obten_registros_activos('contacto');
$reguistros_contacto = $resultado_contacto['registros'];
$imagen_fondo_contacto=$ruta_base.$reguistros_contacto[0]['contacto_archivo'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Contacto - BC Agro</title>
	<!--Metadatos-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">

	<!--Favicon-->
	<link rel="icon" type="image/png" href="svg/favicon.svg" />

	<!--Estilos-->
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/stylesSM.css">
    <link rel="stylesheet" href="css/stylesMD.css">
    <link rel="stylesheet" href="css/stylesLG.css">
    <link rel="stylesheet" href="css/stylesXL.css">
    <link rel="stylesheet" href="css/index.css">

</head>
<body>
	<!--Menú desplegable-->
   <nav id="menu">
        <nav>
            <img src="svg/x_cerrar.svg" id="btnCloseMenu" alt="cerrar Menú">
        </nav>

        <div class="container-fluid">
            <div class="row">
                <section id="menuA">
                    <p>(33) 3810 7757</p>
                    <p>BC Agro© 2017</p>
                </section>

                <section id="menuB">
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="nosotros.php">Nosotros</a></li>
                        <li><a href="productos.php">Productos</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                    </ul>

                    <hr>

                     <a href="https://www.facebook.com/BC-AGRO-129763897137908/"><img src="svg/icono_facebook_blanco.svg" id="facebookLogo" alt="facebook"></a>
                    <a href="contacto.html"><img src="svg/icono_correo_blanco.svg" id="mailLogo" alt="correo"></a>
                    <!--TWITTER-->
                    <a href="https://twitter.com/BcAgro?s=08"><img src="img/icono_twitter.svg" alt="Twitter"></a>
                    <!--Instagram-->
                    <a href="https://www.instagram.com/bcagro/"><img src="img/icono_instagram.svg" alt="Instagram"></a>
                </section>
            </div>
        </div>
    </nav>

	<section id="Contacto1" style="background-image: url(<?php echo $imagen_fondo_contacto; ?>);">
		<nav>
			<!-- <img id="naviconContacto" class="btnOpenMenu iconHover" src="svg/navicon.svg" alt="Navicon"> -->
			<article id="btn-menuIndex" class="btn-menu btnOpenMenu">
                <span class="btn-menuText">MENÚ</span>
                <img class="naviconIndex iconHover" src="svg/navicon.svg">
            </article>
		</nav>

		<!--Formulario-->
		<div class="container-fluid">
			<div class="row">
				<article id="Contacto1a" class="col-sm-6 col-md-12 col-lg-6">
					<h1>Envíanos tu mensaje</h1>

					<form id="formContacto">
						<input id="nombreContacto" type="text" required="required" name="Nombre" placeholder="Nombre">
						<input id="emailContacto" type="email" required="required" name="Email" placeholder="Email">
						<input id="asuntoContacto" type="text" required="required" name="Asunto" placeholder="Asunto">

						<textarea id="mensajeContacto" required="required" placeholder="Escribe tu mensaje"></textarea>
					</form>

					<article id="Contacto1b">
						<img src="svg/flecha_vinculo.svg" alt="boton Verde">
					</article>
				</article>

				

				<!--Mapa de google maps-->
				<article id="mapa_google_contacto" class="col-sm-6 col-md-12 col-lg-6">
					<iframe id="mapa_contacto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.275713576404!2d-103.38173704967286!3d20.658359005628284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ade0db6d1cf9%3A0x92543753b0cef729!2sBc+Agro%2C+S.A.+de+C.V.!5e0!3m2!1ses-419!2smx!4v1518216859075" frameborder="0" style="border:0" allowfullscreen></iframe>
				</article>
			</div>
		</div>
	</section>

	<footer id="footerContacto">
		<section id="footerContactoA">
			<div class="container-fluid">
				<div class="row">
					<article class="col-3 col-sm-2">
						<a href="index.php"><img src="svg/logo.svg" alt="BC Agro"></a>
					</article>

					<article class="col-9 col-sm-8">
						<p>Contacto@bcagro.com.mx</p>
						<p>Plátano 1522-A, Del Fresno, 44900 Guadalajara, Jal</p>
						<p>(33) 3810 7757</p>
					</article>
				</div>
			</div>
		</section>

		<section class="footerB">
            <div class="container-fluid">
                <div class="row">
                    <article class="footerB1">
                        <!--FACEBOOK-->
                        <a href="https://www.facebook.com/BC-AGRO-129763897137908/"><img src="svg/icono_facebook_blanco.svg" alt="Facebook"></a>
                        <!--EMAIL-->
                        <a href="contacto.php"><img src="svg/icono_correo_blanco.svg" alt="Correo"></a>
                        <!--TWITTER-->
                         <a href="https://twitter.com/BcAgro?s=08"><img src="img/icono_twitter.svg" alt="Twitter"></a>
                        <!--Instagram-->
                        <a href="https://www.instagram.com/bcagro/"><img src="img/icono_instagram.svg" alt="Instagram"></a>

                    </article>

                    <article class="footerB2">
                        <p>BC Agro© 2017</p>
                        <p>Todos los derechos reservados</p>
                        <p><a href="aviso_de_privacidad_bcagro.php" target="_blank"><font color="white">Aviso de privacidad</font></a></p>
                    </article>
                </div>
            </div>
        </section>
	</footer>


	<!--Scripts-->
	<script src="./views/js/jquery.min.js"></script>
    <script src="./views/js/bootstrap.min.js"></script>
	<script>
		$(".btnOpenMenu").click(function(){
        	$("#menu").animate({'top':'0'});
        });
        $("#btnCloseMenu").click(function(){
        	$("#menu").animate({'top':'-100%'});
        });

         //Efecto hover del navicon
        $(".iconHover").hover(function(){
            $(this).attr("src", "svg/navicon_over.svg");
        }, function(){
            $(this).attr("src", "svg/navicon.svg");
        });

        $(".iconHoverVerde").hover(function(){
            $(this).attr("src", "svg/navicon_verde_over.svg");
        }, function(){
            $(this).attr("src", "svg/navicon_verde.svg");
        });
	</script>
	<script type="text/javascript" src="./js/contacto.js"></script>
</body>
</html>