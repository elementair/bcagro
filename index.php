<?php
require_once('requires.php');
session_start();
$_SESSION['numero_empresa'] = 99;
$conexion = new Conexion();
$conexion->selecciona_base_datos();
$link = $conexion->link;

$ruta_base = './sistema/';

function elemento_muestra($tabla, $ruta_base, $link){
    $objeto = new $tabla($link);
    $resultado = $objeto->obten_registros_activos($tabla);
    $registros = $resultado['registros'];
    $n_registros = $resultado['n_registros'];
    $i = rand(0,$n_registros-1);
    $elemento_mostrar = $registros[$i];
    $ruta_elemento = $ruta_base.$elemento_mostrar[$tabla.'_archivo'];
    return $ruta_elemento;
}


$ruta_video = elemento_muestra('video_index', $ruta_base, $link);
$ruta_fondo = elemento_muestra('fondo_index', $ruta_base, $link);
$ruta_fondo_ases_campo = elemento_muestra('ases_campo', $ruta_base, $link);
$ruta_fondo_alianzas_comerciales = elemento_muestra('alianzas_comerciales', $ruta_base, $link);
$ruta_fondo_nuestros_clientes = elemento_muestra('nuestros_clientes', $ruta_base, $link);



function mostrar_galeria($tabla, $ruta_base, $link, $id_carrousel){
    $objeto = new $tabla($link);
    $resultado = $objeto->obten_registros_activos($tabla);

    echo'<div id="'.$id_carrousel.'" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">';
	
	$i=0;
    foreach($resultado['registros'] as $resultado_imagen){
    	if($i == 0){
    		echo '<div class="carousel-item active">
                <img class="d-block img-fluid" src="sistema/'.$resultado_imagen[$tabla.'_archivo'].'" alt="'.$resultado_imagen[$tabla.'_descripcion'].'">
            </div>';
    	}

        echo '<div class="carousel-item">
                <img class="d-block img-fluid" src="sistema/'.$resultado_imagen[$tabla.'_archivo'].'" alt="'.$resultado_imagen[$tabla.'_descripcion'].'">
            </div>';

        $i++;
    }

            
    echo '	<!--Controles del Carrousel-->
        	<a class="carousel-control-prev" href="#'.$id_carrousel.'" role="button" data-slide="prev">
            	<i class="fa fa-chevron-left fa-lg"></i>
           		<span class="sr-only">Anterior</span>
        	</a>
        	<a class="carousel-control-next" href="#'.$id_carrousel.'" role="button" data-slide="next">
            	<i class="fa fa-chevron-right fa-lg"></i>
            	<span class="sr-only">Siguiente</span>
        	</a>
    	</div>';
}

$fondo_index = new Fondo_Index($link);
$resultado_fondo_index= $fondo_index->obten_registros_activos('fondo_index');
$reguistros_fondo_index = $resultado_fondo_index['registros'];
$titulo_fondo_index =$reguistros_fondo_index[0]['fondo_index_descripcion'];



$asesorio_campo = new Ases_Campo($link);
$resultado_asesorio_campo = $asesorio_campo->obten_registros_activos('ases_campo');
$reguistros_asesorio_campo = $resultado_asesorio_campo['registros'];
$titulo_ases_campo=$reguistros_asesorio_campo[0]['ases_campo_descripcion'];
$observaciones_ases_campo=$reguistros_asesorio_campo[0]['ases_campo_observaciones'];

$alianzas_comerciales = new Alianzas_Comerciales($link);
$resultado_alianzas_comerciales = $asesorio_campo->obten_registros_activos('alianzas_comerciales');
$reguistros_alianzas_comerciales = $resultado_alianzas_comerciales['registros'];
$titulo_alianzas_comerciales=$reguistros_alianzas_comerciales[0]['alianzas_comerciales_descripcion'];
$observaciones_alianzas_comerciales=$reguistros_alianzas_comerciales[0]['alianzas_comerciales_observaciones'];

$nuestros_clientes = new Nuestros_Clientes($link);
$resultado_nuestros_clientes = $nuestros_clientes->obten_registros_activos('nuestros_clientes');
$reguistros_nuestros_clientes = $resultado_nuestros_clientes['registros'];
$titulo_nuestros_clientes=$reguistros_nuestros_clientes[0]['nuestros_clientes_descripcion'];
$observaciones_nuestros_clientes=$reguistros_nuestros_clientes[0]['nuestros_clientes_observaciones'];

