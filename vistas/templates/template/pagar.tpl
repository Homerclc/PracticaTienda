<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Listado de Productos a Pagar</title>
        <link href="./cesta.css" rel="stylesheet" type="text/css">
    </head>

    <body class="pagproductos">

        <div id="contenedor">
            <h1>Resumen de factura del usuario dwes</h1>
            <h4 style="text-align:right">Fecha :20-22-19 06-02-39</h4>
            <hr />
            <br class="divisor" />
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                <!--
                Datos para pagar paypal
                -->
                <input name="cmd" type="hidden" value="_cart" />
                <input name="upload" type="hidden" value="1" />
                <!--
                Mi correo de pay pall
                -->
                <input name="business" type="hidden" value="sergiopajares1102-facilitator@iesandorra.es" />
                <input name="shopping_url" type="hidden" value="http://localhost/EjerciciosEntregaManuel/tiendaPagarDescripcion/pagar.php" />
                <input name="currency_code" type="hidden" value="EUR" />
                <input name="return" type="hidden" value="http://localhost/EjerciciosEntregaManuel/tiendaPagarDescripcion/pagar.php"/>
                <input name="notify_url" type="hidden" value="http://localhost/EjerciciosEntregaManuel/tiendaPagarDescripcion/pagar.php" />
                <input name="rm" type="hidden" value="2" />
                <div class="pago">
                    <table id="tablaPagar" class="pago">
                        <thead>
                            <tr class="pago"><th class="pago">Articulo</th>
                                <th class="pago">Cantidad</th>
                                <th class="pago">Precio Unitario</th></tr>

                        </thead>
                        {$cont=0}
                        {foreach from=$productos item=$lista}
                            
                            {foreach from=$cesta item=$prod}
                                {if $lista['cod'] == $prod->getCod()}
                                    
                                    <tr class="pago">
                                        <td class="pago">{$cont++} {$lista['nombre_corto']}</td>
                                        <td class="pago">{$prod->getCantidad()}</td>
                                        <td class="pago">{$prod->getPvp()}</td>         
                                    <input type="hidden" name="item_name_{$cont}" value="{$lista['nombre_corto']}">
                                    <input type="hidden" name="amount_{$total}" value="{$total}">
                                    <input type="hidden" name="quantity_{$total}" value="{$total}">
                                {/if}
                            {/foreach}
                        {/foreach}
                        </tr>
                    </table>
                    <hr />
                    <table>
                        <thead>
                            <tr class="pago"><th class="pago" colspan=2><strong>RESUMEN DE LA FACTURA</strong></th>
                        </thead>
                       
                        
                        
                            <td class="pago">TOTAL pagar</td>
                            <td class="pago">{$total}</td>
                        </tr>
                    </table>
                </div>
                <input type="image" src="http://www.paypal.com/es_ES/i/btn/x-click-but01.gif" border="0" name="submit" alt="Realice pagos con PayPal: es rápido, gratis y seguro">
            </form>
                <form action='imprimir.php' methos='POST'>
                    <input type="submit" value='Imprimir Factura' name='submit'>
                </form>
            <div id="pie">
                <form action="login.php" method="POST">
                    <input type="submit" value ="Desconectar Usuario {$nombre}" name="desconectar">
                </form>
            </div>
        </div>
    </div>
</body>
</html>



