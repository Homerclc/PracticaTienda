{if (isset($cesta))}
<h2>Listado de cesta</h2>
    {foreach $cesta as $producto=>$unidades}
    {$unidades}  del producto de código {$producto}
    <br />
    {/foreach}
{/if}