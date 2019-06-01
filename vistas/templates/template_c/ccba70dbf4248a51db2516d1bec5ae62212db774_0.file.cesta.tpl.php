<?php
/* Smarty version 3.1.33, created on 2019-06-01 13:58:45
  from 'C:\wamp64\www\PracticaTienda\vistas\templates\template\cesta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf284954b7e77_45429703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccba70dbf4248a51db2516d1bec5ae62212db774' => 
    array (
      0 => 'C:\\wamp64\\www\\PracticaTienda\\vistas\\templates\\template\\cesta.tpl',
      1 => 1559397523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf284954b7e77_45429703 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['productos']->value))) {?>
<h2>Listado de cesta</h2>
    <?php $_smarty_tpl->_assignInScope('total', 0);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'unidades', false, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value => $_smarty_tpl->tpl_vars['unidades']->value) {
?>
        <form action='productos.php' method='POST'>
        <?php echo $_smarty_tpl->tpl_vars['unidades']->value['unidades'];?>
 unidades del producto <?php echo $_smarty_tpl->tpl_vars['unidades']->value['productos']->getnombrecorto();?>
 a <?php echo $_smarty_tpl->tpl_vars['unidades']->value['productos']->getPVP();?>
€/u TOTAL: <?php echo $_smarty_tpl->tpl_vars['unidades']->value['unidades']*$_smarty_tpl->tpl_vars['unidades']->value['productos']->getPVP();?>
€
        <?php $_smarty_tpl->_assignInScope('total', $_smarty_tpl->tpl_vars['total']->value+($_smarty_tpl->tpl_vars['unidades']->value['unidades']*$_smarty_tpl->tpl_vars['unidades']->value['productos']->getPVP()));?>
        <input type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['producto']->value;?>
' name='cod'>
        <input type='submit' name='Descontar' value='Descontar'/><br/>
        </form>

    <br />
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <strong>Importe total:</strong><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
€
    <form action='productos.php' method='POST'>
    <input type="submit" value='Vaciar' name="Vaciar"/>
    </form>
<?php }
}
}
