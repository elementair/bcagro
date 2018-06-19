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
    
</body>
</html>