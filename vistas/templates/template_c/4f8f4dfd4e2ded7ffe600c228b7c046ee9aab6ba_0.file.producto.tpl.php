<?php
/* Smarty version 3.1.33, created on 2019-05-29 18:00:19
  from 'C:\wamp64\www\PracticaTienda\vistas\templates\template\producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ceec8b38e6729_59692724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f8f4dfd4e2ded7ffe600c228b7c046ee9aab6ba' => 
    array (
      0 => 'C:\\wamp64\\www\\PracticaTienda\\vistas\\templates\\template\\producto.tpl',
      1 => 1559152816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ceec8b38e6729_59692724 (Smarty_Internal_Template $_smarty_tpl) {
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
       <form action='producto.php' method='POST'>
                            <?php echo $_smarty_tpl->tpl_vars['listado']->value;?>

       </form>
       <hr />
        <form action='logoff.php' method='POST'>
       <input type='submit' name='desconectar' value='Desconectar usuario <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
' />
        </form>
    </body>
</html><?php }
}
