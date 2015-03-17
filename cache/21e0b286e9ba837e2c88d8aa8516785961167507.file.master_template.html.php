<?php /* Smarty version Smarty-3.1.15, created on 2015-03-17 07:43:18
         compiled from "app/view/master_template.html" */ ?>
<?php /*%%SmartyHeaderCode:80739624255066c369fd4c1-19597990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21e0b286e9ba837e2c88d8aa8516785961167507' => 
    array (
      0 => 'app/view/master_template.html',
      1 => 1426549203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80739624255066c369fd4c1-19597990',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55066c36a78c23_39477294',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55066c36a78c23_39477294')) {function content_55066c36a78c23_39477294($_smarty_tpl) {?>  
<?php echo $_smarty_tpl->getSubTemplate ("template/meta.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
	
    <!-- HEADER DEFAULT -->
    <?php echo $_smarty_tpl->getSubTemplate ("template/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    

    <!-- CONTENT -->
    <div>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	</div>
	<!-- FOOTER -->
    <?php echo $_smarty_tpl->getSubTemplate ("template/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