$quienes_somos = new Quienes_Somos($link);
$resultado_quienes_somos = $quienes_somos->obten_registros_activos('quienes_somos');
$reguistros_quienes_somos = $resultado_quienes_somos['registros'];
$titulo_quienes_somos=$reguistros_quienes_somos[0]['quienes_somos_descripcion'];
$observaciones_quienes_somos=$reguistros_quienes_somos[0]['quienes_somos_observaciones'];





?>
<!DOCTYPE html>
<html lang="es" id="htmlIndex">
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0"/>
    <title>BC Agro</title>

    <!--Favicon-->
    <link rel="icon" type="image/png" href="svg/favicon.svg" />
    
    <script src="./views/js/jquery.min.js"></script>
    <script src="./views/js/bootstrap.min.js"></script>
    <script src="./views/js/bootstrap-select.min.js"></script>

    <script type="text/javascript" src="./views/js/bootstrap-filestyle.js"></script>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/stylesSM.css">
    <link rel="stylesheet" href="css/stylesMD.css">
    <link rel="stylesheet" href="css/stylesLG.css">
    <link rel="stylesheet" href="css/stylesXL.css">
    <link rel="stylesheet" href="css/index.css">


   
    <link rel="stylesheet" href="./views/css/layout.css">
    <link rel="stylesheet" href="./views/css/layout.css" media="print">

