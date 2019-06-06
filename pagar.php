<?php

require('Smarty.class.php');
include 'Producto.php';
include 'DB.php';
include 'Cesta.php';

$plantillaPagar = new Smarty();
$plantillaPagar->template_dir = 'vistas/templates/template';
$plantillaPagar->compile_dir = 'vistas/templates/template_c';
$nombre=$_SESSION['nombre'];
$cont = 0;

$total=$_POST['total'];

$cesta=Cesta::obtener_cesta();

$productos=$cesta->getProductos();
var_dump($productos);

$plantillaPagar->assign('productos', $productos);
$plantillaPagar->assign('nombre', $nombre);

$plantillaPagar->assign('total', $total);


$plantillaPagar->display('pagar.tpl');

?>


