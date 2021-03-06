    
<?php
session_start();
require('Smarty.class.php');
include 'Producto.php';
include 'DB.php';
include 'Cesta.php';
$cesta=Cesta::obtener_cesta();
$d=DIRECTORY_SEPARATOR;
$plantilla = new Smarty;
$plantilla->template_dir = 'vistas'.$d.'templates'.$d.'template';
$plantilla->compile_dir = 'vistas'.$d.'templates'.$d.'template_c';

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
                . "<input type='submit' value='añadir' name='enviar'>"
                . " $nombre_corto | $precio <br>"
                . "<input type='hidden' value='$codigo' name='cod'>"
                . "</form>";
//pasamos los valores con formato a Profuctos.tpl con la variable $listado.
        $plantilla->assign("listado", $listado);
    }
    
} else {//si no estas logueado correctamente volvemos a la pagina de login.( para no entrar por url) 
    header('Location: login.php?error=Debes identificarte');
    exit();
}
$cesta=Cesta::obtener_cesta();

if(isset($_POST['enviar'])){
    $cod=$_POST['cod'];
    $cesta->add_producto($cod);
    $productos=$cesta->getProductos();
    
}

if(isset($_POST['Descontar'])){
    $cod=$_POST['cod'];
    $cesta->descuentaProducto($cod);
    $productos=$cesta->getProductos();
    

    
}

if(isset($_POST['Vaciar'])){
    $cesta->vaciarCesta();
}

$cesta->guardar_cesta();
$plantilla->assign("productos", $productos);
$plantilla->display('producto.tpl');

?>
