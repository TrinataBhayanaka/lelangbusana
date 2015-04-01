<?php /* Smarty version Smarty-3.1.15, created on 2014-09-10 08:51:23
         compiled from "./view/sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:897232047540f9eddc67242-38018999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd064259dbd57878c55967c97fc189d9b7462e5cb' => 
    array (
      0 => './view/sidebar.html',
      1 => 1410310281,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '897232047540f9eddc67242-38018999',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_540f9eddc7a8f3_73305694',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540f9eddc7a8f3_73305694')) {function content_540f9eddc7a8f3_73305694($_smarty_tpl) {?>
<div id="sidebar-wrapper" class="collapse sidebar-collapse">
	
	<div id="search">
		<form>
			<input class="form-control input-sm" type="text" name="search" placeholder="Search..." />

			<button type="submit" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
		</form>		
	</div> <!-- #search -->

	<nav id="sidebar">		
		
		<ul id="main-nav" class="open-active">			
			
			
			<li class="dropdown active">
				<a href="javascript:;">
					<i class="fa fa-file-text"></i>
					Article 
					<span class="caret"></span>
				</a>				
				<ul class="sub-nav">
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
article/addarticle">
							<i class="fa fa-plus"></i> 
							Add New Article
						</a>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
home">
							<i class="fa fa-list-alt"></i> 
							Article List
						</a>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
article/trash">
							<i class="fa fa-trash-o"></i>
							Trash
						</a>			
					</li>
				</ul>
			</li>

			
		</ul>
				
	</nav> <!-- #sidebar -->

</div> <!-- /#sidebar-wrapper --><?php }} ?>
