<?php
/* Smarty version 3.1.33, created on 2019-06-01 10:01:40
  from 'C:\wamp64\www\PracticaTienda\vistas\templates\template\producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf24d04b2dcf3_31931344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f8f4dfd4e2ded7ffe600c228b7c046ee9aab6ba' => 
    array (
      0 => 'C:\\wamp64\\www\\PracticaTienda\\vistas\\templates\\template\\producto.tpl',
      1 => 1559383293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cesta.tpl' => 1,
  ),
),false)) {
function content_5cf24d04b2dcf3_31931344 (Smarty_Internal_Template $_smarty_tpl) {
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
       
       <?php $_smarty_tpl->_subTemplateRender('file:cesta.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
       

        <form action='logoff.php' method='POST'>
       <input type='submit' name='desconectar' value='Desconectar usuario <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
' />
        </form>
    </body>
</html><?php }
}
