<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>

<body>
<div class="cesta">
    {if (isset($productos))}
        <h2>Listado de cesta</h2> 
    {$total=0} 
    <!--recorremos los productos de la cesta y vamos mostrando lo que nos interesa:  -->
    {foreach $productos as $producto=>$unidad}
        <form action='productos.php' method='POST'>
            <!--vamos imprimiento los productos con UNIDADES, CODIGO, PVP y PVP total:  -->
            <strong>  {$unidad['unidades']}</strong> unidades de: <strong>{$unidad['productos']->getnombrecorto()}</strong> precio unidad: <strong>{$unidad['productos']->getPVP() } €</strong> TOTAL: <strong>{$unidad['unidades']*$unidad['productos']->getPVP() }</strong>€ {$total=$total+($unidad['unidades']*$unidad['productos']->getPVP())}
            <!--guardamos el codigo del producto y añadimos un boton de quitar producto:-->
            <input type='hidden' value='{$producto}' name='cod'>
            <input type='submit' name='Descontar' value='Descontar artículo' />
            <br/>
        </form>
            <br /> 
    {/foreach}
        <hr/>
</div>
        <!--Mostramos el precio total-->
        <strong>Importe total: </strong>{$total}€
        
        <!--Boton PAGAR ( PayPal )e informacion -->
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                <!--Datos para pagar paypal-->
                <input name="cmd" type="hidden" value="_cart" />
                <input name="upload" type="hidden" value="1" />
                <!--Mi correo de pay pall-->
                <input name="business" type="hidden" value="jorgelopca.92-facilitator@gmail.com" />

                <input name="shopping_url" type="hidden" value="productos.php"/>
                <input name="return" type="hidden" value="notify_url.php"/>
                <input name="notify_url" type="hidden" value="notify_url.php" />
                <input name="rm" type="hidden" value="1" />

                <input name="currency_code" type="hidden" value="EUR" />


                
                <!--pasamos el contenido de la factura y mostramos el boton ( foto de paypal) -->
            {$n=1}
            {foreach $productos as $producto}

                    <!--vamos imprimiento los productos con UNIDADES, CODIGO, PVP y PVP total:  -->
                <input type="hidden" name="item_name_{$n}" value="{$producto['productos']->getnombrecorto()}">
                <input type="hidden" name="amount_{$n}" value="{$producto['productos']->getPVP()}">
                <input type="hidden" name="quantity_{$n}" value="{$producto['unidades']}">
                {$n=$n+1}
            {/foreach}


                <!--boton de paypal -->
                <input type="image" src="http://www.paypal.com/es_ES/i/btn/x-click-but01.gif" border="0" name="submit" alt="Realice pagos con PayPal: es rápido, gratis y seguro">
        </form>
        <hr/>
            <br/>
        <!--Boton VACIAR CESTA-->
        <form action='productos.php' method='POST'>
            <input type="submit" value='Vaciar' name="Vaciar" />
        </form>
    {/if}
</body>

</html>


