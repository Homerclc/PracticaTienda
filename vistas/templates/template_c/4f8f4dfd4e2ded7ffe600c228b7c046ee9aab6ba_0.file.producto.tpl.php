<?php
/* Smarty version 3.1.33, created on 2019-05-30 17:53:22
  from 'C:\wamp64\www\PracticaTienda\vistas\templates\template\producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf018929d36e8_73354901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f8f4dfd4e2ded7ffe600c228b7c046ee9aab6ba' => 
    array (
      0 => 'C:\\wamp64\\www\\PracticaTienda\\vistas\\templates\\template\\producto.tpl',
      1 => 1559238795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf018929d36e8_73354901 (Smarty_Internal_Template $_smarty_tpl) {
?>    
<!DOCTYPE html>
<html>
    <head>
        <title>Productos </title>
        <meta charset="UTF-8">
    </head>
    <body>
              <h1>Bienvenido a esta página <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</h1>
       <hr/>
       <h3>Lista de Productos</h3>
       
                            <?php echo $_smarty_tpl->tpl_vars['listado']->value;?>

       
       <hr />
       
       <?php if ((isset($_smarty_tpl->tpl_vars['cesta']->value))) {?>
        <h2>Listado de cesta</h2>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cesta']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
            <?php echo $_smarty_tpl->tpl_vars['unidades']->value;?>
  del producto de código <?php echo $_smarty_tpl->tpl_vars['producto']->value;?>

            <br />
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
       <?php }?>
       

        <form action='logoff.php' method='POST'>
       <input type='submit' name='desconectar' value='Desconectar usuario <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
' />
        </form>
    </body>
</html><?php }
}
