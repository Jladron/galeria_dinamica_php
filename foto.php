<?php
require 'funciones.php';

$conexion = conexion('galeria', 'root', '');
if(!$conexion){
    die();
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if(!$id){
    header('Location: index.php');
}

$statment = $conexion->prepare('SELECT * FROM fotos WHERE id = :id');
$statment->execute(array(':id' => $id));

$foto = $statment->fetch();

if(!$foto){
    header('Location: index.php');
}

require 'views/foto.view.php';


?>