<?php /* Smarty version Smarty-3.1.15, created on 2015-04-05 15:04:35
         compiled from "app/view/master_template.html" */ ?>
<?php /*%%SmartyHeaderCode:1414027700551baaf9624115-81913973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21e0b286e9ba837e2c88d8aa8516785961167507' => 
    array (
      0 => 'app/view/master_template.html',
      1 => 1428206265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1414027700551baaf9624115-81913973',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_551baaf963df71_93227354',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551baaf963df71_93227354')) {function content_551baaf963df71_93227354($_smarty_tpl) {?>  
<?php echo $_smarty_tpl->getSubTemplate ("template/meta.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
	
    <!-- HEADER DEFAULT -->
    <?php echo $_smarty_tpl->getSubTemplate ("template/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    

    <!-- CONTENT -->
    <div class="content">
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	</div>
	<!-- FOOTER -->
    <?php echo $_smarty_tpl->getSubTemplate ("template/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
