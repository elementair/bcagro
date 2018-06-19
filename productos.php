<?php

require_once('requires.php');
session_start();
$_SESSION['numero_empresa'] = 99;
$conexion = new Conexion();
$conexion->selecciona_base_datos();
$link = $conexion->link;

$ruta_base = './sistema/';


$grupos_productos = new Grupo_Producto($link);
$resultado_grupos_productos = $grupos_productos->obten_registros_activos('grupo_producto');
$grupos_productos = $resultado_grupos_productos['registros'];


function obten_submenu($link, $id){
    $submenu = new sub_producto($link);
    $filtro = array('grupo_producto.id'=>$id,'sub_producto.status'=>1);
    $r = $submenu->filtro_and('sub_producto',$filtro);



    return $r['registros'];
}


$productos = new Producto($link);
$filtro = array('sub_producto_id'=>2);
if(isset($_GET['sub_producto_id'])){
	$sub_producto_id = $_GET['sub_producto_id'];
	$filtro = array('sub_producto_id'=>$sub_producto_id);
}


$resultado_productos = $productos->filtro_and('producto', $filtro);
$productos = $resultado_productos['registros'];


$producto_encabezado = new Producto_Encabezado($link);
$resultado_producto_encabezado = $producto_encabezado->obten_registros_activos('producto_encabezado');
$reguistros_producto_encabezado = $resultado_producto_encabezado['registros'];
$titulo_producto_encabezado=$reguistros_producto_encabezado[0]['producto_encabezado_descripcion'];
$observaciones_producto_encabezado=$reguistros_producto_encabezado[0]['producto_encabezado_observaciones'];
$imagen_fondo_producto_encabezado=$ruta_base.$reguistros_producto_encabezado[0]['producto_encabezado_archivo'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Producto - BC Agro</title>
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

	<header id="Productos1" style="background-image: url(<?php echo $imagen_fondo_producto_encabezado; ?>);">
		<div id="degradadoNegro"></div>
		<nav id="navProductos">
			<article id="logoNav">
				<a href="index.php"><img id="logoProductos" src="svg/logo.svg" alt="BC Agro" draggable="false"></a>
			</article>
			<!-- <article id="logoNav">
                <a href="#"><img src="svg/logo.svg"></a>
            </article> -->

			<article id="btn-menuIndex" class="btn-menu btnOpenMenu">
                <span class="btn-menuText">MENÚ</span>
                <img class="naviconIndex iconHover" src="svg/navicon.svg">
            </article>
		</nav>

		<section id="Productos1a">
			<div class="container-fluid">
				<div class="row">
					<article class="col-sm-7 col-md-11 offset-md-1 col-lg-9 offset-lg-2">
						<h1> <?php echo $titulo_producto_encabezado; ?></h1>
						<p> <?php echo $observaciones_producto_encabezado; ?></p>
					</article>
				</div>
			</div>
		</section>
	</header>



	<section id="Productos2">
		<div class="container-fluid">
			<div class="row">
				<article id="Productos2a" class="col-sm-4 col-md-8 offset-md-1 col-lg-5 offset-lg-0 col-xl-3">
					<input type="search" class="searchbar"  placeholder="Buscar por Nombre"  >
					<p>Buscar Producto por grupo</p>
					<ul id="myBtnContainer">
					<?php 
						foreach ($grupos_productos as $grupo_producto) {
							$descripcion = $grupo_producto['grupo_producto_descripcion'];
							$id = $grupo_producto['grupo_producto_id'];
					?>
						<li class="li">
                            <?php echo $descripcion; ?>
                            <span class="menu_sub_producto" onclick="toggle_submenu('<?php echo $id; ?>')">
                                <img src="./img/menu_suproductos_up.svg" id="img_<?php echo $id; ?>">
                            </span>
                        </li>
                            <li class="ul_link" id="ul_<?php echo $id; ?>">
                                <ul>

                                    <?php
                                        $submenus = obten_submenu($link,$id);
                                        foreach ($submenus as $submenu){
                                            ?>
                                            <li onclick="filterSelection('<?php echo $submenu['sub_producto_id']; ?>')">
                                                <?php echo $submenu['sub_producto_descripcion']; ?>
                                            </li>
                                    <?php
                                        }
                                    ?>

                                </ul>
                            </li>
					<?php
						}
					?>
						
					</ul>
				</article>

				<article id="Productos2b" class="col-sm-7 offset-sm-1 col-md-12 offset-md-0 col-lg-6 offset-lg-1 col-xl-8">
					<input type="search" class="searchbar"  placeholder="Buscar por Nombre">

					<div id="galeriaProductos">

						<?php 
						foreach ($productos as $producto) {
							$descripcion = $producto['producto_descripcion'];
							$imagen = $ruta_base.$producto['producto_archivo'];
							$nombre = $producto['producto_nombre'];
							$grupo_producto_descripcion = $producto['grupo_producto_descripcion'];
							$id_producto = $producto['producto_id'];
						?>
						<a href="productoIndividual.php?producto_id=<?php echo $id_producto;?>" class='filterDiv'><div 
							class="bloqueProducto <?php echo $grupo_producto_descripcion; ?>" 
							data-productoNombre="<?php echo $descripcion; ?>">
							
							<img src="<?php echo $imagen; ?>" alt="<?php echo $descripcion; ?>" draggable="false">
							<p><?php echo $nombre; ?></p>
							<p class="nombre_oculto"><?php echo strtoupper($nombre); ?></p>
						</div></a>
					<?php
						}
					?>
					</div>
				</article>
			</div>
		</div>
	</section>



	<!--Footer-->
	<footer id="footerProductos">
		<section id="footerProductosA">
			<div class="container-fluid">
				<div class="row">
					<article class="col-3 col-sm-2">
						<a href="index.php"><img src="svg/logo.svg" alt="BC Agro" draggable="false"></a>
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

	<!--Filtar opciones de galeria de productos-->
	<script src="js/filtrarProductos.js"></script>
</body>
</html>