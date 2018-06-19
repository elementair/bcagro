<?php

require_once('requires.php');
session_start();
$_SESSION['numero_empresa'] = 99;
$conexion = new Conexion();
$conexion->selecciona_base_datos();
$link = $conexion->link;

$ruta_base = './sistema/';


//Crear instancia de  Productos
$producto = new Producto($link);

//Obtener un producto en especifico mediante el URL, si no lo encuentra el default es 2[ReyGrass]
if(isset($_GET['producto_id'])){
    $resultado_producto = $producto->obten_por_id('producto', $_GET['producto_id']);
}else{
    $resultado_producto = $producto->obten_por_id('producto', 2);
}

$producto = $resultado_producto['registros'];


//Obtener las imagenes de Imagen_Producto
$imagenes_producto_modelo = new Imagen_Producto($link);
$resultado_imagenes_producto = $imagenes_producto_modelo->obten_registros_activos('imagen_producto');

$imagenes_producto = $resultado_imagenes_producto['registros'];

$filtro = array('imagen_producto_id'=>2);
if(isset($_GET['producto_id'])){
	$producto_id = $_GET['producto_id'];
	$filtro = array('producto_id'=>$producto_id);
}

$resultado_imagenes_producto = $imagenes_producto_modelo->filtro_and('imagen_producto', $filtro);



//Obtener la información a imprimir en variables
$imagen_producto = $ruta_base.$producto[0]['producto_archivo'];
$nombre_producto = $producto[0]['producto_nombre'];
$descripcion_producto = $producto[0]['producto_descripcion'];
$caracteristicas_producto = $producto[0]['producto_caracteristicas'];//Aqui puse la info en la tabla diferente, pero enla vista del sistema no modifica el dashboard.
//$grupo_producto_id = $producto[0]['producto_grupo_producto_id'];



/*****Obtener la ruta del archivo de la ficha tecnica*****/
$ficha_tecnica_producto= new Ficha_Tecnica_Producto($link);
//$resultado_ficha_tecnica_producto = $ficha_tecnica_producto->obten_registros_activos('ficha_tecnica_producto');
//$fichas_tecnicas = $resultado_ficha_tecnica_producto['registros'];

$filtro_ficha_tecnica = array('ficha_tecnica_producto_producto_id'=>2);

if(isset($_GET['producto_id'])){
    $producto_id = $_GET['producto_id'];
    $filtro_ficha_tecnica = array('ficha_tecnica_producto_producto_id'=>$producto_id);
}

$resultado_ficha_tecnica = $ficha_tecnica_producto->filtro_and('ficha_tecnica_producto', $filtro);

$ficha_tecnica = $resultado_ficha_tecnica['registros'];

if($ficha_tecnica == Array()){
    $ficha_tecnica = "#";
    $link_ficha = $ficha_tecnica;
}else{
    $link_ficha = 'sistema/'.$ficha_tecnica[0]['ficha_tecnica_producto_archivo'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Producto Individual - BC Agro</title>
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





	<section id="ProductoIndividual1">
        
        <nav id="ProductoIndividualNav">
            <a href="index.php"><img src="svg/logo_bcagro_color.svg" id="logo" alt="BC Agro" draggable="false"></a>
            <div class="btnOpenMenu">
                <span class="d-sm-none">MENÚ</span>
                <img src="svg/navicon_verde.svg" id="navicon1" alt="Menú" class="iconHoverVerde">
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <article id="ProductoIndividual1a" class="col-sm-5 col-md-12 col-lg-5">
                    <div id="carouselProducto" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                        	<?php
                                $i = 0;
                        		foreach ($resultado_imagenes_producto['registros'] as $imagen_producto) {
                                    $active = '';
                        			if($i == 0){
                                        $active = 'active'; 
                                    }
                                    $i++;
                                    ?>

                                    <div class="carousel-item <?php echo $active; ?>">
                                        <img id="imgProducto" src="<?php echo $ruta_base.$imagen_producto['imagen_producto_archivo']; ?>" alt="producto" draggable="false">
                                    </div>
                                    <?php
                        		}
                        	?>
                        </div>
                        
                        <a class="carousel-control-prev" href="#carouselProducto" role="button" data-slide="prev">
                            <img id="flechaAnterior" src="svg/flecha_anterior.svg" alt="anterior" draggable="false">
                        </a>
                        <a class="carousel-control-next" href="#carouselProducto" role="button" data-slide="next">
                            <img id="flechaSiguiente" src="svg/flecha_siguiente.svg" alt="siguiente" draggable="false">
                        </a>
                    </div>
                </article>

                <article id="ProductoIndividual1b" class="col-sm-7 col-md-12 col-lg-7">
	                <div class="naviconPI2">
	                    <img src="svg/navicon_verde.svg" id="navicon2" alt="Menú" class="btnOpenMenu iconHoverVerde">
	                </div>
                    <h1><?php echo $nombre_producto; ?></h1>
                    <h2>Descripción</h2>
                    
                    <p><?php echo $descripcion_producto; ?></p>

                    <hr>

                    <h3>Características</h3>
                    
                    <?php echo $caracteristicas_producto; ?>

                    <hr>

                    <a class="btn_link_PI" href="productos.php?grupo_id=<?php echo $grupo_producto_id;?>">Regresar</a>
                    <a class="btn_link_PI" href="<?php echo $link_ficha;?>">Descargar ficha técnica</a>
                </article>
            </div>
        </div>
    </section>

    <script src="./views/js/jquery.min.js"></script>
    <!--Para hacer funcionar el carousel-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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