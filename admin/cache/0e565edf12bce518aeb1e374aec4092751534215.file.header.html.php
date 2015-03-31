<?php /* Smarty version Smarty-3.1.15, created on 2015-03-25 13:54:05
         compiled from "./view/template/header.html" */ ?>
<?php /*%%SmartyHeaderCode:535102302543dec622707f8-59408826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e565edf12bce518aeb1e374aec4092751534215' => 
    array (
      0 => './view/template/header.html',
      1 => 1426549202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '535102302543dec622707f8-59408826',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_543dec622778c6_55811008',
  'variables' => 
  array (
    'app_domain' => 0,
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543dec622778c6_55811008')) {function content_543dec622778c6_55811008($_smarty_tpl) {?><header id="header">

		<h1 id="site-logo">
			<a href="<?php echo $_smarty_tpl->tpl_vars['app_domain']->value;?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
images/logos/logo-fix.png" alt="Admin" height="60px"/>
			</a>
		</h1>	

		<a href="javascript:;" data-toggle="collapse" data-target=".top-bar-collapse" id="top-bar-toggle" class="navbar-toggle collapsed">
			<i class="fa fa-cog"></i>
		</a>

		<a href="javascript:;" data-toggle="collapse" data-target=".sidebar-collapse" id="sidebar-toggle" class="navbar-toggle collapsed">
			<i class="fa fa-reorder"></i>
		</a>

</header> <!-- header --><?php }} ?>
