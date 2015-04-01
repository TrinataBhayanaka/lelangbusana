<?php /* Smarty version Smarty-3.1.15, created on 2014-09-10 08:50:30
         compiled from "./view/header.html" */ ?>
<?php /*%%SmartyHeaderCode:680395636540f9eddc0a7e7-67466771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4130e282db22da60b62aa7e97f809b0f19b4bef' => 
    array (
      0 => './view/header.html',
      1 => 1410310227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '680395636540f9eddc0a7e7-67466771',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_540f9eddc10141_09950894',
  'variables' => 
  array (
    'app_domain' => 0,
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540f9eddc10141_09950894')) {function content_540f9eddc10141_09950894($_smarty_tpl) {?><header id="header">

		<h1 id="site-logo">
			<a href="<?php echo $_smarty_tpl->tpl_vars['app_domain']->value;?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
images/logos/logo.png" alt="Admin" width="60px"/>
			</a>
		</h1>	

		<a href="javascript:;" data-toggle="collapse" data-target=".top-bar-collapse" id="top-bar-toggle" class="navbar-toggle collapsed">
			<i class="fa fa-cog"></i>
		</a>

		<a href="javascript:;" data-toggle="collapse" data-target=".sidebar-collapse" id="sidebar-toggle" class="navbar-toggle collapsed">
			<i class="fa fa-reorder"></i>
		</a>

</header> <!-- header --><?php }} ?>
