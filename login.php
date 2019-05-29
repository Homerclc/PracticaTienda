<?php
session_start();
include 'DB.php';
require('Smarty.class.php');
$plantilla = new Smarty;
$plantilla->template_dir = 'vistas/templates/template';
$plantilla->compile_dir = 'vistas/templates/template_c';
//asignamos los valores para personalizar plantilla, para sustituir las variables de la misma
if (isset($_POST['enviar'])) {
    $nombre = $_POST['usuario'];
    $pass = $_POST['password'];
    if (db::verificaCliente($nombre, $pass)) {
        //si es correcto guardamos el nombre en una variable de sesion
        $_SESSION['nombre']=$nombre;
        header('Location: http://localhost/PracticaTienda/productos.php');
    } else {
        $plantilla->assign('error', 'Introduce nombre y contraseña de nuevo');
    }
}

$plantilla->display('login.tpl');
?>
