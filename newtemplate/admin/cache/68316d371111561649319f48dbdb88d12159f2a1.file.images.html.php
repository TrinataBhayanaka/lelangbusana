<?php /* Smarty version Smarty-3.1.15, created on 2015-01-23 14:00:43
         compiled from "view/gallery/images.html" */ ?>
<?php /*%%SmartyHeaderCode:96729674254c1f19b227924-16896452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68316d371111561649319f48dbdb88d12159f2a1' => 
    array (
      0 => 'view/gallery/images.html',
      1 => 1417527879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96729674254c1f19b227924-16896452',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'basedomain' => 0,
    'albumId' => 0,
    'data' => 0,
    'var' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54c1f19b2c1834_51237845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c1f19b2c1834_51237845')) {function content_54c1f19b2c1834_51237845($_smarty_tpl) {?><script type="text/javascript">
	function AreAnyCheckboxesChecked () {
	  if ($("#Form2 input:checkbox:checked").length > 0)
		{
		    $("#btn-dis").removeAttr("disabled");
		}
		else
		{
		   $('#btn-dis').attr("disabled","disabled");
		}
	}
</script>
<div id="content-header">
	<h1>Galeri</h1>
</div> <!-- #content-header -->	

<div id="content-container">

	<div class="row">

		<div class="col-md-12">
                
            <div class="portlet">

				<div class="portlet-header">

					<h3>
						<i class="fa fa-table"></i>
						List Album
					</h3>

				</div> <!-- /.portlet-header -->
                
                <div class="portlet-content">
                	<form action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
gallery/imagedel" method=POST name="checks" ID="Form2" onsubmit="return confirm('Yakin ingin menghapus gambar?');">

                	<a class="btn btn-default btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
gallery/addImages/?album=<?php echo $_smarty_tpl->tpl_vars['albumId']->value;?>
"><i class="fa fa-plus"></i> Tambah Gambar</a>
					<button type="submit" class="btn btn-primary btn-sm" id="btn-dis" disabled><i class="fa fa-trash-o"></i> Delete</button>
					<hr/>
					<input type="hidden" name="album" value="<?php echo $_smarty_tpl->tpl_vars['albumId']->value;?>
"/>
					<?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->_loop = true;
?>
                    <div class="col-md-3 portfolio-item">
                       <a class="preview" href="<?php echo $_smarty_tpl->tpl_vars['var']->value['files'];?>
" rel="prettyPhoto">
                            <img class="img-responsive thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['var']->value['files'];?>
" alt="" />
                        </a>
                        <h3>
                        	<input type="checkbox" class="icheck-input" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['var']->value['id'];?>
" onchange="return AreAnyCheckboxesChecked();" />
                            <a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
gallery/images/album=<?php echo $_smarty_tpl->tpl_vars['var']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['var']->value['title'];?>
</a>
                        </h3>
                        <p class="gallery-caption" ><?php echo $_smarty_tpl->tpl_vars['var']->value['brief'];?>
</p>
						<hr/>
                    </div>
					
					<?php } ?>
                    </form>
                </div>
                
            </div>
            
		</div> <!-- /.col -->

	</div> <!-- /.row -->

</div><?php }} ?>
