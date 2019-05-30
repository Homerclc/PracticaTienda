<?php
/* Smarty version 3.1.33, created on 2019-05-30 17:42:32
  from 'C:\wamp64\www\PracticaTienda\vistas\templates\template\cesta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf01608607fe5_21554155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccba70dbf4248a51db2516d1bec5ae62212db774' => 
    array (
      0 => 'C:\\wamp64\\www\\PracticaTienda\\vistas\\templates\\template\\cesta.tpl',
      1 => 1559238146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf01608607fe5_21554155 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['cesta']->value))) {?>
<h2>Listado de cesta</h2>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cesta']->value, 'unidades', false, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value => $_smarty_tpl->tpl_vars['unidades']->value) {
?>
    <?php echo $_smarty_tpl->tpl_vars['unidades']->value;?>
  del producto de código <?php echo $_smarty_tpl->tpl_vars['producto']->value;?>

    <br />
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
