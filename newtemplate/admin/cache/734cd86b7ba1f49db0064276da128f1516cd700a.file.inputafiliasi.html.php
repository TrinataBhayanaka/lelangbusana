<?php /* Smarty version Smarty-3.1.15, created on 2015-02-15 23:17:19
         compiled from "view/about/inputafiliasi.html" */ ?>
<?php /*%%SmartyHeaderCode:199320010454e0c51f25dda7-70693077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '734cd86b7ba1f49db0064276da128f1516cd700a' => 
    array (
      0 => 'view/about/inputafiliasi.html',
      1 => 1424016989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199320010454e0c51f25dda7-70693077',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54e0c51f2806c7_08807528',
  'variables' => 
  array (
    'basedomain' => 0,
    'data' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e0c51f2806c7_08807528')) {function content_54e0c51f2806c7_08807528($_smarty_tpl) {?>
<script>
$(function () {
	$('#postdate').datepicker ();
	$('#expiredate').datepicker ();
	
	$("#isi").jqte();
	
	$('input:checkbox, input:radio').iCheck({
		checkboxClass: 'icheckbox_minimal-blue',
		radioClass: 'iradio_minimal-blue',
		inheritClass: true
	})
})
</script>

<style>
.jqte_editor{
    height: 350px;
}
</style>


<div id="content-header">
	<h1>Isi Afiliasi</h1>
</div> <!-- #content-header -->	

<div id="content-container">
	<form id="validate-enhanced" class="form parsley-form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
article/articleinp" enctype="multipart/form-data">

		<div class="row">
			<div class="col-md-9">
				<div class="portlet">
				
					<div class="portlet-header">

						<h3>
							<i class="fa fa-tasks"></i>
							Form Afiliasi
						</h3>

					</div> <!-- /.portlet-header -->
				
					<div class="portlet-content">

						<div class="col-sm-12">
							<div class="form-group">
							<label for="textarea-input">Title</label>
								<input type="text" name="title" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" />
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
							<label for="textarea-input">Link</label>
								<input type="text" name="content" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
" />
							</div>
						</div>	
							
									<!-- hidden -->
									<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" />
                                    <input type="hidden" name="categoryid" value="3" />
                                    <input type="hidden" name="articletype" value="3" />
                                    <input type="hidden" name="n_status" value="1" />
									<input type="hidden" name="authorid" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['id'];?>
" />
									
									<!-- hidden -->
							<input type="submit" class="btn btn-primary" value="Submit" id="submit" />
						</div>
                        
                                                                                                                 
					</div>
				</div>
                                
			</div>
		</div>
	
	</form>
</div><?php }} ?>
