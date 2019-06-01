<?php
/* Smarty version 3.1.33, created on 2019-06-01 11:47:59
  from 'C:\wamp64\www\PracticaTienda\vistas\templates\template\cesta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf265ef49e238_85180065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccba70dbf4248a51db2516d1bec5ae62212db774' => 
    array (
      0 => 'C:\\wamp64\\www\\PracticaTienda\\vistas\\templates\\template\\cesta.tpl',
      1 => 1559389671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf265ef49e238_85180065 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['productos']->value))) {?>
<h2>Listado de cesta</h2>
<form action='productos.php' method='POST'>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'unidades', false, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value => $_smarty_tpl->tpl_vars['unidades']->value) {
?>
        <form action='productos.php' method='POST'>
        <?php echo $_smarty_tpl->tpl_vars['unidades']->value['unidades'];?>
  del producto de código <?php echo $_smarty_tpl->tpl_vars['producto']->value;?>
 a <?php echo $_smarty_tpl->tpl_vars['unidades']->value['productos']->getPVP();?>
 
        <input type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['producto']->value;?>
' name='cod'>
        <input type='submit' name='Descontar' value='Descontar'/><br/>
        </form>

    <br />
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <input type="submit" value='Vaciar' name="Vaciar"/>
</form>
<?php }
}
}
