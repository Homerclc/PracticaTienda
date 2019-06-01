    
<?php
session_start();
require('Smarty.class.php');
include 'Producto.php';
include 'DB.php';
include 'Cesta.php';
$plantilla = new Smarty;
$plantilla->template_dir = 'vistas/templates/template';
$plantilla->compile_dir = 'vistas/templates/template_c';

if (isset($_SESSION['nombre'])) {
    
//pasamos el valor del nombre de usuario conectado a la vista
    $plantilla->assign("nombre", $_SESSION['nombre']);
//llamamos al metodo ObtieneProductos ( nos devuelve un array de Producto ) 
    $lista_productos = DB::obtieneProductos();
//recorremos la lista y vamos guardando el contenido en variables para dar formato a la lista:
    foreach ($lista_productos as $objetoProducto) {
        $precio = $objetoProducto->getPVP();
        $codigo = $objetoProducto->getcodigo();
        $nombre_corto = $objetoProducto->getnombrecorto();
//damos formato y guardamos el codigo en un hidden. (un form para cada producto y boton.
        $listado  .= "<form action='productos.php' method='POST'>"
                . "<input type='submit' value='añadir' name='submit'>"
                . " $nombre_corto | $precio <br>"
                . "<input type='hidden' value='$codigo' name='cod'>"
                . "</form>";
//pasamos los valores con formato a Profuctos.tpl con la variable $listado.
        $plantilla->assign("listado", $listado);
    }
    
} else {//si no estas logueado correctamente volvemos a la pagina de login.( para no entrar por url) 
    header('Location: http://localhost/tienda/logica/login.php');
}
$cesta=Cesta::obtener_cesta();



if(isset($_POST['submit'])){
    $cod=$_POST['cod'];
    $cesta->add_producto($cod);
    $productos=$cesta->getProductos();
}








$cesta->guardar_cesta();


$plantilla->assign("productos", $productos);

$plantilla->display('producto.tpl');


?>