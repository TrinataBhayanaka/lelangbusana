<?php /* Smarty version Smarty-3.1.15, created on 2015-02-15 22:56:37
         compiled from "view/about/inputstruktur.html" */ ?>
<?php /*%%SmartyHeaderCode:560226308543deeebc1c4e5-55898550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '188a49955b88bc74bea3c303e44b4b9d934c759b' => 
    array (
      0 => 'view/about/inputstruktur.html',
      1 => 1424015792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '560226308543deeebc1c4e5-55898550',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_543deeebc4e079_59613563',
  'variables' => 
  array (
    'basedomain' => 0,
    'data' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543deeebc4e079_59613563')) {function content_543deeebc4e079_59613563($_smarty_tpl) {?>
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
	<h1>Isi Struktur Organisasi</h1>
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
							Form Struktur Organisasi
						</h3>

					</div> <!-- /.portlet-header -->
				
					<div class="portlet-content">

						<div class="col-sm-12">
							<div class="form-group">
							<label for="textarea-input">Struktur Organisasi</label>
								
								<textarea style="width:100%;" id="brief_berita" name ="content" class="ckeditor"><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
</textarea>
							</div>
							
							
									<!-- hidden -->
									<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" />
                                    <input type="hidden" name="categoryid" value="3" />
                                    <input type="hidden" name="articletype" value="2" />
                                    <input type="hidden" name="n_status" value="1" />
									<input type="hidden" name="authorid" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['id'];?>
" />
									<input type="hidden" name="image" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
" />
									<input type="hidden" name="image_url" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['file'];?>
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
