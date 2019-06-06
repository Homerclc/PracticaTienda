{if (isset($productos))}
<h2>Listado de cesta</h2>
    {$total=0}
    {foreach $productos as $producto=>$unidades}
        <form action='productos.php' method='POST'>
        {$unidades['unidades']} unidades del producto {$unidades['productos']->getnombrecorto()} a {$unidades['productos']->getPVP()}€/u TOTAL: {$unidades['unidades']*$unidades['productos']->getPVP()}€
        {$total=$total+($unidades['unidades']*$unidades['productos']->getPVP())}
        <input type='hidden' value='{$producto}' name='cod'>
        <input type='submit' name='Descontar' value='Descontar'/><br/>
        </form>
    <br />
    {/foreach}
    <strong>Importe total:</strong>{$total}€
    <form action='productos.php' method='POST'>
    <input type="submit" value='Vaciar' name="Vaciar"/>
    </form>
    <form action="pagar.php" method="POST">
        <input type="hidden" value="{$total}" name="total"/>
        <input type="submit" value="Pagar" name="pagar" />
    </form>
{/if}