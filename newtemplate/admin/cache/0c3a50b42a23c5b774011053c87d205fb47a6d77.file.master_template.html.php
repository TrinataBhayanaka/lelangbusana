<?php /* Smarty version Smarty-3.1.15, created on 2015-03-25 13:52:01
         compiled from "view/master_template.html" */ ?>
<?php /*%%SmartyHeaderCode:262009418540f9ed43a7d95-43100635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c3a50b42a23c5b774011053c87d205fb47a6d77' => 
    array (
      0 => 'view/master_template.html',
      1 => 1426549202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262009418540f9ed43a7d95-43100635',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_540f9ed43bfc62_83993229',
  'variables' => 
  array (
    'admin' => 0,
    'content' => 0,
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540f9ed43bfc62_83993229')) {function content_540f9ed43bfc62_83993229($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("template/meta.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
	<div id="wrapper">
	<!-- HEADER -->
		
		<?php if (($_smarty_tpl->tpl_vars['admin']->value)) {?>

		<?php echo $_smarty_tpl->getSubTemplate ("template/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
		<?php echo $_smarty_tpl->getSubTemplate ("template/jsplugin.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
		<?php echo $_smarty_tpl->getSubTemplate ("template/top-bar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
		<?php echo $_smarty_tpl->getSubTemplate ("template/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
		
		<div id="content">
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		</div>

		
		<?php } else { ?>
			<?php echo $_smarty_tpl->getSubTemplate ("template/jsplugin.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>


		<?php }?>
		
	
	</div>

</body> 
</html>

<script type="text/javascript">
    /*$(document).ready(function() {
        $('.table').dataTable( {
            "language": {
                "url": "<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
addons/datatable/Indonesian.lang"
            }
        } );
    } );*/
    
    $(document).ready(function() {
        /* Add event listener to the dropdown input */
        $('select#artikel').change( function() { $('.table').dataTable().fnFilter( $(this).val() ); } );
    } );
</script><?php }} ?>
