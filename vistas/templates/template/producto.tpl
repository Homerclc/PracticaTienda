    
<!DOCTYPE html>
{*Platilla para visualizar los productos, se invoca desde productos.php*}
<html>
    <head>
        <title>Productos </title>
        <meta charset="UTF-8">
    </head>
    <body>
       {*primero solo visualizaremos que el usuario está conectado*}
       <h1>Bienvenido a esta página {$nombre}</h1>
       <hr/>
       <h3>Lista de Productos</h3>
       
        {*Mostramos el listado de los productos*}
                    {$listado}
       
       <hr />
       
       {if (isset($cesta))}
        <h2>Listado de cesta</h2>
        {foreach $cesta as $producto=>$unidades}
            {$unidades}  del producto de código {$producto}
            <br />
        {/foreach}
       {/if}
       

        <form action='logoff.php' method='POST'>
       <input type='submit' name='desconectar' value='Desconectar usuario {$nombre}' />
        </form>
    </body>
</html>