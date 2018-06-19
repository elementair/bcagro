<?php
require_once('requires.php');
session_start();
$_SESSION['numero_empresa'] = 99;
$conexion = new Conexion();
$conexion->selecciona_base_datos();
$link = $conexion->link;

$ruta_base = 'sistema/';



$objeto = new nosotros_tema($link);
$r_nosotros_tema  = $objeto->obten_registros_activos('nosotros_tema');
$nosotros_temas =  $r_nosotros_tema['registros'];

$objeto = new nosotros_tema($link);
$r_nosotros  = $objeto->obten_registros_activos('nosotros');
$nosotros =  $r_nosotros['registros'][0];

$nosotros['nosotros_imagen_derecha'] = str_replace('./','',$nosotros['nosotros_imagen_derecha']);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Nosotros - BCAgro</title>

	<!--Metadatos-->
	<meta charset="utf-8" name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0" />

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

	<div class="container-fluid">
		<div class="row">
			<header id="nosotros1" style="background: url('<?php echo $ruta_base.$nosotros['nosotros_imagen_izquierda']; ?>') center center;" >
            <a href="index.php"><img id="logoProductos" src="svg/logo.svg" alt="BC Agro" draggable="false"></a>         
            </header>

			<section id="nosotros2" style="background: url('<?php echo $ruta_base.$nosotros['nosotros_imagen_derecha']; ?>') no-repeat center center;" >
				<article id="navNosotros" class="btnOpenMenu">
					<span>MENÚ</span>
					<img src="svg/navicon_verde.svg" class="iconHoverVerde" alt="Navicon" draggable="false">
				</article>



                <article id="nosotros2a">
                    <h1>Sobre Nosotros</h1>
                </article>

                <article id="nosotros2b">
                <?php
                foreach ($nosotros_temas as $tema){
                    ?>
                    <h3><?php echo $tema['nosotros_tema_descripcion']; ?></h3>
                    <?php echo $tema['nosotros_tema_observaciones']; ?>
                <?php
                }
                ?>

			</section>
		</div>
	</div>

	<!--Scripts-->
	<script src="./views/js/jquery.min.js"></script>
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
</body>
</html>