<?php
/* Smarty version 3.1.33, created on 2019-06-01 15:42:27
  from 'C:\wamp64\www\PracticaTienda\vistas\templates\template\pagar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf29ce30329b3_53875981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6b4af14f0539dc544d79d73a1f520c864d242a5' => 
    array (
      0 => 'C:\\wamp64\\www\\PracticaTienda\\vistas\\templates\\template\\pagar.tpl',
      1 => 1559403744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf29ce30329b3_53875981 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
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
                        <?php $_smarty_tpl->_assignInScope('cont', 0);?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'lista');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lista']->value) {
?>
                            
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cesta']->value, 'prod');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['lista']->value['cod'] == $_smarty_tpl->tpl_vars['prod']->value->getCod()) {?>
                                    
                                    <tr class="pago">
                                        <td class="pago"><?php echo $_smarty_tpl->tpl_vars['cont']->value++;?>
 <?php echo $_smarty_tpl->tpl_vars['lista']->value['nombre_corto'];?>
</td>
                                        <td class="pago"><?php echo $_smarty_tpl->tpl_vars['prod']->value->getCantidad();?>
</td>
                                        <td class="pago"><?php echo $_smarty_tpl->tpl_vars['prod']->value->getPvp();?>
</td>         
                                    <input type="hidden" name="item_name_<?php echo $_smarty_tpl->tpl_vars['cont']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['lista']->value['nombre_corto'];?>
">
                                    <input type="hidden" name="amount_<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
">
                                    <input type="hidden" name="quantity_<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
">
                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tr>
                    </table>
                    <hr />
                    <table>
                        <thead>
                            <tr class="pago"><th class="pago" colspan=2><strong>RESUMEN DE LA FACTURA</strong></th>
                        </thead>
                       
                        
                        
                            <td class="pago">TOTAL pagar</td>
                            <td class="pago"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</td>
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
                    <input type="submit" value ="Desconectar Usuario <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
" name="desconectar">
                </form>
            </div>
        </div>
    </div>
</body>
</html>



<?php }
}
