{if (isset($productos))}
<h2>Listado de cesta</h2>
    {foreach $productos as $producto=>$unidades}
    {$unidades['unidades']}  del producto de código {$producto}
    <br />
    {/foreach}
{/if}