</head>
<body id="bodyIndex">
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



    
    <!--Elementos Fijos-->
    <article id="fixedLogoNav">
        <a href="#"><img src="svg/logo.svg" draggable="false"></a>
    </article>

    <article id="fixedBtn-menuIndex" class="btn-menu btnOpenMenu">
        <span class="btn-menuText">MENÚ</span>
        <img class="naviconIndex iconHover" src="svg/navicon.svg">
    </article>




    <!--Primera Sección-->
    <section id="Index1" style="background-image: url(<?php echo $ruta_fondo?>);">
         <!--Video de Fondo-->
        <video autoplay muted loop id="myVideo">
            <source src="<?php echo $ruta_video; ?>" type="video/mp4">
        </video>

        <div id="degradadoIndex"></div>
        
        <nav id="NavIndex1">
            <article id="logoNav">
                <a href="#"><img src="svg/logo.svg"></a>
            </article>
            
            <article id="btn-menuIndex" class="btn-menu btnOpenMenu">
                <span class="btn-menuText">MENÚ</span>
                <img class="naviconIndex iconHover" src="svg/navicon.svg">
            </article>
        </nav>

        <h1> <?php echo $titulo_fondo_index; ?></h1>
    
        <!--Elementos posicionados-->
        <ul class="indicadorDerecha">
            <li class="indicadorDerecha1"></li>
            <li class="indicadorDerecha2"></li>
            <li class="indicadorDerecha3"></li>
            <li class="indicadorDerecha4"></li>
            <li class="indicadorDerecha5"></li>
        </ul>

        <div id="flechaAbajo1" class="flechaAbajo">
            <img src="svg/flecha_blanca.svg" alt="ir Hacia Abajo">
        </div>
    </section>





    <!--Segunda Sección (Quienes Somos)-->
    <section id="Index2">
        <div id="flecha_up_1" class="flecha_up"> 
            <img src="svg/flecha_gris.svg" alt="ir Hacia Arriba">
        </div>
        <!--Elementos estáticos-->
        <nav id="NavIndex2">
            <span class="btn-menuText">MENÚ</span>
            <img class="naviconIndex btnOpenMenu iconHoverVerde" src="svg/navicon_verde.svg">

        </nav>
        

        <article>
            <div class="container-fluid">

                <div class="row">

                    <section id="Index2A">
                        <img src="img/img_texto_quienes_somos.png" alt="Quienes Somos" draggable="false">
                        <img src="img/sombra_quienes_somos.png" alt="sombra_quienes_somos" draggable="false">
                    </section>

                    <section id="Index2B">
                        <h3> <?php echo $titulo_quienes_somos; ?></h3>
                        <p> <?php echo $observaciones_quienes_somos; ?></p>
                    </section>
                </div>
            </div>
        </article>

        <!--Elementos Posicionados-->
        <ul class="indicadorDerechaVerde">
            <li class="indicadorDerecha1"></li>
            <li class="indicadorDerecha2"></li>
            <li class="indicadorDerecha3"></li>
            <li class="indicadorDerecha4"></li>
            <li class="indicadorDerecha5"></li>
        </ul>

        <div id="flechaAbajo2" class="flechaAbajo">
            <img src="svg/flecha_gris.svg" alt="ir Hacia Abajo">
        </div>
    </section>





    <!--Tercera Sección (Asesoria)-->
    <section id="asesoria_en_campo" style="background-image: url(<?php echo $ruta_fondo_ases_campo; ?>);">
        <div id="flecha_up_3" class="flecha_up"> 
            <img src="svg/flecha_gris.svg" alt="ir Hacia Arriba">
        </div>
        <h2> <?php echo $titulo_ases_campo; ?></h2>
        <p> <?php echo  $observaciones_ases_campo; ?></p>

        <ul class="indicadorDerechaVerde">
            <li class="indicadorDerecha1"></li>
            <li class="indicadorDerecha2"></li>
            <li class="indicadorDerecha3"></li>
            <li class="indicadorDerecha4"></li>
            <li class="indicadorDerecha5"></li>
        </ul>
          
        <div class="triangulo_derecha"></div>

        

        <img id="flecha_abajo_asesoria" class="flecha_abajo" src="svg/flecha_gris.svg" alt="ir Hacia Abajo">
    </section>





    <section id="alianzas_comerciales" style="background-image: url(<?php echo $ruta_fondo_alianzas_comerciales; ?>);">
        
        <div class="rectangulo_blanco"></div>
        <div class="triangulo_blanco"></div>
        
        <div class="container-fluid">

            <div class="row">
                <article class="col-sm-8 offset-md-3 col-lg-7 offset-lg-1">
                    <h3> <?php echo $titulo_alianzas_comerciales;  ?></h3>
                    <p> <?php echo $observaciones_alianzas_comerciales; ?></p>
                    <div id="flecha_up_3" class="flecha_up"> 
            <img src="svg/flecha_gris.svg" alt="ir Hacia Arriba">
        </div>
                </article>

                <article id="carrousel_alianzas" class="col-sm-4 col-md-6 col-lg-4">
                    <?php mostrar_galeria('alianza', $ruta_base, $link, 'slideshow_alianzas');?>
                </article>
            </div>
        </div>

        <ul class="indicadorDerechaVerde">
            <li class="indicadorDerecha1"></li>
            <li class="indicadorDerecha2"></li>
            <li class="indicadorDerecha3"></li>
            <li class="indicadorDerecha4"></li>
            <li class="indicadorDerecha5"></li>
        </ul>

        


        <img id="flecha_abajo_alianzas" class="flecha_abajo" src="svg/flecha_blanca.svg" alt="ir Hacia Abajo">
    </section>



    <!--Nueva sección Nuestros clientes-->
    <section id="nuestros_clientes" style="background-image: url(<?php echo $ruta_fondo_nuestros_clientes; ?>);">
        <div id="flecha_up_4" class="flecha_up"> 
            <img src="svg/flecha_gris.svg" alt="ir Hacia Arriba">
        </div>
        <div class="rectangulo_blanco"></div>
        <div class="triangulo_blanco"></div>

        <h3> <?php echo $titulo_nuestros_clientes; ?> </h3>

        <article id="carrousel_clientes">
            <?php mostrar_galeria('cliente', $ruta_base, $link, 'slideshow_clientes');?>
        </article>

        <ul class="indicadorDerechaVerde">
            <li class="indicadorDerecha1"></li>
            <li class="indicadorDerecha2"></li>
            <li class="indicadorDerecha3"></li>
            <li class="indicadorDerecha4"></li>
            <li class="indicadorDerecha5"></li>
        </ul>

         
    </section>

    <div class="contenedor_facebook">
        <div class="contenedor_icono">
            <img class="img_facebook" src="img/icono_facebook_fijo.svg" >
        </div>
        <div class="vista_publicaciones">
            <img src="img/cerrar_ventana_facebook.svg" class="botonclose_facebook" >
            <div id="fb-root"></div>
                <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.12';
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>

                <div class="fb-page" data-href="https://www.facebook.com/BC-AGRO-129763897137908/" data-tabs="timeline" data-width="400" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/BC-AGRO-129763897137908/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/BC-AGRO-129763897137908/">BC AGRO</a></blockquote></div>
        </div>
        
    </div>





    <!--Footer-->
    <footer id="footerIndex" class="mainFooter">
        <section class="footerA">
            <nav id="NavFooter">
                <span class="btn-menuText">MENÚ</span>
                <img class="naviconIndex btnOpenMenu iconHover" src="svg/navicon.svg">
            </nav>

            <img id="logoFooter" src="svg/logo.svg" alt="BC Agro">
            <div id="footerA1">
                <?php echo $observaciones_nuestros_clientes; ?>
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




    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/funcion_facebook.js"></script>
    <!--Script del menú-->
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




        //Flechas hacia abajo
        $("#flechaAbajo1").click(function(){
            var posicionIndex2 = $('#Index2').offset().top;
            $('html, body').animate({scrollTop: posicionIndex2}, 1000);
            $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");

            $("#fixedBtn-menuIndex img").attr("src", "svg/navicon_verde.svg");
            $(".btn-menuText").css("color", "#66cc33");
        });

        $("#flechaAbajo2").click(function(){
            var posicionIndex3 = $('#asesoria_en_campo').offset().top;
            $('html, body').animate({scrollTop: posicionIndex3}, 1000);
            $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");

            $("#fixedBtn-menuIndex img").attr("src", "svg/navicon_verde.svg");
            $(".btn-menuText").css("color", "#66cc33");
        });

        $("#flecha_abajo_asesoria").click(function(){
            var posicionIndex4 = $('#alianzas_comerciales').offset().top;
            $('html, body').animate({scrollTop: posicionIndex4}, 1000);
            $('#fixedLogoNav img').attr('src', "svg/logo.svg");

            $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
            $(".btn-menuText").css("color", "white");

            if(screen.width >= 576 && screen.width<= 767){
                $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");
            }

            if(screen.width >=992){
                $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");
            }
        });

        $("#flecha_abajo_alianzas").click(function(){
            var posicionFooter = $('#nuestros_clientes').offset().top;
            $('html, body').animate({scrollTop: posicionFooter}, 1000);
            $('#fixedLogoNav img').attr('src', "svg/logo.svg");

            $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
            $(".btn-menuText").css("color", "white");

            if(screen.width >= 576){
                $("#fixedBtn-menuIndex img").attr("src", "svg/navicon_verde.svg");
                $(".btn-menuText").css("color", "#66cc33");
            }
        });

        $("#flecha_abajo_clientes").click(function(){
            var positionFooter = $('#footerIndex').offset().top;
            $('html, body').animate({scrollTop: positionFooter}, 1000);
            $('#fixedLogoNav img').attr('src', "svg/logo.svg");

            $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
            $(".btn-menuText").css("color", "white");
        });




        /***Indicadores a la derecha***/
        $(".indicadorDerecha1").click(function(){
            var posicionIndex1 = $('#Index1').offset().top;
            $('html, body').animate({scrollTop: posicionIndex1}, 1000);
            $('#fixedLogoNav img').attr('src', "svg/logo.svg");

            $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
            $(".btn-menuText").css("color", "white");
        });

        $(".indicadorDerecha2").click(function(){
            var posicionIndex2 = $('#Index2').offset().top;
            $('html, body').animate({scrollTop: posicionIndex2}, 1000);
            $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");

            $("#fixedBtn-menuIndex img").attr("src", "svg/navicon_verde.svg");
            $(".btn-menuText").css("color", "#66cc33");
        });

        $(".indicadorDerecha3").click(function(){
            var posicionIndex3 = $('#asesoria_en_campo').offset().top;
            $('html, body').animate({scrollTop: posicionIndex3}, 1000);
            $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");

            $("#fixedBtn-menuIndex img").attr("src", "svg/navicon_verde.svg");
            $(".btn-menuText").css("color", "#66cc33");
        });

        $(".indicadorDerecha4").click(function(){
            var posicionIndex3 = $('#alianzas_comerciales').offset().top;
            $('html, body').animate({scrollTop: posicionIndex3}, 1000);
            $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
            $(".btn-menuText").css("color", "white");

            if(screen.width >= 576 && screen.width<= 767){
                $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");
            }

            if(screen.width >=992){
                $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");
            }
        });

        $(".indicadorDerecha5").click(function(){
            var posicionIndex5 = $('#nuestros_clientes').offset().top;
            $('html, body').animate({scrollTop: posicionIndex5}, 1000);
            $('#fixedLogoNav img').attr('src', "svg/logo.svg");

            $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
            $(".btn-menuText").css("color", "white");

            if(screen.width >= 576){
                $("#fixedBtn-menuIndex img").attr("src", "svg/navicon_verde.svg");
                $(".btn-menuText").css("color", "#66cc33");
            }
        });



        /***Scroll fijo***/
        function ScrollHandler(pageId) { 
            var page = $('#' + pageId);
            var pageStart = page.offset().top;
            var pageJump = false;

            function scrollToPage() {
                pageJump = true;
                $('html, body').animate({ 
                    scrollTop: pageStart 
                }, {
                    duration: 1000,
                    complete: function() {
                    pageJump = false;
                    }
                });

                //console.log(pageId+" "+page.offset().top);
                switch(pageId){
                    case 'Index1':
                        $('#fixedLogoNav img').attr('src', "svg/logo.svg");

                        $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
                        $(".btn-menuText").css("color", "white");
                    break;

                    case 'Index2':
                        $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");

                        $("#fixedBtn-menuIndex img").attr("src", "svg/navicon_verde.svg");
                        $(".btn-menuText").css("color", "#66cc33");
                    break;

                    case 'asesoria_en_campo':
                        $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");

                        $("#fixedBtn-menuIndex img").attr("src", "svg/navicon_verde.svg");
                        $(".btn-menuText").css("color", "#66cc33");
                    break;

                    case 'alianzas_comerciales':
                        $('#fixedLogoNav img').attr('src', "svg/logo.svg");
                        if(screen.width > 576  && screen.width <= 767){
                            $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");
                        }
                        if(screen.width >992){
                            $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");

                            $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
                        	$(".btn-menuText").css("color", "white");
                        }
                    break;

                    case 'nuestros_clientes':
                        $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");

                        $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
                        $(".btn-menuText").css("color", "white");

                        if(screen.width >= 576){
                            $("#fixedBtn-menuIndex img").attr("src", "svg/navicon_verde.svg");
                            $(".btn-menuText").css("color", "#66cc33");
                        }
                    break;

                    case 'footerIndex':
                        $('#fixedLogoNav img').attr('src', "svg/logo.svg");
                        $(".btn-menuText").css("color", "white");
                    break;
                }
            }

            window.addEventListener('wheel', function(event) {
               var viewStart = $(window).scrollTop();
                    if (!pageJump)  {   
                        var pageHeight = page.height();
                        var pageStopPortion = pageHeight / 2;
                        var viewHeight = $(window).height();

                        var viewEnd = viewStart + viewHeight;
                        var pageStartPart = viewEnd - pageStart;
                        var pageEndPart = (pageStart + pageHeight) - viewStart;
                          
                        var canJumpDown = pageStartPart >= 0; 
                        var stopJumpDown = pageStartPart > pageStopPortion; 
                  
                        var canJumpUp = pageEndPart >= 0; 
                        var stopJumpUp = pageEndPart > pageStopPortion; 

                        var scrollingForward = event.deltaY > 0;
                        if (  ( scrollingForward && canJumpDown && !stopJumpDown) 
                        || (!scrollingForward && canJumpUp   && !stopJumpUp)) {
                            event.preventDefault();
                            scrollToPage();
                        } 
                    }else {
                        event.preventDefault();
                    }    
            });
        }

        new ScrollHandler('Index1'); 
        new ScrollHandler('Index2');
        new ScrollHandler('asesoria_en_campo');
        new ScrollHandler('alianzas_comerciales');
        new ScrollHandler('nuestros_clientes');
        new ScrollHandler('footerIndex');
    </script>
</body>
</html>