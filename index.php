<?php 
require 'funciones.php';
$fotos_por_pagina = 8;

$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1);
$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;

$conexion = conexion('galeria', 'root', '');

if(!$conexion){
    die();
}

$statment = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio, $fotos_por_pagina");
$statment->execute();
$fotos = $statment->fetchAll();

if(!$fotos){
    header('Location: index.php');
}

$statment = $conexion->prepare("SELECT FOUND_ROWS() as total_filas");
$statment->execute();
$total_post = $statment->fetch()['total_filas'];
$total_paginas = ceil($total_post / $fotos_por_pagina);


require 'views/index.view.php';
?>