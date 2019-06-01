{if (isset($productos))}
<h2>Listado de cesta</h2>
<form action='productos.php' method='POST'>
    {foreach $productos as $producto=>$unidades}
        <form action='productos.php' method='POST'>
        {$unidades['unidades']}  del producto de código {$producto} a {$unidades['productos']->getPVP()} 
        <input type='hidden' value='{$producto}' name='cod'>
        <input type='submit' name='Descontar' value='Descontar'/><br/>
        </form>

    <br />
    {/foreach}
    <input type="submit" value='Vaciar' name="Vaciar"/>
</form>
{/if}